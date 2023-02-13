<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPNINJA | W7_D3</title>
</head>
<body>
    <h1>Exercise 1 : Color Cookie</h1>

    <div class="container">
    <?php
        // Check if the cookie exists
        if(isset($_COOKIE['color'])) {
        $color_theme = $_COOKIE['color'];
        } 
        else {
        // Set the default color scheme to light
        $color_theme = 'light';
        }

        // Check if the form has been submitted
        if(isset($_POST['color'])) {
        // Set the color scheme from the form data
        $color_theme = $_POST['color'];

        // Set the cookie with the selected color scheme
        setcookie('color', $color_theme, time() + 60 * 60 * 24 * 7);

        // Display a message indicating that the color scheme has been saved
        echo "Your color theme has been saved.";
        }
        ?>

<!-- Color Scheme Form -->
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
  <label>
    <input type="radio" name="color" value="light" <?php if($color_theme == 'light') echo 'checked'; ?> />
    Light
  </label>
  <label>
    <input type="radio" name="color " value="dark" <?php if($color_theme == 'dark') echo 'checked'; ?> />
    Dark
  </label>
  <button type="submit">Save</button>
</form>
    </div>
</body>
</html>