<?php include 'inc/header.php' ?>

<?php

$sql = 'SELECT * FROM feeback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
   
    <h2>Feedback</h2>

    <?php if(empty($feedback)):?>
      
      <p class="lead mt3">There is no feedback</p>

      <?php endif; ?>

<?php foreach($feedback as $feedbackItem):?>
          <div class="card my-3 w-75">
          <div class="card-body text-center">
            <?php echo $feedbackItem['body'] ?>
            <div class="text-secondary mt-2">
              By <?php echo $feedbackItem['name']; ?> on <?php echo $feedbackItem['date'];?>
            </div>
          </div>
        </div>

<?php endforeach; ?>
   
  
   <?php include 'inc/footer.php' ?>

