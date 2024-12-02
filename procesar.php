<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener datos del formulario
    $nombre = $_POST["nombre"] ?? null;
    $apellido = $_POST["apellido"] ?? null;
    $edad = $_POST["edad"] ?? null;
    $correo = $_POST["correo"] ?? null;
    $curso = $_POST["cursos"] ?? null;
    $genero = $_POST["generos"] ?? null;
    $areas = $_POST["areas"] ?? []; 

    
    $clasificacion = "";
    if ($edad >= 18) {
        $clasificacion = "Eres mayor de edad"; 
    } else {
        $clasificacion = "Eres menor de edad"; 
    }

    // Almacenar los datos en un array asociativo
    $datos_usuario = [
        "Nombre" => $nombre,
        "Apellido" => $apellido,
        "Edad" => $edad,
        "Clasificacion" => $clasificacion,
        "Correo" => $correo,
        "Curso" => $curso,
        "Género" => $genero,
        "Áreas de interés" => !empty($areas) ? implode(", ", $areas) : "Ninguna seleccionada"
    ];

    // Mostrar los datos en una lista
    echo "<h1>Datos Registrados</h1>";
    echo "<ul>";
    foreach ($datos_usuario as $clave => $valor) {
        echo "<li><strong>$clave:</strong> $valor</li>";
    }
    echo "</ul>";


    echo "<p>Registro almacenado exitosamente.</p>";
} else {
    echo "Método no permitido.";
}
?>



