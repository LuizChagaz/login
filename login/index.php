<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="LuizChagaz">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
</head>
<body>
    <?php 
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "login";

        $conn = mysqli_connect ( $host , $user , $pass , $db ) or die ( "Falha na conexão: %s\n" . $conn -> error ) ;

        $dados = mysqli_query($conn, sprintf("SELECT login, senha FROM User")) or die(mysqli_error());

        $array = mysqli_fetch_assoc($dados);

        $if = mysqli_num_rows($dados);

    ?>
    
    <form>
        <div class="form-outline mb-4">
            <input type="text" id="form2Example1" class="form-control" placeholder="<?php echo($array["login"]); ?>" />
            <label class="form-label" for="form2Example1">login</label>
        </div>

        <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" placeholder="<?php echo($array["senha"]); ?>" />
            <label class="form-label" for="form2Example2">Senha</label>
        </div>
        <button type="button" class="btn btn-primary btn-block mb-4">Entrar</button>
    </form>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>