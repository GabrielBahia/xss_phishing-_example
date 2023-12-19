# xss_phishing-_example

**Observação importante: O código é apenas um exemplo que foi desenvolvido para fins de estudo. Não nos responsabilizamos pelo mau uso para fins anti-éticos.** 

## Execução
```bash
php -S 0.0.0.0:8081
```

## Phishing: Passo a passo
 1. Acesse a página `http://localhost:8081`
 2. Insira o payload contido no arquivo `payload.txt` no input da página
 3. Copie a URL e envie para a vítima
 4. Ao acessar a página, a vítima verá apenas um botão para fazer login com o Google. ***A vítima clica no botão***
 5. *A vítima preenche seus dados de email e senha e clica em avançar*
 6. A vítima é redirecionada para a página inicial, acreditando ter feito o login com sucesso, enquanto na realidade suas credenciais foram enviadas para o servidor locala em execução e salvas no arquivo `creds.txt`
 7. *A vítima pode utilizar o site normalmente e não sabe que teve suas credenciais roubadas*. (A URL nesse momento não possui mais o payload malicioso)
 