<!DOCTYPE html>
<html>
  <head>
    <link href="riddles.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="riddle">
      <div class="question">
        <form action="#" method="post">
          <p><h3>1, 11, 21, 1211, 111221, 312211. What's the next number in the sequence?</h3>
          <input type="radio" name="special1" id="0" value="0"><label for="0"> 33112211</label><br>
          <input type="radio" name="special1" id="1" value="1"><label for="1"> 312312312</label><br>
          <input type="radio" name="special1" id="2" value="2"><label for="2"> 13112221</label><br>
          <input type="radio" name="special1" id="3" value="3"><label for="3"> 2313212</label><br>
          <br>
          <input type="submit" name="submit" value="CHECK ANSWER"><br>
        </form>

        <?php
        if (isset($_POST['special1'])) {
          if ($_POST['special1'] == "2") {
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
