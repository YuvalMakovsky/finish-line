@extends('cms.cms_master')
@section('cms_content')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
    <a href="{{ url('cms/categories') }}"><i class="fas fa-arrow-circle-left"></i></a> Edit Category
  </h1>
</div>
<div class="row">
    <div class="col-8">
        <form action="{{url('cms/categories/' . $item['id'])}}" method="POST" enctype="multipart/form-data" novalidate="novalidate" autocomplete="off">
          @csrf
          {{method_field('PUT')}}
        <input type="hidden" name="item_id" value="{{$item['id']}}">
      <div class="form-group">
        <label for="title"><span class="text-danger">*</span> Title</label>
      <input class="form-control original-text" type="text" name="title" id="title" value="{{ $item['ctitle'] }}">
      <span class="text-danger">{{ $errors->first('title') }}</span>
      </div>
      <div class="form-group">
          <label for="url"><span class="text-danger">*</span> Category Url</label>
        <input class="form-control target-text" type="text" name="url" id="url" value="{{ $item['curl']  }}">
        <span class="text-danger">{{ $errors->first('url') }}</span>
      </div>
      <div class="form-group">
          <label for="article"><span class="text-danger">*</span>Article</label>
          <textarea name="article" id="article" class="form-control">{{ $item['carticle'] }}</textarea>
          <span class="text-danger">{{ $errors->first('article') }}</span> 
        </div>
        <div class="form-group">
      <img width="80" src="{{ asset('images/'. $item['cimage'] ) }}" alt="">
    </div>
        <div class="form-group">
            <label for="image"></span> Change Categorie Image</label>
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
      <input name="submit" class="btn btn-primary btn-block mt-3" type="submit" value="Upload">
      <br><br><br>
    </form>
  </div>
</div>

@endsection