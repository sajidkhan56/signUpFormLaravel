<!DOCTYPE>
<html>
    <head>
        <title>Sign Up </title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
	        <div class="screen">
				<div class="screen__content">					
			        <form class="signup" action="signup" method="post">
						@if(session()->has('success'))
							<div class="alert alert-success">
								{{ session()->get('success') }}
							</div>
						@endif
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
				        <div class="signup__field">
					        <i class="signup__icon fas fa-user"></i>
					        <input type="text" name="name" class="signup__input" placeholder="Name" required>
				        </div>
                        <div class="signup__field">
                            <i class="signup__icon fa-solid fa-envelope"></i>
					        <input type="email" name="email" class="signup__input" placeholder="Email" required>
							@if($errors->has('email'))
								<div class="alert alert-danger">
									{{ $errors->first('email') }}
								</div>	
							@endif
				        </div>
				        <div class="signup__field">
					        <i class="signup__icon fas fa-lock"></i>
					        <input type="password" name="password" class="signup__input" placeholder="Password" required>
				        </div>
				        <button class="button signup__submit">
                            <span>Sign Up Now</span>
                            <i class="button__icon fas fa-chevron-right"></i>
				        </button>				
			        </form>        
		        </div>
		        <div class="screen__background">
                    <span class="screen__background__shape screen__background__shape4"></span>
                    <span class="screen__background__shape screen__background__shape3"></span>		
                    <span class="screen__background__shape screen__background__shape2"></span>
                    <span class="screen__background__shape screen__background__shape1"></span>
		        </div>		
	        </div>
        </div>
    </body>
</html>