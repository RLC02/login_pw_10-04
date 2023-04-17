<?php
    if(isset($_POST['Email']) && (isset($_POST['Senha']))){
        $arquivo = fopen("Dados.txt", "a");
        fwrite($arquivo, 'Email: ' . $_POST['Email'] . "\n");
        fwrite($arquivo, 'Senha: ' . $_POST['Senha'] . "\n");
        fclose($arquivo);
    }
    $emailLogin = $_POST['LogEmail'];
    $senhaLogin = $_POST['LogSenha)'];
    function Result($LogEmail, $LogSenha){
        
       
            $arquivo = 'dados.txt'; 
            if(file_exists($arquivo)){
                $arq = fopen($arquivo , 'r');
    
                $texto = fread($arq , filesize($arquivo));
    
                if(isset($Logemail) && isset($senhaLogin)){
                    if(str_contains($texto , $emailLogin) && str_contains($texto , $senhaLogin)){
                        echo $_POST['LogEmail'] . " logado com sucesso.";    
                    }
  }
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['login']))
  {
  Result();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
<form name="Votação" method="POST" action="login.php">
<div class="container text-center">
    <div class="row justify-content-md-center">
    <div class="col-md-auto">
    <div class="col-auto">
                <label for="LogEmail" class="col-form-label">Email</label>
            </div>
            <div class="col-auto">
                <input type="email" id="LogEmail" name="LogEmail" class="form-control" required>
            </div>
    </div>
        <div class="col-md-auto">
 
            <div class="col-auto">
                <label for="senha" class="col-form-label">Password</label>
            </div>
            <div class="col-auto">
                <input type="password" id="LogSenha" name="LogSenha" class="form-control" required >
            </div>
        </div>
    </div>
    <br>
    <div class="col-auto">
            <button type="submit" name="login" class="btn btn-primary mb-3">Login</button>
    </div>
</div>
</form>
</body>
</html>