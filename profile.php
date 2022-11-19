<?php
$user_data = (object) [
  "name" => "André Luiz Hiller Vieira",
  "visible_name" => "André",
  "birthdate" => "2002-09-18",
  "gender" => "male",
  "about" => "Lorem ipsum dolor sit amet"
];

if (isset($_POST['btSubmit'])) {
  $user_data->{'gender'} = $_POST['s'];
}

function injectSelectedAttribute($selectedOption, $option_value)
{
  return strtolower($selectedOption) === strtolower($option_value) ? 'selected="selected"' : '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/main.css" />
  <link rel="stylesheet" href="style/profile.css" />
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
        <a href="registerItem.php">
          <span class="material-symbols-outlined"> handshake </span>
          Emprestar
        </a>
      </button>
      <button class="logout-button">
        <a href="index.php"><span class="material-symbols-outlined"> logout </span></a>
      </button>
    </div>
  </nav>

  <section id="content">
    <div id="content-box">
      <img src="https://icons.veryicon.com/png/o/business/multi-color-financial-and-business-icons/user-139.png" alt="Profile photo" width="150" height="150" />

      <hr id="line" />

      <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
        <div id="box-infos">
          <div class="input-container">
            <p>Nome completo</p>
            <input type="text" class="input input-profile" value='<?= isset($user_data->{'name'}) ? $user_data->{'name'} : ''; ?>' placeholder="Digite seu nome" />
            <p>Nome de exibição</p>
            <input type="text" class="input input-profile" value='<?= isset($user_data->{'visible_name'}) ? $user_data->{'visible_name'} : ''; ?>' placeholder="Digite seu nome de exibição" />
          </div>
          <div class="input-container">
            <p>Data de nascimento</p>
            <input type="date" class="input input-profile" value='<?= isset($user_data->{'birthdate'}) ? $user_data->{'birthdate'} : ''; ?>' placeholder="mm-dd-yyyy" />
            <p>Sexo</p>
            <select class="input input-profile" default name="s">
              <option value="male" <?php echo injectSelectedAttribute($user_data->{'gender'}, 'male'); ?>>Masculino</option>
              <option value="female" <?php echo injectSelectedAttribute($user_data->{'gender'}, 'female'); ?>>Feminino</option>
            </select>
          </div>
        </div>
        <textarea name="bio" id="bio" cols="30" rows="10" placeholder="Escreva um pouco sobre você..." placeholder="Digite seu nome"><?= isset($user_data->{'about'}) ? $user_data->{'about'} : ''; ?></textarea>

        <input type="submit" value="Salvar alterações" id="send-button" class="button" name="btSubmit" />
      </form>
    </div>

    <img src="assets/images/logo-puc.svg" alt="Logo Puc Paraná" class="logo-puc" />
  </section>
</body>

</html>