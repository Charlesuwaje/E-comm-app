<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="">
        <a  class="btn btn-success m-2" href="/product">Back</a>

        @foreach ($products as $item )
                    <div class=" row searched-item" class="searched-item">
                     <div class="col-sm-3">
                        <a href="#detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}" alt="">
                            </a> 
                     </div>
                     <div class="col-sm-3">
                            <div class="details cart-list-devider">
                                <h2>Product Name : {{$item->name}}</h2> 
                                <br><br>  
                                <h1>Description</h2> 
                                    <br>
                                <h2> {{$item->description}}</h2><br><br>  
                                
                                
                            </div>
                        </div>
                    
                </div>
            
        @endforeach
    </div>
</body>
</html>