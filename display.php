<?php 
    include "connect.php";
   //when selecting, you dont need posting again
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
            <button type="button"  class="btn btn-primary" name = "adduser"><a href="index.php" class = "text-light">Add user</a></button>
            <table class="table table-striped">
                <thead>
                <tr>
                <th scope="col">Sno</th>
                <th scope="col">Surname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Telephone</th>
                <th scope="col">Password</th>
                <th scope="col">Operation</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    $sql = "select * from users";
                    $query = mysqli_query($con, $sql);
                    if ($query){
                        // $row = mysqli_fetch_Assoc($query);
                        // echo $row['surname'];
                        
                        while($row = mysqli_fetch_Assoc($query)){
                            $id = $row["id"];
                            $surname = $row['surname'];
                            $lastname = $row['lastname'];
                            $email = $row['email'];
                            $telephone = $row['telephone'];
                            $password = $row['password'];
                            //echo $surname;
                            echo 
                            "<tr>
                                <td>$id</td>
                                <td>$surname</td>
                                <td>$lastname</td>
                                <td>$email</td>
                                <td>$telephone</td>
                                <td>$password</td>
                                <td><button type='button'  class='btn btn-success'><a href='update.php?update_id=$id' class = 'text-light'>Update</a></button>
                                <button type='button'  class='btn btn-danger'><a href='delete.php?delete_id=$id' class = 'text-light'>Delete</a></button></td>
                            <tr>";
                        }
                    }else{
                        die(mysqli_error($con));
                    }
                ?>
             
                </tbody>
            </table>
        </div>




    </body>
</html>