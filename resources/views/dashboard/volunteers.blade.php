@extends('dashboard.default')
@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <!-- Exemplo de dados -->
      <tr>
        <th scope="row">1</th>
        <td>Sarah Parker</td>
        <td>30</td>
        <td>Female</td>
        <td>sarah.parker@example.com</td>
        <td>(555) 123-4567</td>
        <td>Active</td>
      </tr>
      <!-- Mais linhas conforme necessário -->
    </tbody>
  </table>
  
@endsection
