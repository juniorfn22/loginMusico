<?php 
session_start();

?>

<!DOCTYPE html>
<html>
    
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">   
    <h1>Form</h1>
        <form class="form-group" method="post" action="uploadPartitura.php" enctype="multipart/form-data">
            <div class="form-group">
            <label for="arquivo" class="label"> Selecione o arquivo:</label>
            <input type="file"  name="arquivo" id="arquivo">
            </div>
            <div class="form-group">
            <label for="nome" class="label">Nome:</label>
            <input type="text" name="nome" class="form-control" required>
            </div>
            <input type="submit" class="btn btn-primary"  value="Enviar">
        <select name="naipe" id="naipe" class="input is-large" >
                                            <option value="" class="op" id="op" disable selected>selecione o naipe</option>
                                            <option value="0">Maestro</option>
                                            <option value="1">1º Clarinete</option>
                                            <option value="2">2º Clarinete</option>
                                            <option value="3">1º Trompete</option>
                                            <option value="4">2º Trompete</option>
                                            <option value="5">Flauta</option>
                                            <option value="6">Sax Alto</option>
                                            <option value="7">Sax Tenor</option>
                                            <option value="8">Trombone</option>
                                            <option value="9">Tuba Bb</option>
                                            <option value="10">Tuba Eb</option>
                                            <option value="11">Violino</option>
                                        </select>
      </form>
      <div class="form-group">
      <a href="maestro.php">Voltar</a>
      </div>
      
   </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>