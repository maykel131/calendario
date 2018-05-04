<?php 
     require('../clases/conectar.php');
     
     $tarefa=$_POST['tarefa'];
     $data=$_POST['date'];
    
    

     $obj=new conectar();

     $sql="INSERT INTO data(tarefa,data) values ('$tarefa','$data')";

     $result= $obj->sentencia($sql);


     echo "<script type='text/javascript'> window.location.href='../index.php'; </script>";
     

 ?>