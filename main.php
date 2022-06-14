<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor registration</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <h1>Doctor registration form</h1>
  <?php
  if(isset($_SESSION['status']) && $_SESSION!=""){

    ?>

 
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
   <?php echo $_SESSION['status'];?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>




  <?php
    unset($_SESSION['status']);
  }
  
  ?>
  
  <form action="code.php" method="post" name="form"  enctype="multipart/form-data">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Phone Number</label>
      <input type="number" name="phonenumber" class="form-control" id="phonenumber">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="text" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">

    </div>

    <div class="mb-3">
      <label for="formFile" class="form-label">Choose image</label>
      <input class="form-control" name="image" type="file" id="formFile">
    </div>
    <button type="submit" name="btn" class="btn btn-primary" onclick="validate()">Submit</button>
    <a href="display.php" class="btn btn-info" >check</a>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
    crossorigin="anonymous"></script>



  <script>
    function validate() {
      var number = document.getElementById("phonenumber").value;
      var email = document.getElementById("InputEmail")

      if (number.length > 10) {
        alert("Invalid number")
      }
      if(document.getElementById('name').value='' || document.getElementById('name').value.length < 5){
        alert('Invalid name ')

      }
      if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form.email.value)) {
        
      }
      else{

        alert("You have entered an invalid email address!")
        return (false)
      }
    }
  </script>

</body>

</html>