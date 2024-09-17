@extends('dashboard.default')
@section('content')
<div class="container-fluid">
    <h2>Monitoramento de Saúde dos Residentes</h2>
    <p>Aqui você pode visualizar e gerenciar o estado de saúde dos residentes.</p>

    <!-- Pesquisa e Filtros -->
    <form class="mb-4" method="GET" action="{{ route('dashboard.residents') }}">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="query" class="form-control" placeholder="Pesquisar residente..." value="{{ request('query') }}">
            </div>
            <div class="col-md-4">
                <select name="health_status" class="form-select">
                    <option value="">Filtrar por estado de saúde</option>
                    <option value="Bom" {{ request('health_status') == 'Bom' ? 'selected' : '' }}>Bom</option>
                    <option value="Crítico" {{ request('health_status') == 'Crítico' ? 'selected' : '' }}>Crítico</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </form>

    <!-- Tabela de Dados -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Estado de Saúde</th>
                <th>Última Atualização</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($residents as $resident)
                <tr>
                    <td>{{ $resident['id'] }}</td>
                    <td>{{ $resident['name'] }}</td>
                    <td>{{ $resident['dob'] }}</td>
                    <td>{{ $resident['health_status'] }}</td>
                    <td>{{ $resident['last_update'] }}</td>
                    <td><button class="btn btn-info btn-sm">Ver Detalhes</button></td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Nenhum residente encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
