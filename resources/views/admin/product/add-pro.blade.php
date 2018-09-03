@extends('layouts.admin')
@section('title_layouts','Thêm sản phẩm')
@section('content_layouts')
	
	<div class="panel panel-default">
			<div class="panel-body">
			<a href="{{ route('product')}}" class="btn btn-sm btn-info">Back</a>
		</div>
		<div class="panel-body">
			<form action="" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="col-md-6">
		<div class="row">	
			<div class="form-group">
				<label for="">Tên sản phẩm</label>
				<input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="Tên sản phẩm">
			</div>
			@if($errors->has('name'))
			<div class="helper-box">
				<p>{{ $errors->first('name') }}</p>
			</div>
			@endif
		</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Slug</label>
				<input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug')}}" placeholder="đường dẫn tĩnh sản phẩm">
			</div>
			@if($errors->has('slug'))
			<div class="helper-box">
				<p>{{ $errors->first('slug') }}</p>
			</div>
			@endif
		</div>
		<div class="form-group">
			<label for="">Ảnh sản phẩm</label>
			<input type="file"  name="upload_file" value="{{ old('upload_file')}}"  placeholder="Ảnh sản phẩm">
		</div>
		@if($errors->has('upload_file'))
		<div class="helper-box">
			<p>{{ $errors->first('upload_file') }}</p>
		</div>
		@endif
		<div class="form-group">
			<label for="">Ảnh liên quan</label>
			<input type="file"  name="other_image[]" multiple>
		</div>
		@if($errors->has('upload_file'))
		<div class="helper-box">
			<p>{{ $errors->first('upload_file') }}</p>
		</div>
		@endif
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">	
		<div class="form-group">
			<label for="">Loại sản phẩm</label>
			
			<select name="category_id"  class="form-control" required="required">
				<option value="">Chọn loại sản phẩm</option>
			@foreach($cats as $cat)
				<option value="{{ $cat->id}}">{{ $cat->name}}</option>
			@endforeach	
			</select>
		</div>
	</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		
		<div class="form-group">
			<label for="">Giá</label>
			<input type="text" class="form-control" name="price"   value="{{ old('price')}}" placeholder="Giá sản phẩm">
		</div>
		@if($errors->has('price'))
		<div class="helper-box">
			<p>{{ $errors->first('price') }}</p>
		</div>
		@endif
	</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div class="form-group">
			<label for="">Giá khuyến mãi</label>
			<input type="text" class="form-control" name="sale_price" value="{{ old('sale_price')}}"  placeholder="Giá km sản phẩm">
		</div>
		@if($errors->has('sale_price'))
		<div class="helper-box">
			<p>{{ $errors->first('sale_price') }}</p>
		</div>
		@endif
	</div>

		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div class="form-group">
			<label for="">Tình trạng sản phẩm</label>
			<select name="type"  class="form-control" required="required">
				<option value="new">Mới</option>
				<option value="normal">Cũ</option>
				<option value="other">Khác</option>
			</select>
		</div>
		@if($errors->has('type'))
		<div class="helper-box">
			<p>{{ $errors->first('type') }}</p>
		</div>
		@endif
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">	
		<div class="form-group">
				<label for="">Màu sắc</label>
				@foreach($colors as $cl)
				<div class="checkbox" >
						<label>
							<input  name="color[]" type="checkbox" value="{{ $cl->id}}">
							{{ $cl->name}}
						</label>
				</div>
				@endforeach	
		</div>
	</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">	
		<div class="form-group">
				<label for="">Kích thước</label>
				@foreach($sizes as $si)
					<div class="checkbox" >
							<label>
								<input   name="size[]" type="checkbox" value="{{ $si->id}}">
								{{ $si->name}}
							</label>
					</div>
				@endforeach	
		</div>
	</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">	
		<div class="form-group">
				<label for="">Chất liệu</label>
				@foreach($materials as $ma)
					<div class="checkbox" >
							<label>
								<input   name="material[]" type="checkbox" value="{{ $ma->id}}">
								{{ $ma->name}}
							</label>
					</div>
				@endforeach	
		</div>
	</div>
	<div class="clearfix"></div>
		<div class="form-group">
			<label for="">Nội dung</label>
		
			<textarea name="description" id="desc" class="form-control" rows="3" required="required" >
				{!!old('description')!!}
			</textarea>	
		</div>
		
		@if($errors->has('description'))
		<div class="helper-box">
			<p>{{ $errors->first('description') }}</p>
		</div>
		@endif
		
		<button type="submit" class="btn btn-success">Thêm</button>
	</form>
	
		</div>
	</div>
@stop()