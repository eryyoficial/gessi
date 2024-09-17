@extends('dashboard.default')
@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Position</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <!-- Exemplo de dados, substitua com dados reais do banco de dados -->
      <tr>
        <th scope="row">1</th>
        <td>John Doe</td>
        <td>45</td>
        <td>Male</td>
        <td>Senior Caregiver</td>
        <td>Active</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jane Smith</td>
        <td>38</td>
        <td>Female</td>
        <td>Junior Caregiver</td>
        <td>Active</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Emily Johnson</td>
        <td>50</td>
        <td>Female</td>
        <td>Lead Caregiver</td>
        <td>Inactive</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Michael Brown</td>
        <td>42</td>
        <td>Male</td>
        <td>Caregiver</td>
        <td>Active</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Linda White</td>
        <td>29</td>
        <td>Female</td>
        <td>Caregiver</td>
        <td>Active</td>
      </tr>
    </tbody>
  </table>
  
@endsection
