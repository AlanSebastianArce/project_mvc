<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<title>Listado de Productos</title>
</head>
<body>



<table class='table table-bordered table-striped'> <thead class='thead-dark'>

<thead>
<tr>
    <th> Codigo </th>
    <th> Producto </th>
    <th> Precio </th>
    <th> Fecha </th>
    <th> Id Categoria </th>
</tr>
</thead> <tbody>

<!--
echo "";
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>";
echo "Codigo";
echo "</th>";
echo "<th>";
echo "Descripcion";
echo "</th>";
echo "<th>";
echo "precio";
echo "</th>";
echo "<th>";
echo "Fecha";
echo "</th>";
echo "<th>";
echo "id_categoria";
echo "</th>";
echo "</thead>";
echo "<tbody>";-->
</thead>
<tbody>
<?php
foreach ($data as $dato) {
echo "<tr>";
echo "<td>";
echo $dato["id_product"] . "<br/>";
echo "</td>";
echo "<td>";
echo $dato["product_name"] . "<br/>";
echo "</td>";
echo "<td>";
echo $dato["price"] . "<br/>";
echo "</td>";
echo "<td>";
echo $dato["start_date"] . "<br/>";
echo "</td>";
echo "<td>";
echo $dato["id_category"] . "<br/>";
echo "</td>";
echo "</tr>";
}
?>
</tbody>"
</table>"

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>