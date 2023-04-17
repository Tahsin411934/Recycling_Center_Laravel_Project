@extends('recycling_product.layout')
@section('content')
<div class="card">
  <div class="card-header">Add Recycling Product</div>
  <div class="card-body">
      <form action="{{ url('member') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Product Name</label></br>
        <input type="text" name="product_name" id="product_name" class="form-control"></br>
        <label>product_quantity</label></br>
        <input type="text" name="product_quantity" id="product_quantity" class="form-control"></br>
        <label>estimated_price</label></br>
        <input type="text" name="estimated_price" id="estimated_price" class="form-control"></br>
        <input class="form-control" name="photo" type="file" id="photo"> </br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
@stop