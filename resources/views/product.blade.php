@extends('master')
@section('content')
    <h1>wellcome</h1>


    <div class="custom-product">
        <div id="carouselExample" class="carousel slide">
            {{-- for each  --}}
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                     <img class="slider"src="{{ $item->gallery }}" class="d-block w-100">
                      <div class="carousel-caption">
                          <h3 class="text">
                              {{ $item->name }}
                          </h3>
                          <p class="description">
                              {{ $item->description }}
                          </p>
                      </div>
                     
                    </div>
                @endforeach
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        {{-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> --}}
    </div>
    {{-- cards --}}
    <section class="content">
    <h3 class="trending">Trending products</h3>

   @foreach ($products as $item) 
  
   <div class="card-image">
    <div class="card">
      <img class="card-img-top" src="{{$item->gallery}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"> {{$item->name}}</h5>
        <p class="card-text"> {{$item->description}}.</p>
        <p class="card-text"> price : #{{$item->price}}</p>

      </div>
      <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$item->id}}">
        <button class="btn btn-primary" >Add to cart</button>
      </form>
      <div class="card-footer">
        <small class="text-muted">Last updated {{$item->updated_at}}</small>
      </div> 
    </div>
    
    </div>
        @endforeach
     </section> 
     {{-- <a href="details/{{$item->id}}" class="add-to-cart" >Add to card</a> --}}

    {{-- {{-- end cards}} --}}

    {{-- <div class="trending-wrapper">
        <h3 class="">Trending products</h3>
        @foreach ($products as $item)
            <div class="trending-item ">
                <img class="trending-image"src="{{ $item->gallery }}" >
                <div class="">
                    <h3 class="text">
                        {{ $item->name }}
                    </h3>
                 </div>
           @endforeach
            </div>
      </div>
  </div>  --}}
@endsection
