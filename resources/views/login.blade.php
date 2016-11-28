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

  <br>
  <div class="center">
    <button id="registerBtn">New to Totally Helpdesk? Register Here.</button>
  </div>
  <br><br>

  <!-- The Modal -->
  <div id="registerModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="height: 750px;">
    <span class="close">x</span>
      <form>
       
        <br>
          <div class="input-field col s9">
            <input id="first" type="text" class="validate">
            <label for="first" data-error="wrong" data-success="right">First Name</label>
          </div>

          <div class="input-field col s9">
            <input id="last" type="text" class="validate">
            <label for="last" data-error="wrong" data-success="right">Last Name</label>
          </div>
       
          <div class="input-field col s9">
            <input id="companyId" type="text" class="validate">
            <label for="companyId" data-error="wrong" data-success="right">Company Id</label>
          </div>

          <div class="input-field col s9">
            <input id="company" type="text" class="validate">
            <label for="company" data-error="wrong" data-success="right">Company Name</label>
          </div>
         
          <div class="input-field col s9">
            <input id="address" type="text" class="validate">
            <label for="address" data-error="wrong" data-success="right">Address</label>
          </div>

          <div class="input-field col s9">
            <input id="city" type="text" class="validate">
            <label for="city" data-error="wrong" data-success="right">City</label>
          </div>

          <div class="input-field col s9">
            <input id="state" type="text" class="validate">
            <label for="state" data-error="wrong" data-success="right">State</label>
          </div>

          <div class="input-field col s9">
            <input id="zip" type="text" class="validate">
            <label for="zip" data-error="wrong" data-success="right">Zip Code</label>
          </div>
        
        <input type="submit" value="Submit" class="registerButton">
    </form>
    </div>

  </div>

  <script>
    // Get the modal
    var registerModal = document.getElementById('registerModal');

    // Get the button that opens the modal
    var registerBtn = document.getElementById("registerBtn");

    // Get the <span> element that closes the modal
    var registerSpan = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    registerBtn.onclick = function() {
      console.log("me");
        registerModal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    registerSpan.onclick = function() {
        registerModal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == registerModal) {
            registerModal.style.display = "none";
        }
    }
  </script>

@endsection