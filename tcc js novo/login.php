<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="css/login.css">
  <link rel="icon" href="img/songlogo.png" type="image/x-icon">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SONG</title>


</head>

<body>


<!--


essa pag é a de login, falta add o cadastro q eu queria fazer na mesma pag soq com uma transição/animação usando css. Por isso tem outra teste, q eu estava tentando aplicar a transiçãokk

alem disso falta o banco de dados q vo add mysql

tem muita coisa bagunçada, to usando o arquivo css LOGIN
e de js por enquanto no proprio arquivo php


-->

<!--
  mano o container com a logo
-->

  <div class="container">
    <div class="content">
      <div class="text">
        Conectar pessoas <br />
        ONGs e biologos !
      </div>
      <div class="image">

        <img src="img/songlogo.png" 
        style="width: 100%; margin-bottom: 50px; margin-right: 300px;">
      </div>

    </div>
    <form id="form" action="index.html">
      <div class="social">

<!--
  social media
-->

        <div class="btn">
          <div class="btn-1">
            <img src="https://img.icons8.com/color/30/000000/google-logo.png" />
            entrar
          </div>
          <div class="btn-2">
            <img src="https://img.icons8.com/ios-filled/30/ffffff/facebook-new.png" />
            entrar
          </div>
        </div>

        <!--
          botao pra avisa se é ong ou nn
        -->


        <label id="billing">
   
          <div>
            <br>
            <label for="billing-checkbox">Pessoa fisica:</label>
            <input type="checkbox" id="billing-checkbox" checked />
          </div>
          <div>
            <label for="name" class="billing-label disabled-label">CNPJ: </label>
            <input id="name" name="name" type="text" disabled required />
          </div>
        </label>

        <!-- 
          * ! Email 
          -->

        <div>
          <label for="email">Email</label>
          <i class="far fa-envelope"></i>
          <input type="email" name="email" id="email" placeholder="abc@gmail.com" required="required" />
          <i class="fas fa-exclamation-circle failure-icon"></i>
          <i class="far fa-check-circle success-icon"></i>
          <div class="error"></div>
        </div>

        <!-- /** 
          * ! senha
         **/ -->

        <div>
          <label for="password">Senha</label>
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="password" required="required" />
          <i class="fas fa-exclamation-circle failure-icon"></i>
          <i class="far fa-check-circle success-icon"></i>
          <div class="error"></div>
        </div>

        <a>
          <button type="submit" id="submit">ENVIAR</button>
        </a>

        <a href="#">
          <p>Esqueceu a senha?</p>
        </a>

        <a href="#">
          <p>Criar conta</p>
        </a>


    </form>
  </div>




  <script>

//  loading
document.addEventListener(
  "DOMContentLoaded",
  () => {
    //  checkbox
    document
      .getElementById("billing-checkbox")
      .addEventListener("change", toggleBilling);
  },
  false,
);

function toggleBilling() {
  //  text fields
  const billingItems = document.querySelectorAll('#billing input[type="text"]');
  // text labels
  const billingLabels = document.querySelectorAll(".billing-label");

  //  text fields+ labels
  for (let i = 0; i < billingItems.length; i++) {
    billingItems[i].disabled = !billingItems[i].disabled;

    if (
      billingLabels[i].getAttribute("class") === "billing-label disabled-label"
    ) {
      billingLabels[i].setAttribute("class", "billing-label");
    } else {
      billingLabels[i].setAttribute("class", "billing-label disabled-label");
    }
  }
}


  </script>
</body>

</html>