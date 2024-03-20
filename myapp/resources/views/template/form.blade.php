<!DOCTYPE html>
<html>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('account/css/style.css')}}">
	
        <head>
        <title>Shoe E-commerce - @yield('title')</title>
    </head>
            <body>


            <main>
            <div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="account/images/registration-form-4.jpg" alt="">
                    <a href="/"><img src="images/logo.png" alt="Shoe E-commerce" style="width:40px; margin-left:10px;"></a>
				</div>

                @yield('content')
            </main>

		<script src="{{asset('account/js/jquery-3.3.1.min.js')}}"></script>
		<script src="js/main.js"></script>
	</body>
</html>
