@extends('template.form')
@section('title','LOGIN')



@section('content')
                    <form action="">
					<h3>Log In</h3>
					<div class="form-holder active">
						<input type="text" placeholder="e-mail" class="form-control">
					</div>
					<div class="form-holder">
						<input type="password" placeholder="Password" class="form-control" style="font-size: 15px;">
					</div>
					<div class="form-login">
						<button>Log In</button>
						<p>Dont Have account?<a href="register">Register</a></p>
					</div>
				</form>
			</div>
		</div>


@endsection