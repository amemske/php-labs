
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Quiz</h1>
      <?php include 'database.php' ?>
      <form action="submit_answers.php" method="POST">

          <div class="form-group">
              <label for="question1">What is the capital of Japan?</label>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer1" id="answer1a" value="1">
                  <label class="form-check-label" for="answer1a">
                      Beijing
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer1" id="answer1b" value="2">
                  <label class="form-check-label" for="answer1b">
                      Seoul
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer1" id="answer1b" value="2">
                  <label class="form-check-label" for="answer1b">
                      Seoul
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer1" id="answer1b" value="2">
                  <label class="form-check-label" for="answer1b">
                      Seoul
                  </label>
              </div>

          </div>


          <button type="submit" class="btn btn-primary">Submit</button>

</form>