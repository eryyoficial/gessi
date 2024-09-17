<div class="container-fluid">
    <h2>Gestão de Doações e Voluntariado</h2>
    <p>Gerencie doações e voluntários que apoiam o lar.</p>

    <!-- Formulário de Doação -->
    <form class="mb-4">
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Nome do Doador">
            </div>
            <div class="col-md-6">
                <input type="number" class="form-control" placeholder="Valor da Doação" step="0.01">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <textarea class="form-control" rows="3" placeholder="Descrição da Doação"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Registrar Doação</button>
    </form>

    <!-- Tabela de Doações -->
    <h3>Doações Registradas</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Doador</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <!-- Exemplo de Dados -->
            <tr>
                <td>1</td>
                <td>João Silva</td>
                <td>500.00</td>
                <td>2024-09-15</td>
                <td>Doação para equipamentos médicos.</td>
            </tr>
            <!-- Adicionar mais linhas conforme necessário -->
        </tbody>
    </table>

    <!-- Formulário de Voluntariado -->
    <form class="mt-4">
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Nome do Voluntário">
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email do Voluntário">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <textarea class="form-control" rows="3" placeholder="Descrição das Atividades"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Adicionar Voluntário</button>
    </form>

    <!-- Tabela de Voluntários -->
    <h3>Voluntários Registrados</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Registro</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <!-- Exemplo de Dados -->
            <tr>
                <td>1</td>
                <td>Ana Pereira</td>
                <td>ana@example.com</td>
                <td>2024-09-15</td>
                <td>Voluntária para atividades de lazer.</td>
            </tr>
            <!-- Adicionar mais linhas conforme necessário -->
        </tbody>
    </table>
</div>
