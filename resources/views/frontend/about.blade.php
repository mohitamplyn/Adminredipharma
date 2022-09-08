@extends('layouts.master')

  <x-frontend.header :data="$setting" />

    <div class='contact'>
    </div>
    <div class="container about">
      <div class='row gy-4'>
        <div class='col-sm-12 show'>
          <div class="col-sm-12 blog-img">
            <div class="col-sm-6 img">
              <img src="{{url('/uploads/products/'.$pages->image)}}" class="img-fluid menu-image" alt="" />
            </div>
            <p>{{$pages->title}}</p>
            <h2>{{$pages->page_key}}</h2>
            <p>
            {{$pages->description}}
            </p>
          </div>
        </div>
      </div>
    </div>

    <x-frontend.footer :data="$setting" />

 