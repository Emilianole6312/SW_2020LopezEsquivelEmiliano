<?php
		if (isset($_POST['texto']) && isset($_POST['key']))
		{
				$key = $_POST['key'];
				$texto = $_POST['texto'];
				$keys = explode(".",$key);
				$text = explode(".",$texto);
				$key1 = $keys[0];
				$key2 = $keys[1];
				$key3 = $keys[2];
				$resultado = array_pop($text);
				$original = '';
				$maybe_resultado = 0;
				foreach ($text as $key => $value) {
						$letra = $value/($key1*$key2);
						$maybe_resultado += $letra;
						$key2 = $value . ".";
						$key2 = $key2[0];
						$original .= chr($letra);
				}
        echo "<link rel='stylesheet' href='../Statics/css/cifrar.css'>
              <div class='fieldset'>
                <fieldset>
                  <legend><h1>Descifrador</h1></legend>";
				if($resultado * $key3 == $maybe_resultado)
					echo    "Parece que estamos seguro y no hay ningún chismoso cerca. El mensaje es: " . base64_decode($original) . "<br> Lee bien el mensaje y no se lo digas a nadie porque es un secreto. :)";
				else
					echo    "Heeeeey ya te vi chismoso, este es un mensaje cifrado y si no tienes la llave correcta para este mensaje no te lo descifrare, ahora vete de aquí.";
        echo    "</fieldset>
              </div>";
		}
		else
				header('location: ../Templates/Inicio.php');
?>