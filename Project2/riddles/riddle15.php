<!DOCTYPE html>
<html>
  <head>
    <link href="riddles.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="riddle">
      <div class="question">
        <form action="#" method="post">
          <p><h3>What has hands but can not clap?</h3>
          <input type="text" name="riddle15"><br><br>
          <input type="submit" name="submit" value="CHECK ANSWER"><br>
        </form>

        <?php
        if (isset($_POST['riddle15'])) {
          if ($_POST['riddle15'] == "Clock" || $_POST['riddle15'] == "CLOCK" || $_POST['riddle15'] == "clock") {
            echo "<p>Correct! 1 point for you!</p>";
          } else {
            echo "<p>That's not right...  Sorry. No Point for you.</p>";
          }
        }
        ?>

        <a href="board.html">HOME</a></p>
      </div>
    </div>
  </body>
</html>
