<?php include '../components/header.php'; ?>
<?php include '/Users/davidking/Coding/Basics/php/php1/sql/feedback_crud.php'; ?>



<?php 
  $feedback = getAll();
  $trash_icon = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'></path>
            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'></path>
          </svg>"; 

  if(
    isset($_POST["id"]) && 
    isset($_POST["name"]) &&
    isset($_POST["email"]) &&
    isset($_POST["body"]) &&
    isset($_POST["date"])
  ){
    $payloadArray = [
      'id'=>$_POST["id"],
      'name'=>$_POST["name"],
      'email'=>$_POST["email"],
      'body'=>$_POST["body"],
      'date'=>$_POST["date"]
    ];
    delete($payloadArray);
  }
?>

   
<h2>Past Feedback</h2>

<?php if(empty($feedback)): ?>
  <p class="lead mt3">There is no feedback</p>
<?php endif; ?>

<?php foreach($feedback as $item): ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item["body"]; ?>
      <div class="text-secondary mt-2">
        By <?php echo $item["name"]; ?> on <?php echo $item["date"]; ?>
      </div>
      <form 
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
        method="POST"
      >
        <button class="btn">
          <input type="hidden" name="id" value="<?php echo $item["id"]; ?>">
          <input type="hidden" name="name" value="<?php echo $item["name"]; ?>">
          <input type="hidden" name="email" value="<?php echo $item["email"]; ?>">
          <input type="hidden" name="body" value="<?php echo $item["body"]; ?>">
          <input type="hidden" name="date" value="<?php echo $item["date"]; ?>">
          <?php echo $trash_icon; ?>
        </button>
      </form>
    </div>
  </div>
<?php endforeach; ?>



<?php include '../components/footer.php'; ?>