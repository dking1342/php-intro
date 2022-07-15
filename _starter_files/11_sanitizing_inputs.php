<?php

if(isset($_POST['submit'])){
  $name = filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS);

  echo $name;
  echo $email;

}

?>

<form action="<?php echo htmlspecialchars(
  $_SERVER['PHP_SELF']
); ?>" method="POST">
  <div>
    <label>Name: </label>
    <input type="text" name="name">
  </div>
  <br>
  <!-- <?php echo $email; ?> -->
  <div>
  <label>Email: </label>
    <input type="email" name="email">
  </div>
  <br>
  <input type="submit" name="submit" value="Submit">
</form>