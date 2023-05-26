@extends('layouts.app')

@section('main')


<!-- resources/views/admin/login.blade.php -->

<!-- <form method="POST" action="{{ route('admin.login') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required autofocus>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form> -->


<!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            The best offer <br />
            <span class="text-primary">for your business</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
            quibusdam tempora at cupiditate quis eum maiores libero
            veritatis? Dicta facilis sint aliquid ipsum atque?
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">

            	@if(Session::has('success'))
            		<div class="alert alert-success" role="alert">
            			{{ Session::get('success') }}	
            		</div>
            	@endif

              <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- 2 column grid layout with text inputs for the first and last names -->
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="name" name="name" class="form-control" autofocus/>
                  <label class="form-label" for="name">Name</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="email" name="email" class="form-control" autofocus/>
                  <label class="form-label" for="email">Email</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="password" class="form-control" />
                  <label class="form-label" for="password">Password</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Sign Up
                </button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

@endsection
