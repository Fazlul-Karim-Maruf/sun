<?php  
if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
}
?>

<html>
    <head?>
        <title> Form page </title>
</head>
<body>
    <form action = "" method ="post" enctype = "multipart/form-data"  >
        <input type = "file" name = "image"/><br><br>
<input type = "submit" name ="save"/>
</form>
</body>
</html>