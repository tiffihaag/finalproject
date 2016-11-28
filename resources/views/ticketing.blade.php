@extends('layout2')

@section('content')

  <h4>Ticketing Area</h4>

  <!-- Trigger/Open The Modal -->
  <button id="myBtn">New Ticket</button>

  <!-- The Modal -->
  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="height: 500px;">
    <span class="close">x</span>
    <form>
      <div class="input-field col s3">
        <input id="ticket" type="text" class="validate">
        <label for="ticket" data-error="wrong" data-success="right">Ticket#</label>
      </div>

      <div class="input-field col s6">
        <input id="user" type="text" class="validate">
        <label for="user">User</label>
      </div>
      <br>

      <div class="input-field col s9">
        <input id="problem" type="text" class="validate">
        <label for="problem">Problem</label>
      </div>
      <br> 

      <div class="input-field col s9">
        <div class="input-field col s3">
          <input id="priority" type="radio" class="validate">
          <label for="priority" data-error="wrong" data-success="right">Priority?</label>
        </div>

        <div class="input-field col s6">
          <input id="due" type="Date" class="validate">
          <label for="due" data-error="wrong" data-success="right"></label>
        </div>    
      </div>

      <div class="input-field col s9">
        <div class="input-field col s3">
          <input id="completed" type="radio" class="validate">
          <label for="completed" data-error="wrong" data-success="right">Done?</label>
        </div>  

        <div class="input-field col s6">
          <input id="assigned" type="text" class="validate">
          <label for="assigned" data-error="wrong" data-success="right">Assigned To</label>
        </div>     
      </div>
      <br>

      <div class="input-field col s9">
      <input type="submit" value="Submit" class="ticketButton">
      </div>
    </form>
  </div> <!--MODAL CONTENT-->
  </div> <!--MODAL DIV-->

  <script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
  </script>

  <table class="striped">
    <thead>
      <tr>
        <th data-field="id">Ticket#</th>
        <th data-field="user">User</th>
        <th data-field="problem">Problem</th>
        <th data-field="name">Priority</th>
        <th data-field="assigned">Assigned To</th>
        <th data-field="due">Due Date</th>
        <th data-field="completed">Completed</th>
      </tr>
    </thead>
      <br>
      <tbody>
        <th data-field="id">001</th>
        <th data-field="user">tiffihaag</th>
        <th data-field="problem">Can't log in.</th>
        <th data-field="name">no</th>
        <th data-field="assigned">John</th>
        <th data-field="due">11/28/2016</th>
        <th data-field="completed">no</th>
      </tbody>
  </table>

@endsection