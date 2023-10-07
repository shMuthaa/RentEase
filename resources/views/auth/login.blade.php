@extends('layouts.app')

@section('content')
<div class="homepage-container">
    <h1>Rentease</h1>
    <div class="links">
        <a href="#loginForm" onClick="toggleView('login')" class="form-link">Login</a>
        <a href="#registerForm" onClick="toggleView('register')" class="form-link">Register</a>
    </div>
</div>

  <div class="container">
    <div class="form-container" id="loginForm">
      <h2>Login</h2>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
        <input type="password" placeholder="Password" name="password" required autocomplete="current-password">
        <button type="submit">Login</button>
        <p class="switch-text">Don't have an account? <span onclick="toggleForm()">Register</span></p>
      </form>
    </div>
    <div class="form-container" id="registerForm" style="display: none;">
      <h2>Register</h2>
      <form  method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" placeholder="Fullname" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" />
        <input type="password" placeholder="Password" name="password" required autocomplete="new-password">
        <input type="password"name="password_confirmation" required autocomplete="new-password">
        <button type="submit">Register</button>
        <p class="switch-text">Already have an account? <span onclick="toggleForm()">Login</span></p>
      </form>
    </div>
  </div>
@endsection
