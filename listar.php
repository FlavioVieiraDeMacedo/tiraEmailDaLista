<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body class="text-center"   >
    <table class="table table-striped">
    <thead>
        <tr>
            <th style="text-align:center">Emails</th>
        </tr>
    </thead>
    <tbody>
            <?php 
                $pdo = new PDO("mysql:host=localhost;dbname=emailsnativa", "root", "");
                if(!$pdo){
                    die('Erro ao criar a conexão');
                }else{
                    
                    $consulta = $pdo->query("SELECT email FROM emails;");
                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr><td>{$linha['email']} </td><tr>";
                    }
                }
            ?>
           
    
    </tbody>
    </table>
    </body>
</html>