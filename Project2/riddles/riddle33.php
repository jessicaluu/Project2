<!DOCTYPE html>
<html>
  <head>
    <link href="riddles.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="riddle">
      <div class="question">
        <form action="#" method="post">
          <p><h3>Mary’s father has 5 daughters – Nana, Nene, Nini, Nono. What is the fifth daughters name?</h3>
          <input type="text" name="riddle33"><br><br>
          <input type="submit" name="submit" value="CHECK ANSWER"><br>
        </form>

        <?php
        if (isset($_POST['riddle33'])) {
          if ($_POST['riddle33'] == "Mary" || $_POST['riddle33'] == "MARY" || $_POST['riddle33'] == "mary") {
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
