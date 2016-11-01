<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body class="text-center"   >
    <?php
        $pdo = new PDO("mysql:host=  ;dbname=", "user", "password");
        if(!$pdo){
            die('Erro ao criar a conexão');
        }else{   
            $consulta = $pdo->query("SELECT email FROM login;");
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "Email: {$linha['email']} <br />";
            }
        }
        
    ?>
    </body>
</html>