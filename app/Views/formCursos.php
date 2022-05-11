<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cursos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>


    <div class="contanier mt-5">
    <?php echo form_open('cursos/store')?>
    <?php echo anchor(base_url('/cursos'), 'Voltar', ['class' => 'btn btn-success mb-3', 'style' => 'margin: 5px']) ?>

   <div class="form-group ml-5">
      <label>Curso: </label>
      <input type="text" value="<?php echo isset($cursos['titulo']) ? $cursos['titulo'] : '' ?>" name="titulo" id="titulo" class="form-control" style="width: 50%" >   
   </div>
   <div class="form-group ml-5">
      <label>Descrição: </label>
      <input type="text"  value="<?php echo isset($cursos['descricao']) ? $cursos['descricao'] : '' ?>" name="descricao" id="descricao" class="form-control" style="width: 50%" >   
   </div>

 <input type="submit" value="Salvar" class="btn btn-primary ml-5 ">
 <input type="hidden" name="id" id="id" value="<?php echo isset($cursos['id']) ? $cursos['id'] : '' ?>" >
             
 <?php echo form_close();?>

    </div>
</body>
</html>