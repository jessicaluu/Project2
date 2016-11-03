<!DOCTYPE html>
<html>
  <head>
    <link href="riddles.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="riddle">
      <div class="question">
        <form action="#" method="post">
          <p><h3>The fewer of me you have, the more I am worth. What am I?</h3>
            <select id="answers" name="special5">
              <option value="0">money</option>
              <option value="1">grades</option>
              <option value="2">homework</option>
              <option value="3">tickets</option>
              <option value="4">friends</option>
              <option value="5">records</option>
              <option value="6">food</option>
              <option value="7">hair</option>
            </select>
            <br>
          <input type="submit" name="submit" value="CHECK ANSWER"><br>
        </form>

        <?php
        if (isset($_POST['special5'])) {
          if ($_POST['special5'] == "4") {
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
