<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>A Simple PHP File WITH embedded HTML</title>
  </head>

  <body>
    <?php $my_var = 'x'; ?>

    <?php # Show my_var using 'h1' tags  ?>
    <h1><?php echo "my_var: $my_var"; ?></h1>
  </body>
</html>
