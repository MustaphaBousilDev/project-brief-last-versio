<?php 
session_start();
include 'database.php';
if(isset($_POST['delete'])){delete();}
if(isset($_POST['update'])){update();}
if(isset($_POST['save'])){add();}



function delete(){
    global  $conn;
    $id=$_POST['id'];
    $stmt=$conn->prepare("DELETE FROM tasks WHERE ID=:id");
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    echo "<script>location.href='index.php'</script>";
    echo "<script>location.reload()</script>";
}
function update(){
    global  $conn;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id=$_POST['id'];
        $title=$_POST['title'];
        $description=$_POST['description'];
        $date=$_POST['date'];
        $type=$_POST['task-type'];
        $status=$_POST['status'];
        $priority=$_POST['task-priority'];
        $Error_msg=array();
        if(empty($title)){$Error_msg[]='Title Cant Be Empty';}
        if(empty($description)){$Error_msg[]='Description Cant Be Empty';}
        if(empty($date)){$Error_msg[]='date Cant Be Empty';}
        if($priority==""){$Error_msg[]='Need Choose Preiority';}
        if($status==""){$Error_msg[]='Need Select Status';}
        foreach($Error_msg as $err){echo "<div class='alert alert-danger'>".$err."</div>";}
            $stmt_up=$conn->prepare('UPDATE tasks SET title=? , description=? , task_datetime=?, type_id=? , status_id=? ,priority_id=?  WHERE ID=?');
            $stmt_up->execute(array($title,$description,$date,$type,$status,$priority,$id));
            echo "<script>location.href='index.php'</script>";
            echo "<script>location.reload()</script>";		
    }
}
function add(){
    global  $conn;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $title=$_POST['title'];
        $description=$_POST['description'];
        $date=$_POST['date'];
        $type=intval($_POST['task-type']);
        $status=intval($_POST['status']);
        $priority=intval($_POST['task-priority']);
        //$Error_msg=array();
        
			if(empty($title)){
                $_SESSION["err-title"]='Title Cant Be Empty';
			}
			if(empty($description)){
				$_SESSION['err-desc']='Description Cant Be Empty';
			}
			if(empty($date)){
				$_SESSION['err-date']='date Cant Be Empty';
			}
        if(empty($_SESSION)){
            $stmt=$conn->prepare("INSERT INTO tasks (title,description,task_datetime,type_id,status_id,priority_id) VALUES (:title,:description,:date,:type_id,:status_id,:priority_id)");
            $stmt->execute(array(
                'title' => $title ,
                'description' => $description,
                'date'=>$date,
                'type_id'=>$type,
                'status_id'=>$status,
                'priority_id'=>$priority 
            ));
            $_SESSION['success']="SUCCESS ADDED TASK";
        }
        
        //$_SESSION['message']="Task has been added Succesfly";
        
        
    }else{
        echo "<div class='alert alert-danger'>Sorry We Can Insert this data in database</div>";
    }
    header('location:index.php');
}











?>