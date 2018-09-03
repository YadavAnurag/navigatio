<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User View</title>
</head>

<body>
    <?php
        foreach($countries as $object){
			echo 'Id '.$object->id;
			echo 'name'.$object->code;
            echo 'Coutnry Name = '.$object->name;
            echo '<br/>';
        }
//        echo $result;
            
    ?>
</body>

</html>
