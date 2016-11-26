@extends('layout2')

@section('content')

  <h4>Ticketing Area</h4>

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
        <th data-field="id">Ticket#</th>
        <th data-field="user">User</th>
        <th data-field="problem">Problem</th>
        <th data-field="name">Priority</th>
        <th data-field="assigned">Assigned To</th>
        <th data-field="due">Due Date</th>
        <th data-field="completed">Completed</th>
      </tbody>
  </table>

@endsection