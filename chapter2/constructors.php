<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

      require 'Comment.php';
      $comment = new Comment('This is a comment',10);
      ?>

      <p>
        Comment = <?= $comment->text?> by userId = <?= $comment->userId?>
      </p>

       
<!-- 
      //1. Create a second attribute for $userId
      //2. Add $userId to the Comment constructor as a second parameter
      //3. Update the comment instantiation in constructors.php to include a random userId
      //3. Remove the echo statement and create a paragraph which prints the text and userId
      //5. Test you work in the browser -->


</body>
</html>