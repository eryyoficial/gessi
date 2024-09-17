@extends('dashboard.default')
@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Activity</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Location</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
      <!-- Exemplo de dados -->
      <tr>
        <th scope="row">1</th>
        <td>Community Cleanup</td>
        <td>2024-09-20</td>
        <td>10:00 AM</td>
        <td>Central Park</td>
        <td>Cleaning up the park.</td>
      </tr>
      <!-- Mais linhas conforme necessário -->
    </tbody>
  </table>
  
@endsection
