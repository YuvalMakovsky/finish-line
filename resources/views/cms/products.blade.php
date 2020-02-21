@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Products</h1>
</div>
<div class="row">
  <div class="col-12">
  <a href="{{url('cms/products/create')}}" class="btn btn-primary btn-lg mb-3"><i class="fas fa-plus-circle"></i> Add Product</a>
  </div>
</div>
@if($products)
<div class="row mt-1">
  <div class="col-12">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Title</th>
          <th>Product Image</th>
          <th>Updated At</th>
          <th>Operations</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $item)
        <tr>
        <td>{{$item['ptitle']}}</td>
        <td><img width="70" src= "{{ asset('images/'. $item['pimage'] ) }}" alt=""></td>
        <td>{{date('d/m/Y',strtotime($item['updated_at']))}}</td>
        <td>
          <a href="{{url('cms/products/'.$item['id'] . '/edit')}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i> Edit</a>
        <a href="{{url('cms/products/'.$item['id'])}}" class="btn btn-outline-danger btn-sm ml-3"><i class="far fa-trash-alt"></i> Delete</a>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endif
@endsection
