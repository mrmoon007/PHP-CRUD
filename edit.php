<?php
    $sn= $_GET['sn'];
    $con = mysqli_connect("localhost","root","","crud");
    $sql = "SELECT * FROM employee where sn=$sn";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST['name'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $con = mysqli_connect("localhost","root","","crud");
        $sql = "UPDATE employee SET  name='$name', email='$email', phone='$phone',address='$address' WHERE sn=$sn";
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
            <div class="col-3 pt-5 pl-3">
                <a class="btn btn-primary" href="index.php">Back</a>
            </div>
            <div class="col-8 pt-4">
                <h1> Employee List </h1>
                <form action="" method="post">
                    <table class="table ">
                        <tr>
                            <th class="text-right">Serial No :</th>
                            <td >
                                <input type="text" name="sn" value="<?php echo $row['sn']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="text-right">Name :</th>
                            <td >
                                <input type="text" name="name" value="<?php echo $row['name']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="text-right">Email :</th>
                            <td >
                                <input type="email" name="email" value="<?php echo $row['email']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="text-right"> Phone :</th>
                            <td >
                                <input type="text" name="phone" value="<?php echo $row['phone']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="text-right">Address :</th>
                            <td >
                                <input type="text" name="address" value="<?php echo $row['address']; ?>">
                            </td>
                        </tr>
                        <tr>
                           <td>
                                <input type="submit" class="btn btn-primary" value="Update info" >
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

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>