<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>


  		<style type="text/css">
  			.header_nav ul.navbar-nav a.nav-link {
			    color: #fff;
			    font-size: 15px;
			}
			.header-nav.right {
			    display: flex;
			}
			.loginMain{
				align-items: center;
				margin: auto;
			}
  		</style>
	</head>
	<body>

		<div class="header_nav">
		<!-- A grey horizontal navbar that becomes vertical on small screens -->
		<nav class="navbar navbar-expand-sm bg-dark">

		  <div class="container-fluid">
		    
		    <div class="header-logo left">
		    	
		    </div>
		    <div class="header-nav right">
			    <ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/dashboard/blogPosts">Dashboard</a>
					</li>
			    </ul>
			    <form action="{{ route('admin.logout') }}" method="post" class="d-flex loginMain" role="search">
		      		@csrf
		      		@method('Delete')
		      		<!-- <a class="nav-link" href="/admin/login">Login</a> -->
		        	<button class="btn btn-danger" type='submit'>
		        		@if (Auth::check()) 
						    LogOut
						    @else
						    LogIn
						@endif
		        	</button>
		      	</form>
			</div>
		  </div>

		</nav>
		</div>

		@if($message = Session::get('success'))
			<div class="alert alert-success alert-block">
				<strong>{{ $message }}</strong>
			</div>
		@endif

		@yield('main')

		<footer>
			
		</footer>

	</body>
	</html>