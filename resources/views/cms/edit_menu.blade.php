@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">
  <a href="{{url('cms/menu')}}"><i class="fas fa-arrow-circle-left"></i></a>
  Edit Menu Link
  </h1>
</div>
<div class="row">
  <div class="col-6">
  <form action="{{url('cms/menu/' . $item['id'])}}" method="POST" novalidate="novalidate" autocomplete="off">
      @csrf
      {{method_field('PUT')}}
      <input type="hidden" name="item_id" value="{{$item['id']}}">
      <div class="form-group">
        <label for="link"><span class="text-danger">*</span> Menu Link</label>
        <input class="form-control original-text"  type="text" name="link" id="link" value="{{$item['link']}}">
        <span class="text-danger">{{$errors->first('link')}}</span>
      </div>
      <div class="form-group">
        <label for="url"><span class="text-danger">*</span> Menu Url</label>
        <input class="form-control target-text"  type="text" name="url" id="url" value="{{$item['murl']}}">
        <span class="text-danger">{{$errors->first('url')}}</span>
      </div>
      <div class="form-group">
        <label for="title"><span class="text-danger">*</span> Page Title</label>
        <input class="form-control"  type="text" name="title" id="title" value="{{$item['mtitle']}}">
        <span class="text-danger">{{$errors->first('title')}}</span>
      </div>
      <br>
      <input name="submit"  class="btn btn-primary btn-block" type="submit" value="Update">
    </form>
  </div>
</div>
@endsection
