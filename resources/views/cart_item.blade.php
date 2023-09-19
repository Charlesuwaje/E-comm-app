@extends('master')
@section('content')
    <h1>wellcome</h1>
    {{-- The toggle is not functional --}}
<div class="form-check form-switch dark">
    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
    <label class="form-check-label" for="mySwitch">White Mode</label>
  </div>

    <div class="custom-product">
       
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>
                    Result for products
                </h4>
                <a  class="btn btn-success m-2" href="ordernow">Order now</a>
                @foreach ($products as $item )
                    <div class=" row searched-item" class="searched-item">
                     <div class="col-sm-3">
                        <a href="#detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}" alt="">
                            </a> 
                     </div>
                     <div class="col-sm-3">
                            <div class="details cart-list-devider">
                                <h2>{{$item->name}}</h2> 
                                <br><br>  
                                <h6>Description</h2> 
                                    <br>
                                <h2> {{$item->description}}</h2><br><br>  
                                
                                
                            </div>
                        </div>
                    <div class="col-sm-4">
                        <a href="removecart/{{$item->cart_id}}" class="btn1" >Remove from cart</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
