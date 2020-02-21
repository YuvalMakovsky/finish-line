
@extends('cms.cms_master')

@section('cms_content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">
  <a href="{{url('cms/products')}}"><i class="fas fa-arrow-circle-left"></i></a>
  Delete Item Form
  </h1>
</div>
<div class="row">
  <div class="col-6">
  <form action="{{url('cms/products/' . $item_id)}}" method="POST" novalidate="novalidate" autocomplete="off">
      @csrf
      {{method_field('DELETE')}}
      <h4 class="mb-3">Are you sure you want to delete this item?</h4>
      <input name="submit" class="btn btn-danger" type="submit" value="Delete">
      <a class="btn btn-secondary" href="{{url('cms/products')}}">Back</a>
    </form>
  </div>
</div>
@endsection
