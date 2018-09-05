<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User View</title>
</head>

<body>
    <?php
        foreach($result as $object){
            echo 'Id '.$object->id;
            echo 'Username '.$object->email;
            echo 'Password '.$object->password;
            echo '<br/>';
        }
//        echo $result;
            
    ?>
</body>

</html>
