## Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función
~~~
mysqli_connect($hostname, $username, $password);
mysql_connect($hostname, $username, $password);
~~~
___
## Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:
- $hostname: Nombre del servidor
- $username: Usuario de base de datos (root por defecto)
- $password: Contraseña de base de datos
___
## Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función
~~~
mysqli_select_db($conn, $nombreDB); 
mysql_select_db($conn, $nombreDB);
~~~
___
## Esta función debe pasar como parámetro
- $conn: Nombre de la conexión que retorna la función mysqli_connect();
- $nombreDB: Nombre de la base de datos
___
## La función mysqli_query () se utiliza para
### Realizar consultas a la base de datos
___
## y requiere como parámetros
- $conn: Nombre de la conexión que retorna la función mysqli_connect();
- $query: String que refiere a una consulta SQL
___
## La cláusula or die() se utiliza para
### Capturar un error
___
### y la función mysqli_error () se puede usar para
## Devuelve el último mensaje de error para la llamada más reciente a una función de MySQLi que puede haberse ejecutado correctamente o haber fallado.
___
## Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo $vResult, y a continuación se puede ejecutar el siguiente código (explicarlo):
~~~
<?php
while ($fila = mysqli_fetch_array($vResultado)){ // Recorre cada fila del resultado de la consulta
?>
<tr>
 <td><?php echo ($fila[0]); ?></td> // Muestra la posición 0 del arreglo $fila
 <td><?php echo ($fila[1]); ?></td> // Muestra la posición 1 del arreglo $fila
 <td><?php echo ($fila[2]); ?></td> // Muestra la posición 2 del arreglo $fila
</tr>
<?php
}
mysqli_free_result($vResultado); // Limpia los resultados de la consulta
mysqli_close($link); // Cierra la conexión
?>
~~~