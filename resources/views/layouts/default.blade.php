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
      <div class="offset-md-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>
    
    
    <script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>