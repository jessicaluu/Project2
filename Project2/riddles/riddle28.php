<!DOCTYPE html>
<html>
  <head>
    <link href="riddles.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="riddle">
      <div class="question">
        <form action="#" method="post">
          <p><h3>I live in a busy place in the city. I'll let you stay with me for awhile. If you don't feed me, I can get you into trouble.</h3>
          <input type="text" name="riddle28"><br><br>
          <input type="submit" name="submit" value="CHECK ANSWER"><br>
        </form>

        <?php
        if (isset($_POST['riddle28'])) {
          if ($_POST['riddle28'] == "Parking Meter" || $_POST['riddle28'] == "PARKING METER" || $_POST['riddle28'] == "parking meter") {
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
