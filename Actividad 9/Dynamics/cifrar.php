<?php
    if (isset($_POST['texto'])) {
        $texto = $_POST['texto'];
        $key1 = rand(1,9);
        $texto = base64_encode($texto);
        $key2 = rand(1,9);
        $result = 0;
        $codificado = '';
        $key = $key1 . "." . $key2;
        for ($a = 0; $a < strlen($texto); $a++ )
        {
            $IDK = substr($texto,$a,1);
            $bin = ord($IDK);
            $result += $bin;
            $IDK = $bin * $key1 * $key2;
            $codificado .= $IDK . ".";
            $IDK .= ".";
            $key2 = $IDK[0];
        }
        $key3 = 1;
        do {
            $key3 += 1;
            $prueba = $result / $key3;
        }
        while (!is_int($prueba));
        $codificado .= $prueba;
        $key .= "." . $key3;
        echo "
            <link rel='stylesheet' href='../Statics/css/cifrar.css'>
            <div class='fieldset'>
              <fieldset>
                      <legend> <h1> Mensaje cifrado correctamente </h1> </legend>
                      Tu mensaje es este: " . $codificado . 
                      "<br>
                      Tu llave es esta: " . $key .
              "</fieldset>
            </div>";
    }
    else
      header('location: ../Templates/inicio.html');
?>