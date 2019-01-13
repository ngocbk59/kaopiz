@extends('layouts.admin.master')
@section('title', 'Danh sách sản phẩm')
@section('content')
<div class="box">
    <div class="box-header">
        <div class="row">
            <form action="" method="get" class="col-sm-4">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="keyword" value="{{$keyword}}">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-info btn-flat">Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
        <tbody><tr>
            <th style="width: 10px">#</th>
            <th>Tên sp</th>
            <th>Ảnh</th>
            <th>Danh mục</th>
            <th>Giá</th>
            <th>Views</th>
            <th>Star</th>
            <th><a href="{{route('product.add')}}" class="btn btn-sm btn-success">Tạo mới</a></th>
        </tr>
        @foreach ($products as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <img src="{{$item->image}}" width="50">
                </td>
                <td>{{$item->category->cate_name}}</td>
                <td>${{$item->price}}</td>
                <td>{{$item->views}}</td>
                <td>{{$item->star}}</td>
                <td>
                    <a href="{{route('product.edit', ['id' => $item->id])}}" class="btn btn-info btn-sm">Sửa</a>
                    <a href="javascript:void(0);" linkUrl="{{route('product.remove', ['id' => $item->id])}}" class="btn btn-danger btn-sm btn-remove">Xóa</a>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="7" class="text-center">
                {{$products->links()}}
            </td>
        </tr>
        </tbody></table>
    </div>
    <!-- /.box-body -->
</div>
@endsection 