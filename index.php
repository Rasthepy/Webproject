<!doctype html>
<html>
  <head>
    <title>Makta-Makta</title>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <h1><a href="index.php?id=0"> Hello Makta! <br/></a></h1>
    </header>
    <nav>
      <?php
      echo file_get_contents("list.txt");
       ?>
    </nav>
    <hr/>
    <?php
      if(empty($_GET['id'])):
        $id = 0;
      else:
        $id = $_GET['id'];
      endif;
      echo file_get_contents("$id.txt");
     ?>
  </body>
</html>
