<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
      //Output site title
      bloginfo( 'name' );
      if ( $current_post_title = get_the_title() ) {
        echo ' | '.$current_post_title;
      }
    ?>
  </title>
</head>
<body>
  <h1>
    <?php
      //Output site title
      bloginfo( 'name' );
      if ( $current_post_title = get_the_title() ) {
        echo ' | '.$current_post_title;
      }
    ?>
  </h1>
