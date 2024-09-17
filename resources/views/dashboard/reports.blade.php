<div class="container-fluid">
    <h2>Sistema de Relatórios</h2>
    <p>Gere e visualize relatórios detalhados.</p>

    <!-- Filtros para Relatórios -->
    <form class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <select class="form-select">
                    <option value="">Selecionar Tipo de Relatório</option>
                    <option value="health">Saúde</option>
                    <option value="activities">Atividades</option>
                    <option value="donations">Doações</option>
                </select>
            </div>
            <div class="col-md-4">
                <input type="date" class="form-control" placeholder="Data Inicial">
            </div>
            <div class="col-md-4">
                <input type="date" class="form-control" placeholder="Data Final">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Gerar Relatório</button>
    </form>

    <!-- Relatório Exemplo -->
    <div class="alert alert-info">
        <h4>Relatório de Saúde - Setembro 2024</h4>
        <p>Relatório gerado com base nos dados dos residentes.</p>
        <!-- Inserir gráficos, tabelas ou PDFs conforme necessário -->
    </div>
</div>
