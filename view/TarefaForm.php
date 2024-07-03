<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.3.3/css/bootstrap.min.css">
    <title>Tarefa</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-10 m-3 center">
                <form action="../control/TarefaController.php" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="titulo">Título tarefa</label>
                        <input class="form-control" type="text" name="titulo">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="descricao">Descrição</label>
                        <input class="form-control" type="text" name="descricao">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="prioridade">Prioridade</label>
                        <input class="form-control" type="text" name="prioridade">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="dataVencimento">Data de vencimento</label>
                        <input class="form-control" type="text" name="dataVencimento">
                    </div>
                    <input type="submit" class="btn btn-primary" value="salvar" name="salvar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>