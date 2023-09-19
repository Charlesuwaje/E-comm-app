<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartlist();
}

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-black">
    <div class="container-fluid">
        <a class="navbar-brand" href="/product">Computer vilage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    @if (Session::has('user'))
                    <a class="nav-link" href="/myorders">Orders</a>
                        
                    @endif
                                    
                </li>
                </li>

                <form class="d-flex" role="search" action="/serach" method="get">
                    @csrf
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

        </div>
        <ul class="nav navbar-nav navbar-right d-flex">
            <li>
                @if (Session::has('user'))
                    <a class="nav-link" href="/cart_item">cart({{ $total }})</a>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" class="dropdown" href="#" role="button"
                    data-bs-toggle="dropdown" haria-expanded="false">
                    {{ Session::get('user')['name'] }}
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
            </li>
        @else
            <li><a class="nav-link" href="/Register">Register</a></li>
            <li><a class="nav-link" href="/login">login</a></li>
            @endif

        </ul>

        </li>
        </li>
        </ul>
    </div>
</nav>
