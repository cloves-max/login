<?php
include('verificalogin.php');
if (!isset($_SESSION)) {
  session_start();
}
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="./style.css" />
  <title>Cadastrar Tutor</title>
</head>
<body>
  <header class="header">
  <img  src="./img/logo if.png">
    <h3>Bem vindo <?php echo $_SESSION['usuario'] ?></h3>

    <nav>
      <ul class="menu">

        <li>
          <a href="logout.php">
            sair
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <form action="createtutor.php" method="POST">
    <div class="container">
        Nome<input type="text" placeholder="Enter Username" name="uname" required><br>
        Registro<input type="text" placeholder="Enter Username" name="uname" required><br>
        Senha<input type="text" placeholder="Enter Username" name="uname" required>
    </div>
  </form>
</body>