<!DOCTYPE html>
<html>
  <head>
    <link href="riddles.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="riddle">
      <div class="question">
        <form action="#" method="post">
          <p><h3>What word becomes shorter when you add two letters to it?</h3>
          <input type="text" name="riddle4"><br><br>
          <input type="submit" name="submit" value="CHECK ANSWER"><br>
        </form>

        <?php
        if (isset($_POST['riddle4'])) {
          if ($_POST['riddle4'] == "Short" || $_POST['riddle4'] == "SHORTER" || $_POST['riddle4'] == "shorter") {
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
