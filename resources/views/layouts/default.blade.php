<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Weibo App') - Laravel 新手入门教程</title>
    <link rel="stylesheet" href="/weibo/public/css/app.css">
    <style>
    	footer {
  margin-top: 45px;
  padding-top: 5px;
  border-top: 1px solid #eaeaea;
  color: #777;
  font-size: 13px;
  font-weight: bold;

  a {
    color: #555;
  }

  a:hover {
    color: #222;
  }

  small {
    float: left;
  }
  img.brand-icon {
    width: 17px;
    height: 17px;
  }
}
    </style>
  </head>
  	@include('layouts._header')
    
    <div class="container">
      @yield('content')
      @include('layouts._footer')
    </div>
    
  </body>
</html>