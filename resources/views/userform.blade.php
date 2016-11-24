@extends('layout2')

@section('content')

  <h1>User Ticket Entry Form</h1>

   <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">Name</label>
        </div>

        <div class="input-field col s6">
          <input id="user_name" type="text" class="validate">
          <label for="user_name">Username</label>
        </div>

        <div class="input-field col s3">Priority Ticket?</div>
			    <select>
			      <option value="" disabled selected>Choose your option</option>
			      <option value="1">Yes</option>
			      <option value="2">No</option>
			    </select>
			    <label>Select Priority</label>
			  </div>

        <div class="input-field col s12">Problem</div>

        <div class"input-field col s6">Due Date</div>
        <input type="date" class="datepicker">

      </div>

@endsection