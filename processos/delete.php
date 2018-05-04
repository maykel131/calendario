<?php 
     require('../clases/conectar.php');
     
     $id=$_GET['id'];
     

     $obj=new conectar();

     $sql="DELETE FROM data WHERE id ='$id'";

     $result= $obj->sentencia($sql);


     echo "<script type='text/javascript'> window.location.href='../index.php'; </script>";
     

 ?>