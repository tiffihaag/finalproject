@extends('layout2')

@section('content')

  <h1>Ticketing Area</h1>

  <div class="striped responsive-table" 
  <table>
    <thead>
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

    <tbody> 
      <tr>
        <td>001</td>
        <td>No</td>
        <td>tiffihaag</td>
        <td>Can't log in.</td>
        <td>John</td>
        <td>11/22/2016</td>
        <td>No</td>
      </tr>
    </tbody>
  </table>

@endsection