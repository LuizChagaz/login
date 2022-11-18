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

        $conn = new PDO("mysql:dbname=$db; host=$host; charset=utf8", $user, $pass);

        $dados = $conn->query("SELECT login, senha FROM User");

        $array = $dados->fetch();

        if(isset($_POST["login"])){
            $login = $_POST["login"];
            $senha = $_POST["senha"];
        }else{
            $login = "";
            $senha = "";
        }
    ?>
    <?php if($array["login"] == $login && $array["senha"] == $senha){?>
        <a href="index.php">
        <div class="funcionou">
            <label>Logado com sucesso</label>
        </div>
        </a>

    <?php }else{?>
    <form method="POST">
        <div class="form-outline mb-4">
            <input type="text" name="login" id="form2Example1" class="form-control" placeholder="<?php echo($array["login"]); ?>" />
            <label class="form-label" for="form2Example1">login</label>
        </div>

        <div class="form-outline mb-4">
            <input type="password" name="senha" id="form2Example2" class="form-control" placeholder="<?php echo($array["senha"]); ?>" />
            <label class="form-label" for="form2Example2">Senha</label>
        </div>
        <button id="entrar"  class="btn btn-primary btn-block mb-4">Entrar</button>
    </form>
    <?php }?>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>