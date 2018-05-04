<?php 
     require('../clases/conectar.php');
     
     $id=$_POST['id'];
     $tarefa=$_POST['tarefa'];
     $data=$_POST['date'];


     echo " $id   $tarefa   $data";
    
   

     $obj=new conectar();

     $sql="UPDATE data  SET tarefa='$tarefa',  data='$data' WHERE id ='$id' ";


     $result= $obj->sentencia($sql);


     echo "<script type='text/javascript'> window.location.href='../index.php'; </script>";
     
 ?>