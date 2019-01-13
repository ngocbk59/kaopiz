<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
    	
    	$products = Product::take(12)->get();
    	return view('homepage',compact('products'));
    }
    public function listProducts($cateId){
    	//find object by cate id
    	$cate = Category::find($cateId);
    	if($cate == null){
    		return "Not found!";
    	}
    	//get paginate of products belong to current cate
    	$products = Product::where('cate_id', $cateId)->paginate(12);
    	//return view with cate and list products
    	return view('list-product', compact('cate','products'));
    }

    /*
    * Lấy ra chi tiết sản phẩm dựa vào 

     */
     

    public function detail($id){
        // //1.lấy thông tin sản phẩm dựa trên $id
        // $item = Product::find($id);
       
        // if($item == null){
        //     return "404 Not found!";
        // }
        // //2.faker để chế 3 cái ảnh con m
        // $faker = \Faker\Factory::create();
        // $galleries = [];
        // for($i = 0; $i < rand(3,8); $i++){
        //     $galleries[] = $faker->imageUrl($width = 640, $height = 480, 'cats');
        // }
        // //3.ralate product
        // //3.1.lấy ra 4 sản phẩm mới nhất của sản phẩm hiện tại
        // $relates = Product::where('cate_id',$item->cate_id)->orderBy('id',"desc")->take(4)->get();

        // return view('product-details', compact('item','galleries','relates'));
        // kiem tra xem id co ton tai trong bang product khong
        $model = Product::find($id);
        if(!$model){
            return "404 notfound";
        }
        
        // tang view cua san pham len 1 don vi
        $model->views = ++$model->views;
        $model->save();
        // tra ve giao dien chi tiet san pham
        return view('detail', compact('model'));
    }
    public function cpLogin(){
        return view('admin.login');
    }

    public function logout(){
        Auth::logout();
        return redirect(route('home'));
    }

    public function cpPostLogin(Request $request){
        $remember = $request->has('remember'); 
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect(route('dashboard'));
        }else{
            return view('admin.login')->with('msg', 'Sai tài khoản/mật khẩu');
        }
    }

    public function addCart(Request $request){
		$item = Product::find($request->id);
		if(!$item){
			return "404 notfound!";
		}
		
		// check xem co gio hang hay chua
		// chua co => tao moi
		$cart = session()->has('cart') == true ? session('cart') : [];
		// kiem tra san pham xem co trong gio hang hay chua
		$flag = -1;
		foreach($cart as $key => $val){
			if($val['id'] === $item->id){
				$flag = $key;
				break;
			}
		}
		// 1 - chua co => chuyen $item => mang | add quantity = 1
		if($flag === -1){
			// push item vao trong gio hang
			$item->quantity = 1;
			array_push($cart, $item->toArray());
		}else{ // 2 - da co trong gio hang => xac dinh index
			// cart[index][quantity]++
			$cart[$flag]['quantity']++;
		}
		session(['cart' => $cart]);
		// dd(session('cart'));
		return response()->json(['success' => true, 'data' => $cart]);

	}
}
