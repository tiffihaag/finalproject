<!--Login form page -->
@extends('layout')

@section('content')
  <div class="container center">
  <br><br>
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
      <input type="submit" value="Submit" class="loginButton">
      <br><br>
    </form>
  </div>

  <div class="register">
    <!-- Modal content -->
    <div class="modal-content" style="height: 500px;">
      <span class="close">x</span>
      <form>
        <div class="input-field col s9">
          <div class="input-field col s3">
            <input id="first" type="text" class="validate">
            <label for="first" data-error="wrong" data-success="right">First Name</label>
          </div>

          <div class="input-field col s3">
            <input id="last" type="text" class="validate">
            <label for="last" data-error="wrong" data-success="right">Last Name</label>
          </div>
        </div>

        <div class="input-field col s9">
          <div class="input-field col s3">
            <input id="companyId" type="text" class="validate">
            <label for="companyId" data-error="wrong" data-success="right">Company Id</label>
          </div>

          <div class="input-field col s3">
            <input id="company" type="text" class="validate">
            <label for="company" data-error="wrong" data-success="right">Company Name</label>
          </div>
        </div>

        <div class="input-field col s9">
          <div class="input-field col s3">
            <input id="address" type="text" class="validate">
            <label for="address" data-error="wrong" data-success="right">Address</label>
          </div>

          <div class="input-field col s3">
            <input id="first" type="text" class="validate">
            <label for="first" data-error="wrong" data-success="right">First Name</label>
          </div>

          <div class="input-field col s3">
            <input id="first" type="text" class="validate">
            <label for="first" data-error="wrong" data-success="right">First Name</label>
          </div>




  </div>
@endsection