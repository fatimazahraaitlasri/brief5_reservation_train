<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/staylelogin.css">
    <link rel="stylesheet" href="css/components/Navigation.css">


    

    <title>Document</title>
    
</head>

<body>
<?php component("Navigation");?>


    <h1>this is register page</h1> 
    

  
  <form class="row g-3" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">name</label>
    <input type="text" name="nom" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">user name</label>
    <input type="text" name="username" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">email</label>
    <input type="email" name="email" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">password</label>
    <input type="password" name="password" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">phone</label>
    <input type="text" name="tel" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">role</label>
    <select id="inputState" name="role" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>

</body>

</html>