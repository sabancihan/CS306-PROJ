<!DOCTYPE html>
<html lang="en">
<head>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center"
         style="min-height:100vh">
        
        <form class="border shadow p-3 rounded" 
              style="width:450px"
              action="php/check-login.php"
              method="post">

          <h1 class="text-center p-3">LOGIN</h1>

          <?php if(isset($_GET["error"])) { ?>

           <div class="alert alert-danger" role="alert">

           <?=$_GET["error"]?>
           
           </div>

          <?php } ?>


 
            <div class="mb-3">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="mb-3">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="mb-1">
              <label class="form-label">Select User Type:</label>
            </div>
       

            <select class="form-select mb-3" 
              name ="role"
              aria-label="Default select example">
              <option selected value="patient">Patient</option>
              <option value="pharmacy">Pharmacy</option>
            </select>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    
</body>
</html>