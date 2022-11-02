
    
    
<?php 
$data_source_name='mysql:host=localhost;dbname=gggg';
$user='root';
$pass='';
$option=array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try{
    $conn=new PDO($data_source_name,$user,$pass,$option);//start connection with PDO class
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,//error reporting
        PDO::ERRMODE_EXCEPTION//systeme expetion try and catch
    );
    echo "succecc connect database";
}catch(PDOException  $e){
    echo "Failed to connect" .$e->getMessage();
}

?>
    