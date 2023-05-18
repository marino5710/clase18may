<?php 
    // require  './modelos/Conexion.php'; 
    // $resultado = Conexion::ejecutar("INSERT INTO productos(producto_nombre, producto_precio)values('prueba', '5')"); 
    // var_dump($resultado);

    require  './modelos/Conexion.php'; 
    $resultado = Conexion::servir("SELECT * FROM productos"); 
    var_dump($resultado);
    echo "</pre>"; 