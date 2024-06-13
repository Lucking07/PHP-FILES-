<!DOCTYPE html>
<html>
    <body>
      <?php
        //Radio Button
        echo"<b>Seu sistema operacional é: </b>" . $_POST["sistema"] . "<br><br>";

        //Checkbox
        if (isset($_POST["numeros"]))
         {
            echo "<b>Os numeros de sua preferencia são:</b><BR>"

            //Faz loop pelo array dos numeros
            foreach ($_POST["numeros"] as $numero)
            {
                echo "- " . $numero . "<BR><br>";
            }
        }
        else
        {
            echo "<b>Voce não escolheu numero preferido !</b><br><br>";
        }

        //
        echo "<b>Seu processador é: </b>" . $_POST["processador"] . "<br>";
      ?>
    </body>
</html>