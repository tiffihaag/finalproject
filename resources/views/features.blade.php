<!--Features-->
@extends('layout')

@section('content')
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>
    <h1 class="header center purple-text">Features</h1>
    <div class="row center">
      <h4>Here's more about what this application can do for you.</h4>
    </div>

    <div class="container">
      <div class="section">
        <div class="card horizontal">
        <div class="card-image">
          <img src="img/support.png">
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <div class="p2">Users can enter tickets, check status, and keep open communitcation with the IT Department.  Your helpdesk can enter, update and complete tickets, while creating a knowledge base with every completed ticket.</div>
          </div>
          <div class="card-action">
            <a href="login.blade.php">Create a Free Account</a>
          </div>
        </div>
        </div>
      </div>

      <div class="section">
        <div class="card horizontal">
        <div class="card-image">
          <img src="img/barcode.png">
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <div class="p2">Track inventory of all computers, printers, network equipment, and mobile phones, and license renewal dates in one place.  Even track asset tags by scanning the barcode.</div>
          </div>
          <div class="card-action">
            <a href="login.blade.php">Create a Free Account</a>
          </div>
        </div>
        </div>
      </div>

      <div class="section">
        <div class="card horizontal">
        <div class="card-image">
          <img src="img/chat.png">
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <div class="p2">Chat area provided inside the application so you don't have to use multiple windows for different needs.  It's all here.</div>
          </div>
          <div class="card-action">
            <a href="login.blade.php">Create a Free Account</a>
          </div>
        </div>
        </div>
        <div class="section">
      <div class="card horizontal">
        <div class="card-image">
          <img src="img/approved.png">
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <div class="p2">Request management approval for purchases with tracking and transparency.</div>
          </div>
          <div class="card-action">
            <a href="login.blade.php">Create a Free Account</a>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>  <!--GOES WITH CONTAINER--> 
  </div> 
</div>
@endsection