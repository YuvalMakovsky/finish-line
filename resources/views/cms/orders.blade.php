@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Site Orders</h1>
</div>

@if($orders)
<div class="row mt-1">
  <div class="col-12">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>User</th>
          <th>Total</th>
          <th>Details</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach($orders as $order)
        <tr>
        <td>{{ $order->name }}</td>
        <td>{{ $order->total }}$</td>
        <td>
            <ul>
              @foreach(unserialize($order->data) as $item)
            <li>{{ $item['name'] }}, Quantity: {{ $item['quantity'] }}, Price: {{ $item['price'] }}$</li>
              @endforeach
           </ul>
         </td>
        <td>{{ date('d/m/Y H:i:s', strtotime($order->created_at)) }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endif

@endsection
