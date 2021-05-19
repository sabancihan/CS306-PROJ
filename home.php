<?php
    session_start();

    if(isset($_SESSION["id"]) && isset($_SESSION["role"])) 
        {
            
        $id = $_SESSION["id"];
        $role = $_SESSION["role"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Homepage</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center"
         style="min-height:100vh">
         
        <h1>
        Hello <?=$role.$id?>
        </h1>
     

    </div>
    
</body>
</html>


<?php }
else {
    header("Location:index.php?error=You dont have permission");
}?>
