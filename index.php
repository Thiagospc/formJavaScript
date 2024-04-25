<?php
    include 'config.php';
    if(isset($_POST['submit'])){
        $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        if(isset($_POST['terms'])){
            $terms = 'S'; // Se marcado, atribui 'S'
        }else{
            $terms = 'N'; // Se não marcado, atribui 'N'
        }
        
        $state = isset($_POST['state']) ? $_POST['state'] : '';
        $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';

        $result = mysqli_query($conexao, "insert into formulario values (default, '$nome', '$email', '$password', '$terms', '$state', '$sexo', '$description')");

    }

    
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formlário EspecializaTI</title>

    <link rel="stylesheet" href="./estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="background">

    <div class="container-sm">
        <h2 id="inscricao">Faça sua inscrição!</h2>

        <form action="./index.php" method="POST" class="form" onsubmit="onSubmit()">
            <div class="mb-3">
                <label for="inputControl" class="form-label">Nome</label>
                <input type="nome" class="form-control" name="nome" id="inputControl" placeholder="Digite seu nome aqui">
            </div>
            <div class="mb-3">
                <label for="inputControl" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="inputControl" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="inputControl" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password" id="inputControl" placeholder="Digite sua senha">
            </div>
            <div class="mb-3">
                <label for="inputControl" class="form-label">Concordo</label>
                <input type="checkbox" name="terms" id="inputControl" value="S">
            </div>
            <div class="mb-3">
                <label for="inputControl" class="form-label">Estados</label>
                <select name="state" id="inputControl">
                    <option value="">Selecione</option>
                    <option value="sp">São Paulo</option>
                    <option value="rj">Rio de Janeiro</option>
                    <option value="pa">Pará</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="inputControl" class="form-label">Masculino <input type="radio" name="sexo" id="inputControl" value="M"></label>
                <label for="inputControl" class="form-label">Feminino <input type="radio" name="sexo" id="inputControl" value="F"></label>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5" cols="30"></textarea>
            </div>
            
            <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
          
        </form>
    </div>


    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>