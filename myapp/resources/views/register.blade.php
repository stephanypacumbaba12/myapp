@extends('template.form')
@section('title','REGISTER')



@section('content')
				<form action="">
					<h3>Sign Up</h3>
					<div class="form-holder active">
						<input type="text" placeholder="name" class="form-control">
					</div>
					<div class="form-holder">
						<input type="text" placeholder="e-mail" class="form-control">
					</div>
					<div class="form-holder">
						<input type="password" placeholder="Password" class="form-control" style="font-size: 15px;">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" checked> I agree all statement in <a href="#">Terms & Conditions</a>
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-login">
						<button>Sign up</button>
						<p>Already Have account? <a href="login">Login</a></p>
					</div>
				</form>
			</div>
		</div>

@endsection