
<html>
    <body>
<?php
    if(isset($_GET["fav_color_submit"]))
    {
        //The form was submitted.

        $favcolor = $_GET["fav_color"];
        switch ($favcolor)
        {
        case "r":
          echo "red! The color of blood!";
          break;
        case "b":
          echo "blue! The color of the skies!";
          break;
        case "g":
          echo "green! The color of the mother nature!";
          break;
        default:
          echo "Hmm I guess your life has no color. O O F";
        }

    }
?>
        <form method='get' action='#'>
            <select name='fav_color'>
                <option value='r'>red</option>
                <option value='g'>green</option>
                <option value='b'>blue</option>
                <option value='o'>other</option>
            </select>
            <br />
            <input type='submit' name='fav_color_submit' value='Submit' />
        </form>
    </body>
</html>