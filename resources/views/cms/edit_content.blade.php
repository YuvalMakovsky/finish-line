@extends('cms.cms_master')
@section('cms_content')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
    <a href="{{ url('cms/content') }}"><i class="fas fa-arrow-circle-left"></i></a> Edit Content
  </h1>
</div>
<div class="row">
  <div class="col-8">
  <form action="{{url('cms/content/' . $item['id'])}}" method="POST" novalidate="novalidate" autocomplete="off">
      @csrf
      {{method_field('PUT')}}
      <div class="form-group">
          <label for="menu-id"><span class="text-danger">*</span> Menu Link</label>
        <select class="form-control" name="menu_id" id="menu-id">
          @foreach ($menus as $menu)
        <option @if( $item['menu_id']==$menu['id']) selected="selected" @endif value="{{$menu['id']}}">{{$menu['link']}}</option>
          @endforeach
        </select>
        <span class="text-danger">{{ $errors->first('menu_id') }}</span> 
      </div>
      <div class="form-group">
          <label for="title"><span class="text-danger">*</span> Content Title</label>
        <input class="form-control" type="text" name="title" id="title" value="{{ $item['ctitle'] }}">
        <span class="text-danger">{{ $errors->first('title') }}</span> 
      </div>
      <div class="form-group">
        <label for="article"><span class="text-danger">*</span>Article</label>
        <textarea name="article" id="article" class="form-control">{{ $item['carticle'] }}</textarea>
        <span class="text-danger">{{ $errors->first('article') }}</span> 
      </div>
      <input name="submit" class="btn btn-primary btn-block mt-3" type="submit" value="Update">
    </form>
  </div>
</div>

@endsection