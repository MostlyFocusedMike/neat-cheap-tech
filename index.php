<?php
    require 'app/src/item_sort.php'
?>

<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mike Cronin">
    <meta name="description" content="My christmas list">
    <title>neat cheap tech</title>
    <link rel="stylesheet" href="css/styles.min.css" type="text/css" /> 
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
  </head>
  <body>
    <div id="wrapper">
      <?php 
        include 'app/views/header.php';
        include 'app/views/sort_bar.php';
      ?>
      <div id="buffer"></div>

      <div id="items"> 
        <?php  
        $items = new item_list($items);
        $items->show_items();
        ?>
      </div> 

      <footer>
        <p>And this is where I'd put my &copy copyright, <em>if I had one</em>.</p>
      </footer>
    </div> 
    <div id="diagonal"> </div>

    <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>



