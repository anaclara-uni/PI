<?php
require '../vendor/autoload.php';

use Application\Hello;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Achados & Perdidos Unifio - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="./css/default.css" rel="stylesheet" />
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #4A90E2, #50E3C2);
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin: 0;
    }
    /* Estilo da pagina*/
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #4A90E2, #e8eae7ff);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }

    /* Caixa do login */
    .login-container {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
      width: 300px;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 25px;
      color: #333;
    }

    /*  textos */
    input[type="text"],
    input[type="password"] {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    /* Botão de login */
    .btn-login {
      background-color: #4A90E2;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 10px;
      transition: background 0.3s;
    }

    .btn-login:hover {
      background-color: #357ABD;
    }

    /* Link para criar conta */
    .signup {
      margin-top: 20px;
      font-size: 14px;
    }

    .signup a {
      color: #4A90E2;
      text-decoration: none;
      font-weight: bold;
    }

    .signup a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Login</h2>
    <form>
      <input type="text" placeholder="Usuário" required><br>
      <input type="password" placeholder="Senha" required><br>
      <button class="btn-login">Entrar</button>
    </form>
    <div class="signup">
      <p>Não tem uma conta? <a href="#">Crie uma conta</a></p>
    </div>
  </div>

</body>
</html>