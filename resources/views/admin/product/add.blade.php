@extends('layouts.admin.master')
@section('title', 'Thêm mới sản phẩm')
@section('content')
	
    <form action="{{ route('product.add') }}" method="post" enctype="multipart/form-data">
    	{{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên sản phẩm <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Tên sp">
                    @if ($errors->first('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="">Danh mục <span class="text-danger">*</span></label>
                    <select name="cate_id" class="form-control">
                        @foreach ($cates as $c)
                        <option value="{{$c->id}}">{{$c->cate_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Giá bán <span class="text-danger">*</span></label>
                    <input type="number" name="price" class="form-control" placeholder="Giá sp">
                </div>
                <div class="form-group">
                    <label for="">Số lượng views </label>
                    <input type="number" name="views" class="form-control" placeholder="Số lượt xem" value="0">
                </div>
                <div class="form-group">
                    <label for="">Sao đánh giá </label>
                    <input type="number" name="star" class="form-control" placeholder="Sao đánh giá" value="5">
                </div>
            </div>
            <div class="col-md-6">
                <div class="preview-img">
                    <img id="preview" src="{{asset('images/default-image.jpg')}}" class="img-responsive">
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm <span class="text-danger">*</span></label>
                    <input type="file" name="image" class="form-control" onchange="encodeImageFileAsURL(this)">
                    @if ($errors->first('image'))
                        <span class="text-danger">{{$errors->first('image')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Ảnh gallery (Chọn nhiều ảnh)</label>
                    <input type="file" name="galleries[]" class="form-control" multiple >
                </div>
            </div>
            <div class="col-md-12">
            	<div class="form-group">
                    <label for="">Mô tả ngắn</label>
                    <textarea name="short_desc" rows="10" class="form-control"></textarea>
                </div>
            	<div class="form-group">
            		<label for="">Chi tiết</label>
            		<textarea name="detail" id="" cols="" rows="10" class="form-control"></textarea>
            	</div>
            	<div class="text-right">
            		<button type="submit" class="btn btn-sm btn-primary">Tạo sản phẩm</button>
                    <a href="{{route('product.list')}}" class="btn btn-sm btn-danger">Hủy</a>
            	</div>
            </div>
        </div>
    </form>

@endsection
@section('customjs')
    <script>
        $(document).ready(function(){
            tinymce.init({
                selector: 'textarea',
                plugins : 'advlist autolink link image lists charmap print preview'
            });
        })
        function encodeImageFileAsURL(element) {
            var file = element.files[0];
            var reader = new FileReader();
            reader.onloadend = function() {
                // console.log('RESULT', reader.result)
                $('#preview').attr('src', reader.result);
            }
            reader.readAsDataURL(file);
        }
    </script>
@endsection