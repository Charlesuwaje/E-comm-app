@extends('master')
@section('content')
    <h1>wellcome</h1>


    <div class="custom-product">
       
          <div class="col-sm-10 m-4">
        <a  class="btn btn-success m-2" href="/product">Back</a>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Amount</th>
                    <th scope="col">$ {{$total}}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Tax</td>
                    <td>$0</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Delivery</td>
                    <td>$20</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Total amount</td>
                    <td> $ {{$total+ 20}}</td>
                  </tr>
                </tbody>
               </table>

              <form action="/orderpage" method="POST">
                @csrf
              <div class="check-box">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <textarea type="address" class="form-control" id="exampleInputaddress"  placeholder="Enter your address" name="address"aria-describedby="addressHelp"></textarea>
            </div>
            <div class="form-group pt-3">
                <label for="exampleInputPassword1" class="form-label">Payment Method</label>
                {{-- <label class="form-check-label" for="exampleCheck1">Online payment</label> --}}
                 <a class="p-3"  name="payment" href="#"><span>Pay stark</span></a>
                 <a class="p-3" name="payment" href="#"><span>Online Transfer</span></a>
                 <a class="p-3"  name="payment"  href="#"><span>Payment through Crypto</span></a>
                 {{-- <input type="radio" class="form-check-input " id="radio2" name="optradio" value="option2"><span class="p-2">Online Transfer</span>
                <input type="radio" class="form-check-input " id="radio2" name="optradio" value="option2"><span class="p-2">Payment through Crypto</span> --}}
                <input type="radio" class="form-check-input " id="radio2" name="payment" value="Cash"><span class="p-2">Payment On delvery</span> 



            </div>
            <button type="submit" class="btn btn-primary">Order now</button>

            <div class="mb-3 form-check">
                {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> --}}
                {{-- <label class="form-check-label" for="exampleCheck1">Remember me</label> --}}
            </div>
                {{-- <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Option 1
                <label class="form-check-label" for="radio1"></label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Option 2
                <label class="form-check-label" for="radio2"></label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Option 2
                <label class="form-check-label" for="radio2"></label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" disabled>Option 3
                <label class="form-check-label"></label>
              </div> --}}
            </form>
        </div>
        </div>
    </div>
@endsection
{{-- <div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
    <label class="form-check-label" for="mySwitch">Dark Mode</label>
  </div> --}}