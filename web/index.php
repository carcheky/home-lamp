<?php
# Default htdocs directory
$dir = '/mnt/c/wsl/sites';
$domain_sufix = '.local';
# Array static sites
$importantsites = array(
  'GitHub carcheky'      => 'https://github.com/carcheky',
);
$htdocssites = array_diff(
  scandir($dir),
  array(
    '..',
    '.',
    '.DS_Store',
    'home',
    'private_drupal',
    'private_php',
    'electronapp',
    '_backup'
  )
);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="css/style.css">
  <script src="/js/list.min.js"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>

  <h1>HomeLamp</h1>


  <div id="sites">
    <input class="search" placeholder="Search" autofocus />


    <ul class="list">
      <?php
      foreach ($importantsites as $key => $value) {
        echo "<li><a  class='site favorite' href=" . $value . ">" . $key . "</a></li>";
      }
      foreach ($htdocssites as $key => $value) {
        if (is_dir($dir . '/' . $value)) {
          echo "<li><a  class='site' href='http://" . $value . $domain_sufix . "'>" . $value . "</a></li>";
        }
      }
      ?>
    </ul>

  </div>
  <script src="js/list.min.js"></script>
  <script>
    var options = {
      valueNames: ['site']
    };

    var userList = new List('sites', options);
  </script>
</body>

</html>