<?php
  require __DIR__ . '\interface\queryInterface.php';
  require __DIR__ . '\class\user.php';

  $user = new User ($database = new Database);

  $AllUsers = $user->fetchUser();

  foreach ($AllUsers as $key => $value) { ?>

    <ul>
        <h5>Name: <?=$value['name'];?>

        <h5>Number: <?=$value['phone'];?></h5>

    </ul>

  <?php
  }
 ?>
