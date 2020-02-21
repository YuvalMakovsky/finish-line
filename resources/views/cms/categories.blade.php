@extends('cms.cms_master')

@section('cms_content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Categories</h1>
</div>
<div class="row">
  <div class="col-12">
  <a href="{{url('cms/categories/create')}}" class="btn btn-primary btn-lg mb-3"><i class="fas fa-plus-circle"></i> Add Category</a>
  </div>
</div>
@if($categories)
<div class="row mt-1">
  <div class="col-12">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Title</th>
          <th>Categorie Image</th>
          <th>Updated At</th>
          <th>Operations</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $item)
        <tr>
        <td>{{$item['ctitle']}}</td>
        <td><img width="70" src= "{{ asset('images/'. $item['cimage'] ) }}" alt=""></td>
        <td>{{date('d/m/Y',strtotime($item['updated_at']))}}</td>
        <td>
          <a href="{{url('cms/categories/'.$item['id'] . '/edit')}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i> Edit</a>
        <a href="{{url('cms/categories/'.$item['id'])}}" class="btn btn-outline-danger btn-sm ml-3"><i class="far fa-trash-alt"></i> Delete</a>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endif

@endsection
