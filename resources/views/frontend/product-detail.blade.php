@extends('layouts.master')

@section('content')

<x-frontend.header :data="$setting" />

<div class="container about">
  <div class='row gy-4'>
    <div class='col-sm-12 show'>
      <div class="col-sm-12 blog-img">
        <div class="col-sm-6 img">
          <img src="{{url('/uploads/products/'.$product->image)}}" class="img-fluid menu-image" alt="" />
        </div>
        <h2>{{$product->name}}</h2>
        <p>{{$product->description}}</p>
      </div>
    </div>
  </div>
</div>

<x-frontend.footer :data="$setting" />

@endsection