<?php
    if (isset($_POST['nombre']) && isset($_POST['paterno']) && isset($_POST['materno']) && isset($_POST['nacimiento']) && isset($_POST['colegio']) && isset($_POST['RFC']) && isset($_POST['password']))
    {
        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];
        $materno = $_POST['materno'];
        $RFC = $_POST['RFC'];
        $password = $_POST['password'];
        if (!preg_match('/^[A-ZÁÉÍÓÚÜÑ][a-záéíóüúñ]+($|\s?[A-ZÁÉÍÓÚÜÑ]+[a-záéíóüúñ]+$)/',$nombre)) 
            echo "El nombre " . $nombre . " es invalido, por favor corrigelo.<br>";
        if (!preg_match('/^([A-ZÁÉÍÓÚÜÑ][a-záéíóüúñ]+|[a-záéíóüúñ]+\s[a-záéíóüúñ]+\s[A-ZÁÉÍÓÚÜÑ][a-záéíóüúñ]+|[a-záéíóüúñ]+\s[A-ZÁÉÍÓÚÜÑ][a-záéíóüúñ]+)$/',$paterno)) 
            echo "El apellido paterno " . $paterno . " es invalido, por favor corrigelo.<br>";
        if (!preg_match('/^([A-ZÁÉÍÓÚÜÑ][a-záéíóüúñ]+|[a-záéíóüúñ]+\s[a-záéíóüúñ]+\s[A-ZÁÉÍÓÚÜÑ][a-záéíóüúñ]+|[a-záéíóüúñ]+\s[A-ZÁÉÍÓÚÜÑ][a-záéíóüúñ]+)$/',$materno)) 
            echo "El apellido materno " . $materno . " es invalido, por favor corrigelo.<br>";
        if (!preg_match('/^[A-ZÑ&]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[A-Z0-9_]{3}$/',$RFC))
            echo "El RFC " . $RFC . " es invalido, por favor corrigelo. <br>";
        if (!preg_match('//',$password))
            echo "Su contraseña: " . $password . " es insegura";
    }
    else
        header ('location: ../Templates/Registro.html')
?>