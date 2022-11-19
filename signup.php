<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/main.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
  <title>Borrowed Things</title>
</head>

<body>
  <main>
    <article id="sign-up">
      <h1 class="title">Borrowed Things</h1>

      <section id="content-box">
        <p id="context-box-text">
          Cadastre-se e tenha acesso à principal e mais completa<br />ferramenta
          de empréstimos pessoais.<br /><br />Crie sua conta agora mesmo!
        </p>

        <form action="home.php">
          <input type="text" name="name" placeholder="Nome completo" class="input" />
          <input type="email" name="email" placeholder="E-mail" class="input" />
          <input type="email" name="email" placeholder="Confirme seu e-mail" class="input" />
          <input type="password" name="password" placeholder="Cadastre sua senha" class="input" />

          <button type="submit" value="Entrar" class="button-form">
            Criar minha conta
          </button>
        </form>
        <p id="sign_text">
          Já possui conta?
          <a href="index.php" id="link_to_sign"> Acesse já</a>
        </p>
      </section>

      <img src="assets/images/logo-puc.svg" alt="Logo Puc Paraná" class="logo-puc" />
    </article>
  </main>
</body>

</html>