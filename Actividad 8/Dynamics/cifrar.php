<?php
    if (isset($_POST['texto']))
    {
        $texto = $_POST['texto'];
        $texto = str_replace('ñ','N',$texto);
        $texto = strtoupper($texto);
        $texto = str_replace('Ñ','N',$texto);
        $texto = str_replace('Á','A',$texto);
        $texto = str_replace('É','E',$texto);
        $texto = str_replace('Í','I',$texto);
        $texto = str_replace('Ó','O',$texto);
        $texto = str_replace('Ú','U',$texto);
        $texto = str_replace('Ü','U',$texto);
        $Caesar = '';
        $Cesar = 5;
        $caracters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ.,? ';
        for($a = 0 ; $a < strlen($texto); $a++)
        {
            $letra = substr($texto,$a,1);
            $posicion = strpos($caracters,$letra) + $Cesar;
            $posicion = ($posicion >= strlen($caracters)) ? $posicion - strlen($caracters) : $posicion;
            $Caesar .= $caracters[$posicion];
            echo $posicion . "<BR>";
        }
        echo $Caesar;
    }
    else
        header('location: ../Templates/Inicio.html');
?>