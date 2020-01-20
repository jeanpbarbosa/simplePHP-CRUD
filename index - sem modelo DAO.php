<?php
$bd = new PDO('mysql:host=localhost;dbname=phpweb', 'root', '');

$sql = 'INSERT INTO pessoa VALUES (?, ?, ?)';
$enviar = $bd->prepare($sql);
$enviar->bindValue(1, 13);
$enviar->bindValue(2, 'binho');
$enviar->bindValue(3, 31);
$enviar->execute();

$sql = 'SELECT * FROM pessoa';
$enviar = $bd->prepare($sql);
$enviar->execute();
if ($enviar->rowCount() >0) {
    $resultado = $enviar->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($resultado);
}

?>