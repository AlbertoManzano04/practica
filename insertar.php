<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);

    // Comprobar si los valores son válidos
    if (!empty($name) && !empty($age)) {
        // Crear o abrir un archivo para guardar los datos
        $file = 'datos.txt';
        $data = "Nombre: $name, Edad: $age\n";

        // Guardar los datos en el archivo
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

        // Redirigir o mostrar un mensaje de éxito
        echo "Datos guardados correctamente.";
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
