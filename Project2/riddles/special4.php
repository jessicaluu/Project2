<!DOCTYPE html>
<html>
  <head>
    <link href="riddles.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="riddle">
      <div class="question">
        <form action="#" method="post">
          <p><h3>A NA A SA A A. What comes next?</h3>
          <input type="radio" name="special4" id="0" value="0"><label for="0"> NASA</label><br>
          <input type="radio" name="special4" id="1" value="1"><label for="1"> E</label><br>
          <input type="radio" name="special4" id="2" value="2"><label for="2"> ANSWER</label><br>
          <input type="radio" name="special4" id="3" value="3"><label for="3"> SAN</label><br>
          <br>
          <input type="submit" name="submit" value="CHECK ANSWER"><br>
        </form>

        <?php
        if (isset($_POST['special4'])) {
          if ($_POST['special4'] == "1") {
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
