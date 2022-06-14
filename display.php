<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="text-white">Doctors Reports</h4>
                        </div>
                        <?php
                        $conn = mysqli_connect("localhost","root","","doctor");
                           $query = "SELECT * FROM doctor_info";
                           $query_run = mysqli_query($conn,$query);                          
                           ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone number</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Edit</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(mysqli_num_rows($query_run)>0){
                                    
                                     foreach($query_run as $row)
                                     {
                                        ?>
                                         <tr>
                                            <th><?php echo $row['id'] ?></th>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['ph_num'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td>
                                                <img src="<?php echo"image_uploaded/".$row['image']?>" alt="image">
                                            </td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-info">EDIT</a>
                                            </td>
                                            </tr>
                                            <?php
                                        }   
                             }
                            
                                else{
                                    ?>
                                        <tr>
                                            <td>No record</td>
                                        </tr>

                                    <?php        

                                }
                                
                                ?>

                                
                              
                            </tbody>
                        </table>

                   
                </div>
            </div>
        </div>
        <a href="main.php"class="btn btn-primary">Back</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>


</body>
</html>
                            