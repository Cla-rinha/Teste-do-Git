<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
</head>
<body>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $usuario = $_POST["usuario"];
                $senha = $_POST["senha"];
                echo "<p>Usuario: $usuario</p>";
                echo "<p>Senha: $senha</p>";
            }
        ?>
</body>
</html>