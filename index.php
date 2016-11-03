<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body class="text-center"   >
    <?php
    if (isset($_POST['email'])) {
        $pdo = new PDO("mysql:host=localhost;dbname=emailsnativa", "root", "");
        if(!$pdo){
            die('Erro ao criar a conexão!');
        }
            $email = htmlspecialchars((empty($_POST['email'])) ? '0' : $_POST['email']);
            $executa = $pdo->query("INSERT INTO emails(email) values ('".$email."')");
        if($executa){
            echo '<div class="alert alert-success"><div class="alert alert-success">
                        <strong>Success!</strong> Email retirado com Sucesso.
                    </div>';
        }
        else{
           print_r($pdo->errorInfo());
        }
        }
   ?>
        <h1>Digite o email a ser retirado da lista</h1>
        <form  method="POST" class="form-inline">
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
  </div>
        <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" value="ok" name="Enviar">Enviar</button>
    </div>
  </div>
        </form>
    </body>
</html>