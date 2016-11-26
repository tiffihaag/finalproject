<!--Login form page -->
@extends('layout')

@section('content')
  <div class="center">
    <h1 class="header center purple-text">Login</h1>

    <img src="img/login.png" width="300px" height="300px">
    <form method="post" action="validatelogin">
       
      <div class="center">
        <input id="username" type="text" style="width:250px;" maxlength="150" name="username">
        <br>
        <label for="username">Username</label>
      </div>
      <br>
      <div class="center">
        <input id="password" type="password" style="width:250px;" maxlength="50" name="password">
        <br>
        <label for="password">Password</label>
      </div>
      <br>
      <input type="submit" value="Submit">
    
    </form>
  </div>
@endsection