@extends('layout2')

@section('content')

  <h4>Knowledge Base</h4>

  <div class="striped"> 
  <table>

  <thead> <!--Will come from mysql once configured -->
	  <tr>
      <th data-field="id">Ticket</th>
      <th data-field="name">Priority</th>
      <th data-field="price">User</th>
      <th data-field="price">Problem</th>
      <th data-field="price">Assigned To</th>
      <th data-field="price">Due Date</th>
      <th data-field="price">Completed</th>
	  </tr>
	</thead>

  </table>
  </div>

@endsection