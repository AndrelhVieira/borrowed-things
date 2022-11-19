<?php
$username = "André";

$items = [
  ['Livro Clean Code', 'José dos Santos', 'Jéssica Soares', '18/10/2022'],
  ['Livro Clean Code', 'José dos Santos', 'Jéssica Soares', '18/10/2022'],
  ['Livro Clean Code', 'José dos Santos', 'Jéssica Soares', '18/10/2022'],
  ['Livro Clean Code', 'José dos Santos', 'Jéssica Soares', '18/10/2022'],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/main.css" />
  <link rel="stylesheet" href="style/home.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <title>Página inicial</title>
</head>

<body>
  <nav>
    <div>
      <span class="material-symbols-outlined"> home </span>
      <h1 id="title-app">Borrowed Things</h1>
    </div>
    <div>
      <button class="button">
        <a href="profile.php">
          <span class="material-symbols-outlined"> account_circle </span>
          Acessar minha conta
        </a>
      </button>
      <button class="logout-button">
        <a href="index.php">
          <span class="material-symbols-outlined"> logout </span>
        </a>
      </button>
    </div>
  </nav>

  <section id="content">
    <h1>Bem-vindo, <strong><?= $username ?>!</strong></h1>
    <p id="presentation">
      Aqui você confere todos os items disponíveis para empréstimo.<br />Faça
      uma solicitação para emprestar algo que está disponível
    </p>
    <button class="button">
      <a href="registerItem.php">
        <span class="material-symbols-outlined"> handshake </span>
        Emprestar
      </a>
    </button>

    <section id="table">
      <table>
        <thead>
          <tr>
            <th>Item</th>
            <th>Solicitante</th>
            <th>Titular do item</th>
            <th>Data do empréstimo</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($items as &$item) { ?>
            <tr>
              <td><?= $item[0]; ?></td>
              <td><?= $item[1]; ?></td>
              <td><?= $item[2]; ?></td>
              <td><?= $item[3]; ?></td>
            </tr>
          <?php }; ?>
        </tbody>
      </table>
    </section>

    <img src="assets/images/logo-puc.svg" alt="Logo Puc Paraná" class="logo-puc" />
  </section>
</body>

</html>