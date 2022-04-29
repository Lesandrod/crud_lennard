<?php
include_once 'db.php';
if(isset($_POST['save']))
{
    $titu = $MySQLiconn->real_escape_string($_POST['titu']);
    $autor = $MySQLiconn->real_escape_string($_POST['autor']);
    $ano = $MySQLiconn->real_escape_string($_POST['ano']);
    $urle = $MySQLiconn->real_escape_string($_POST['urle']);
    $espe = $MySQLiconn->real_escape_string($_POST['espe']);
    $edito = $MySQLiconn->real_escape_string($_POST['edito']);
    $SQL = $MySQLiconn->query("INSERT INTO libros(titu,autor,ano,urle,espe,edito) VALUES ('$titu', '$autor', '$ano', '$urle', '$espe', '$edito' )");
    if(!$SQL)
    {
        echo $MySQLiconn->error;
    }
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->query("DELETE FROM libros WHERE id=".$_GET['del']);
    header("Location: listado.php");
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM libros WHERE id
        =".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->query("UPDATE libros SET titu='".$_POST['titu']."', autor='".$_POST['autor']."',ano='".$_POST['ano']."', urle='".$_POST['urle']."',espe='".$_POST['espe']."',edito='".$_POST['edito']."' WHERE id=".$_GET['edit']);
    header("Location: listado.php");
}
?>