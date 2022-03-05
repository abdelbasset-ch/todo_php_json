<?php require_once 'todo_actions.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="input">
        <button type="submit" name="validate">Add note</button>
    </form>
    <?php if(isset($todo)):?>
        <?php foreach($todo as $key=>$value):?>
            <form method="post" id="checkboxes" style="display:inline-block;">
            <input type="hidden" name="done" value="<?=$key;?>">
            <input type="checkbox" <?php if($value['stat']){echo 'checked';}?>>
            <label for="vehicle1" ><?=$key;?></label><br>
            </form>
            <form method="post" style="display:inline-block;">
                <input type="hidden" name="del" value="<?=$key;?>">
                <button type="submit" >delete</button>
            </form><br>
        <?php endforeach?>
    <?php endif?>
    <script src="index.js"></script>
</body>
</html>