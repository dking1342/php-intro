<?php

if(isset($_POST['submit'])){
  echo $_POST["username"];
  echo $_POST["age"];
}

?>

<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Jack">Click</a> -->
<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Kavooce">Link</a> -->
<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Jane&age=30">Link</a> -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
    <label for="username">Username: </label>
    <input type="text" name="username" id="username">
  </div>
  <div>
    <label for="age">Age: </label>
    <input type="text" name="age" id="age">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>
