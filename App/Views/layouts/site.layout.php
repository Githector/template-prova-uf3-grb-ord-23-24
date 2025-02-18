<?php  ?>

<!doctype html>
<html lang="en">
<head>
  <title>SAU Cirviànum</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="<?php echo '/Public/Assets/css/bootstrap.min.css' ?>" rel="stylesheet">

</head>

<body>
  <header>
    <nav class="p-2 h3 d-flex justify-content-between bg-secondary align-items-center">
      <div class="left">
        <i class="text-white">SAU Cirviànum</i>
      </div>
      <div class="mt-2 right text-white h5 align-self-center">
      <a class="text-white text-decoration-none" href="/main/index">Home |</a>
      <a class="text-white text-decoration-none" href="/reset/run">Reset |</a>
        <a class="text-white text-decoration-none" href="/ticket/index">Tickets | </a>
        <a class="text-white text-decoration-none" href="/user/logout">LogOut | </a>
        <a class="text-white text-decoration-none" href="/user/index">LogIn | </a>
        <a class="text-white text-decoration-none" href="/items/index">Items</a>

      </div>
    </nav>
  </header>
  <main>
    <?php echo $content; ?>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="<?php echo '/Public/Assets/js/popper.min.js' ?>"></script>
  <script src="<?php echo '/Public/Assets/js/bootstrap.min.js' ?>"></script>

</body>

</html>