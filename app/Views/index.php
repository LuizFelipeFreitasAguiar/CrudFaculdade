<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>
  body {
    margin: 15%;
  }

  h3 {
    text-align: center;
  }

form{
    width: 35%;
    margin-left: 30%;
}

 
</style>

<body>
  <h3>Painel Administrativo</h3><br>
  <form action="login/validar" method="POST">

  <div class="form-group row ">
    <label for="usuario" class="col-sm-2 col-form-label">Usuário: </label>
    <div class="col-sm-10">
    <input type="usuario" class="form-control" id="usuario" name="usuario" autocomplete="off">
  </div>
  </div>
  <div class="form-group row">
    <label for="senha" class="col-sm-2 col-form-label">Senha: </label>
    <div class="col-sm-10">
    <input type="password" class="form-control" id="senha" name="senha">
  </div>
  </div>


  <button type="submit" class="btn btn-primary " style="margin-left: 50%">Entrar</button>

  </form>

</body>

</html>