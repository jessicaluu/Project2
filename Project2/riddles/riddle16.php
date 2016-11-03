<!DOCTYPE html>
<html>
  <head>
    <link href="riddles.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="riddle">
      <div class="question">
        <form action="#" method="post">
          <p><h3>Throw me off the highest building, and I shall not break, but toss me in the smallest pool, and my life's at stake. What am I?</h3>
          <input type="text" name="riddle16"><br><br>
          <input type="submit" name="submit" value="CHECK ANSWER"><br>
        </form>

        <?php
        if (isset($_POST['riddle16'])) {
          if ($_POST['riddle16'] == "Tissue" || $_POST['riddle16'] == "TISSUE" || $_POST['riddle16'] == "tissue") {
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
