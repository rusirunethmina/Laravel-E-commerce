<?php

use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
    $total = ProductController::cart_item();
}


?>

<nav class="navbar navbar-light" style="background-color: #bcc7d0;">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"  href="/">Topmobiles.lk</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="/myorders">Orders</a></li>
        </ul>
        <form class="navbar-form navbar-left" action="/search" method="GET">
          <div class="form-group">
            <input type="text" class="form-control" name="search" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="/list_cart">Cart({{ $total }})</a></li>
        @if(Session::has('user'))
        <li class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Session::get('user')['name'] }}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
             <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
