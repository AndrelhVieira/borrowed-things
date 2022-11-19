<?php
$item_name = isset($_POST['item_name']) ? ($_POST['item_name']) : '';
$item_date = isset($_POST['item_date']) ? ($_POST['item_date']) : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/main.css" />
  <link rel="stylesheet" href="style/registerItem.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <title>Cadastrar Item</title>
</head>

<body>
  <nav>
    <div>
      <a href="home.php"><span class="material-symbols-outlined"> arrow_back_ios </span></a>
      <h1 id="title-app">Borrowed Things</h1>
    </div>
    <div>
      <button class="button" style="margin-right: 20px">
        <a href="home.php">
          <span class="material-symbols-outlined"> home </span>
          Tela inicial
        </a>
      </button>
      <button class="button">
        <a href="profile.php">
          <span class="material-symbols-outlined"> account_circle </span>
          Acessar minha conta
        </a>
      </button>
      <button class="logout-button">
        <a href="index.php"><span class="material-symbols-outlined"> logout </span></a>
      </button>
    </div>
  </nav>

  <section id="content">
    <div id="content-box">
      <h1>Cadastro de novo item</h1>

      <p>
        Forneça as informações abaixo e seu item estará disponível para, em
        seguida,<br />
        as outras pessoas emprestarem de você.
      </p>

      <form action="registerItem.php" method='post'>
        <input type="text" class="input" placeholder="Item" name='item_name' required />

        <label for="item">Emprestar até</label>
        <input type="date" class="input" name="item_date" required />

        <input type="submit" value="Adicionar para empréstimo" class="button-form" />
      </form>
    </div>

    <img src="assets/images/logo-puc.svg" alt="Logo Puc Paraná" class="logo-puc" />
  </section>
</body>

</html>