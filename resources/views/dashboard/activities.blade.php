<div class="container-fluid">
    <h2>Agendamento de Atividades e Visitas</h2>
    <p>Gerencie as atividades e visitas dos residentes aqui.</p>

    <!-- Formulário de Agendamento -->
    <form class="mb-4">
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Título da Atividade">
            </div>
            <div class="col-md-6">
                <input type="datetime-local" class="form-control" placeholder="Data e Hora">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <textarea class="form-control" rows="3" placeholder="Descrição da Atividade"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Agendar</button>
    </form>

    <!-- Tabela de Atividades -->
    <h3>Atividades Agendadas</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Data e Hora</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <!-- Exemplo de Dados -->
            <tr>
                <td>1</td>
                <td>Visita do Médico</td>
                <td>2024-09-18 14:00</td>
                <td>Consulta de rotina com o Dr. Silva.</td>
                <td><button class="btn btn-info btn-sm">Editar</button></td>
            </tr>
            <!-- Adicionar mais linhas conforme necessário -->
        </tbody>
    </table>
</div>
