
<?php
$file=file_get_contents("todo.json");
$todo=json_decode($file,true)??[];

if(isset($_POST['validate']) && !empty($_POST['input'])){
    $newInput=$_POST['input'];
    $todo[$newInput]=array('stat'=>false);
    file_put_contents("todo.json",json_encode($todo,JSON_PRETTY_PRINT));
    
    header("Location:index.php");

    return;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  isset($_POST['done'])) {
    

    foreach($todo as $key => &$value){
        
        if($key===$_POST['done'] ){
            
            $value['stat']=!$value['stat'];
        }
    }
    
    
    file_put_contents("todo.json",json_encode($todo,JSON_PRETTY_PRINT));
    
    header("Location:index.php");
    
    return;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  isset($_POST['del'])) {
    

    foreach($todo as $key=>$value){
        
        if($key===$_POST['del'] ){
            unset($todo[$key]);
        }
    }
    
    
    file_put_contents("todo.json",json_encode($todo,JSON_PRETTY_PRINT));
    
    header("Location:index.php");
    
    return;
}
