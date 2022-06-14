<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <h1>Doctor registration form</h1>
    <h2>Edit Section</h2>

    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'doctor');
    $id = $_GET['id'];
    $query = "SELECT * FROM doctor_info WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $row) {
    ?>


            <form action="code.php" method="POSt" enctype="multipart/form-data">
                <input type="hidden" name="doc_id" value="<?php echo $row['id'] ?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" value="<?php echo $row['name'] ?>" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                    <input type="number" value="<?php echo $row['ph_num'] ?>" name="phonenumber" class="form-control" id="phonenumber">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" value="<?php echo $row['email'] ?>" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">

                </div>

                
                <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
             
            </form>

    <?php


        }
    } 
    else {
        echo "No record";
    }

    ?>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>



</body>

</html>