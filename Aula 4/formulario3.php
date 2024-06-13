<!DOCTYPE html>
<html>
    <body>
        <form id="Formcadastro" name="formcadastro" method="POST" action="recebeForm.php">

        <!--Radio Button-->
        <b>Qual seu sistema operacional?</b><br>
        <input type= radio name= sistema value = "Windows 8.1"> win 98 <br>
        <input type= radio name= sistema value = "Windows 10"> win xp <br>
        <input type= radio name= sistema value = "Linux"> Linux <br>
        <input type= radio name= sistema value = "Mac"> Mac <br>

         <!--Checkbox-->
        <b>Escolha os numeros de sua preferencia :</b><br>
        <input type= Checkbox name= "numeros[]" value = 10 > 10 <br>
        <input type= Checkbox name= "numeros[]" value = 100 > 100 <br>
        <input type= Checkbox name= "numeros[]" value = 1000 > 1000 <br><br>
        

         <!--Dopdown list-->
        <b>Qual seu processador?</b><br>
        <select name= processador > 
        <option value= Pentium>Pentium</option>
        <option value= AMD>AMD</option>
        <option value= Celeron>Celeron</option>
        </select>

        <input id="botaoEnviar" type="submit" value="Enviar">
        </form>
    </body>
</html>