@extends('layouts.admin')
<x-admin.header />
<div class="container-fluid page-body-wrapper">
    <x-admin.sidebar />
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">View Product</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/product')}}" >Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product</li>
                    </ol>
                </nav>
            </div>
            <div class="row ">
                <div class="col-lg-12 mx-auto  mt-2">
                    <div class="card py-3 m-b-30">
                        <div class="card-body">

                            <form class="needs-validation" method="post" action="{{url('admin/product-update')}}">
                                @csrf
                                <h3 class="">View Information</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <input type="hidden" class="form-control"  name="id" disabled="disabled" value="{{$product->id}}" />
                                     <label htmlFor="inputEmail4">Name*</label>
                                    <input type="text" class="form-control"  name="name" disabled="disabled" value="{{$product->name}}" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label htmlFor="inputEmail4">Description*</label>
                                        <textarea type="text"  rows="5" class="form-control" disabled="disabled" name="description" >{{$product->description}}</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <img src="{{ asset('uploads/products/'.$product->image) }}"  height="100"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                     <a href="{{ url('admin/product-edit/'.$product->id) }}" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >  Edit </a>
                                    <a href="{{ url('admin/product')}}" class="btn btn-dark btn-cta btn-lg font-weight-medium auth-form-btn" >Back</a>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>