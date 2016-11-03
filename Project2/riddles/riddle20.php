<!DOCTYPE html>
<html>
  <head>
    <link href="riddles.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="riddle">
      <div class="question">
        <form action="#" method="post">
          <p><h3>I am invisible, weigh nothing, and if you put me in a barrel, it will become lighter. What am I?</h3>
          <input type="text" name="riddle20"><br><br>
          <input type="submit" name="submit" value="CHECK ANSWER"><br>
        </form>

        <?php
        if (isset($_POST['riddle20'])) {
          if ($_POST['riddle20'] == "Hole" || $_POST['riddle20'] == "HOLE" || $_POST['riddle20'] == "hole") {
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
