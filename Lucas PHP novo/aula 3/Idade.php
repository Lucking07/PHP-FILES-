<DOCTYPE html>
    <html>
        <body>
           <?php
            $idade = 17;

            if ($idade < 18) {
                echo 'voce não pode entrar aqui!';
            }else {
                echo 'Seja bem vindo';
            }
           ?>
           <?php
            $idade = 21;
            $identidade = true;

            if($idade > 18 && $identidade == true) {
                echo 'seja bem vindo';
            }
           ?>
        </body>
    <html>