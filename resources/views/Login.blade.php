@extends('master')
@section('content')
    <div class="container customlogin">
        <div class="row ">
            <div class="">
                <form action="login" method="POST">
                    <div class= "form-group"> 
                        @csrf
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1"  name="email"aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">login</button>
            </form>
        </div>

    </div>
    </div>
@endsection
