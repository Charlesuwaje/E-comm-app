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
                   My orders
        <a  class="btn btn-success m-2" href="/product">Back</a>

                </h4>
                @foreach ($orders as $item )
                    <div class=" row searched-item" class="searched-item">
                     <div class="col-sm-3">
                        <a href="#detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}" alt="">
                            </a> 
                     </div>
                     <div class="col-sm-6 ">
                            <div class="details cart-list-devider orders">
                                <h2> Name : {{$item->name}}</h2> 
                                {{-- <br> --}}
                                <h2> description : {{$item->description}}</h2><br>
                                <h2> status : {{$item->status}}</h2><br> 
                                <h2> payment method: {{$item->payment_method}}</h2><br>  
                                <h2> payment status: {{$item->payment_status}}</h2><br>  
                                <h2> address : {{$item->address}}</h2><br><br>  

                                
                                
                            </div>
                        </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
