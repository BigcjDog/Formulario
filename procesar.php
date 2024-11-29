<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener datos del formulario
    $nombre = $_POST["nombre"] ?? null;
    $apellido = $_POST["apellido"] ?? null;
    $correo = $_POST["correo"] ?? null;
    $curso = $_POST["cursos"] ?? null;
    $genero = $_POST["generos"] ?? null;
    $areas = $_POST["areas"] ?? []; 

    
    if (empty($nombre) || empty($apellido) || empty($correo) || empty($curso) || empty($genero)) {
        echo "Por favor, completa todos los campos obligatorios.";
        exit;
    }

    // Almacenar los datos en un array asociativo
    $datos_usuario = [
        "Nombre" => $nombre,
        "Apellido" => $apellido,
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


