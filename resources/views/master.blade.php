<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <title>E-comm project</title>
</head>
<body>
   {{View::make('header')}}
   @yield('content') 
   {{View::make('footer')}}

</body>
{{-- Session for css styles only --}}
<style>
    .footer {
        height: 50px;
         background-color:#333333;
        color: #fff;
        text-align: center;
        clear: both;
        position: relative;
        /* position: fixed; */
        margin-top: 60%;
        
        
    
    }footer{
      padding-top: 200px;
    }
       .customlogin{
        height: 500px;
        padding-top:100px; 
    }
    .slider{
      height: 400px !important
       }
    .text{
      color: black
    }
    .description{
      color: #333333;
    }
    .custom-product{
      height: 600px;
      /* display: flex;
      justify-content: space-between;
      align-items: center; */
      /* float: left; */
      
    }
   .card{
    display:inline-flex;
    align-items: center;
    border: none;
   }
   .add-to-cart{
    text-decoration: none;
   }.trending{
    display: flex;
    justify-content: center;
   }.card-image{
    /* display: inline-flex; */
   }.card-body{
    /* text-align: center; */
   }.col-sm-3{
     /* margin: 10%; */
   }.searched-item{
     display:inline-flex; 
    align-items: center; 

   }.details{
     padding-right: 10px; 
    
   }.trending-image{
    height: 200px;
   }.cart-list-devider{
    border-bottom:3px solid #cccccc;
    /* margin-bottom: 20px; */
    /* padding-bottom: 20px; */
   }.nav{
    position: relative;
   }.btn1{
    text-decoration: none;
    color: crimson;
    border: 2px solid #333333;
    background-color: #333333;
    border-radius: 5px;
   }.btn1:hover{
      color: #fff;

   }.dark{
    float: right;
    padding:59px; 
   }.orders{
    display:table-row;
    justify-content:center;
    align-items: center;
    color: #1ecd24;
    /* width: 100px; */
   }
   
</style>
</html>
{{-- <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> --}}