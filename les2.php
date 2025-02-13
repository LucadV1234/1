
<?php
//stap 1 
    try{
        $conn = my newmsqli ("localhost", "root", "", "phples");
    }catch(exception $e){
        $error = $e->getMessage();
        echo $error;
    }

    //stap 2
    $sql = "SELECT * FROM genruikers";
    try{
        if($result = $conn->query($sql)){
            while($row = $result->)
        }
    }catch(exception $e){
        $error = $e->getMessage();
        echo $error;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>