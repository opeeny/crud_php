<?php 
    include "connect.php";
    if(isset($_POST['submit'])){
        $surname = $_POST["surname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $telephone = $_POST["telephone"];
        $password = $_POST["password"];
        $sql = "insert into users (surname, lastname, email, telephone, password) values('$surname', '$lastname', '$email', '$telephone', '$password')";
        $query = mysqli_query($con, $sql);
        if ($query){
            //echo "insertion a success";
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }

    }else {
        //echo "<br/>form not submitted";
    }
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0, shrink-to-fit=no"> 
        <title>CRUD operation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container my-5">
            <h1>UT</h1>
            <form method = "POST">
                <div class="mb-3">
                <label for="InputSurname" class="form-label">Surname</label>
                <input type="text" class="form-control" name = "surname" id="InputSurname">
                </div>
                <div class="mb-3">
                <label for="InputLastname" class="form-label">Last name</label>
                <input type="text" class="form-control" name = "lastname" id="InputLastname">
                </div>
                <div class="mb-3">
                <label for="InputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="InputEmail1" name = "email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                <label for="InputPhone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="InputPhone" name = "telephone" aria-describedby="phoneHelp">
                </div>
                <div class="mb-3">
                <label for="InputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="InputPassword1" name = "password">
                </div>
                <button type="submit"  class="btn btn-primary" name = "submit">Submit</button>
            </form>
            
        </div>
    </body>
</html>