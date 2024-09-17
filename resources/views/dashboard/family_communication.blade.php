<div class="container-fluid">
    <h2>Canal de Comunicação com Familiares</h2>
    <p>Gerencie a comunicação entre cuidadores e familiares.</p>

    <!-- Formulário de Mensagem -->
    <form class="mb-4">
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Nome do Familiar">
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email do Familiar">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <textarea class="form-control" rows="3" placeholder="Mensagem"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Enviar Mensagem</button>
    </form>

    <!-- Histórico de Mensagens -->
    <h3>Histórico de Mensagens</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Remetente</th>
                <th>Destinatário</th>
                <th>Data</th>
                <th>Mensagem</th>
            </tr>
        </thead>
        <tbody>
            <!-- Exemplo de Dados -->
            <tr>
                <td>1</td>
                <td>Cuidadores</td>
                <td>familar@example.com</td>
                <td>2024-09-15 09:30</td>
                <td>Atualização sobre a saúde de Maria.</td>
            </tr>
            <!-- Adicionar mais linhas conforme necessário -->
        </tbody>
    </table>
</div>
