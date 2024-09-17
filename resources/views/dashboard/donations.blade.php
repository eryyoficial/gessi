@extends('dashboard.default')
@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Donor Name</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
        <th scope="col">Type</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <!-- Exemplo de dados -->
      <tr>
        <th scope="row">1</th>
        <td>John Doe</td>
        <td>$500</td>
        <td>2024-09-15</td>
        <td>Cash</td>
        <td>Completed</td>
      </tr>
      <!-- Mais linhas conforme necessário -->
    </tbody>
  </table>
  
@endsection
