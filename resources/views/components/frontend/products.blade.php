<div class="container-fluid">
    <div class="container">
        <div class="dino">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="/product-detail/{{$product->id}}"><img class="card-img-top" src="{{url('/uploads/products/'.$product->image)}}" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="">{{$product->name}}</a>
                            </h4>
                            <p class="card-text">{{$product->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>