<?php
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $email=$_POST['email1'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $con = mysqli_connect("localhost","root","","crud");
    $sql = "INSERT INTO employee ( name, email, phone , address) VALUES ('$name', '$email', '$phone' , '$address')";
    $result = mysqli_query($con, $sql);

    header('location: index.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        
        <div class="row">
            <div class="col-3 pt-5 pl-4">
                <a class="btn btn-primary" href="index.php">Back</a>
            </div>
            <div class="col-8 pt-4">
                <h1> Employee Register Form </h1>
                <form action="" method="post">
                    <table class="table ">
                        <tr>
                            <th class="text-right">Name :</th>
                            <td >
                                <input type="text" name="name">
                            </td>
                        </tr>
                        <tr>
                            <th class="text-right">Email :</th>
                            <td >
                                <input type="email" name="email1">
                            </td>
                        </tr>
                        <tr>
                            <th class="text-right"> Phone :</th>
                            <td >
                                <input type="text" name="phone">
                            </td>
                        </tr>
                        <tr>
                            <th class="text-right">Address :</th>
                            <td >
                                <input type="text" name="address">
                            </td>
                        </tr>
                        <tr>
                           <td>
                                <input type="submit" class="btn btn-primary" value="Submit" >
                           </td>
                        </tr>
                    </table>

                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    -->
  </body>
</html>