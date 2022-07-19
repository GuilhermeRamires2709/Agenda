<?php
include "estilo.php";

if(isset($_POST['opcao']) && $_POST['opcao']== "Inserir"){
	$newEstilo = new Estilo($_POST['identificacao']);
	$newEstilo->addEstilo();
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>MusicStore</title>
</head>

<body>
    <!-- Aqui adiciona um novo estilo -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStyle">
        Adicionar Estilo
    </button>

    <!-- Modal -->
    <div class="modal fade addStyle" id="addStyle" tabindex="-1" aria-labelledby="addStyleLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addStyleLabel">Inserir Novo Estilo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="form-group row">
                                <label for="identificacao">Estilo</label>
                                <input type="text" name="identificacao" id="identificacao" placeholder="Digite aqui o nome do estilo">
                            </div>
                            <input type='submit' name='opcao' value='Inserir'>
                            </form>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>