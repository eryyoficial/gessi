@extends('dashboard.default')
@section('content')<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Date</th>
        <th scope="col">Author</th>
        <th scope="col">Summary</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <!-- Exemplo de dados -->
      <tr>
        <th scope="row">1</th>
        <td>Annual Report</td>
        <td>2024-01-15</td>
        <td>Jane Doe</td>
        <td>Summary of activities and finances for the year.</td>
        <td>Published</td>
      </tr>
      <!-- Mais linhas conforme necessário -->
    </tbody>
  </table>
    
@endsection
