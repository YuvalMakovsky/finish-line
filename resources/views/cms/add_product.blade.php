@extends('cms.cms_master')
@section('cms_content')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
    <a href="{{ url('cms/products') }}"><i class="fas fa-arrow-circle-left"></i></a> Add Product
  </h1>
</div>
<div class="row">
    <div class="col-8">
  <form action="{{url('cms/products')}}" method="POST" enctype="multipart/form-data" novalidate="novalidate" autocomplete="off">
      @csrf
      <div class="form-group">
        <label for="categorie-id"><span class="text-danger">*</span> Category</label>
      <select class="form-control" name="categorie_id" id="categorie-id">
        <option value="">Choose Category...</option>
        @foreach ($categories as $category)
      <option @if( old('categorie_id')==$category['id']) selected="selected" @endif value="{{$category['id']}}">{{$category['ctitle']}}</option>
        @endforeach
      </select>
      <span class="text-danger">{{ $errors->first('categorie_id') }}</span> 
    </div>
      <div class="form-group">
        <label for="title"><span class="text-danger">*</span> Title</label>
      <input class="form-control original-text" type="text" name="title" id="title" value="{{ old('title') }}">
      <span class="text-danger">{{ $errors->first('title') }}</span>
      </div>
      <div class="form-group">
          <label for="url"><span class="text-danger">*</span> Product Url</label>
        <input class="form-control target-text" type="text" name="url" id="url" value="{{ old('url') }}">
        <span class="text-danger">{{ $errors->first('url') }}</span>
      </div>
      <div class="form-group">
          <label for="original_price"><span class="text-danger">*</span>Original price</label>
        <input class="form-control" type="text" name="original_price" id="original_price" value="{{ old('original_price') }}">
        <span class="text-danger">{{ $errors->first('original_price') }}</span>
        </div>
      <div class="form-group">
        <label for="price"><span class="text-danger">*</span> Price</label>
      <input class="form-control" type="text" name="price" id="price" value="{{ old('price') }}">
      <span class="text-danger">{{ $errors->first('price') }}</span>
      </div>
      <div class="form-group">
          <label for="article"><span class="text-danger">*</span>Article</label>
          <textarea name="article" id="article" class="form-control">{{ old('article') }}</textarea>
          <span class="text-danger">{{ $errors->first('article') }}</span> 
        </div>
        <div class="form-group">
            <label for="image"></span> Main Product Image</label>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
              <input name="image" type="file" class="custom-file-input" id="image" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
          <div class="form-group">
              <span class="text-danger">{{ $errors->first('image') }}</span>
          </div>
          
      <input name="submit" class="btn btn-primary btn-block mt-3" type="submit" value="Save">
      <br><br><br>
    </form>
  </div>
</div>

@endsection