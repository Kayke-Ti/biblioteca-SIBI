<php
  session_start();

  require_once "../config/config.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
  <title>Tela de Login</title>
</head>
<body>
  <div class="login">
    <header>
      <div class="header-green">⠀</div>
      <div class="header-yellow">⠀</div>
    </header>

    <h1 class="title">
      SEJA BEM-VINDO(A)
    </h1>

    <h3 class="text-title">
      Entre com seu <span class="span">Login</span>
    </h3>

    <form method="POST" action="index.php" >
      <div class="container-input">
      <input 
        id="input-user"
        type="text"
        name="name"
        placeholder="Usuário*"
        required
      />
    </div>

      <div class="container-input">
        <input 
          id="input-password"
          type="password"
          name="password" 
          placeholder="Senha*" 
          required
        />
      </div>

      <div class="container-text">
        <a href="../cadastro/main.html">Cadastre-se</a>
      </div>
      
      <div class="container-button">
        <!--TOCAR PARA UM BOTÃO OBS:-->
        <button type="submit" value="Logar">
          Entrar
        </button>
      </div>
      
      <div class="arrow">
      <div class="arrow-color">
        <a href="">
          <i class="fas fa-arrow-left"></i>
        </a>
      </div>
      </div>
    </form>

    <div class="footer">
      <footer>
        Copyright © 2023 - Todos os direitos reservados
      </footer>
    </div>
  </div>
</body>
</html>