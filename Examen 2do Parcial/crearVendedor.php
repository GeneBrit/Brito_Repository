<?php 
require "connection/connect.php";

var_dump($_POST);

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];


$query = "insert into vendedores(name, email, phone) values('$name', '$email', '$phone')";
$response = mysqli_query($conn, $query);

if ($response) {
    echo "select creado";
} else {
    echo "no creado";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sellers Form</title>
</head>
<body>
<section>
    <h2>Sellers Form</h2>
    <div>
        <form action="createSellers.php" method="POST">
            <fieldset>
                <legend>Fill all fields to create a new seller</legend>
                <div>
                    <label for="id">ID</label>
                    <input type="number" id="id" name="id">
                </div>
                <div>
                     <label for="name">NAME</label>
                    <input type="text" id="name" name="name" placeholder="Put your name">
                </div>

                <div>
                     <label for="email">EMAL</label>
                     <input type="text" id="email" name="email" placeholder="Your email@gmail.com">
                </div>
                <div>
                     <label for="phone">PHONE</label>
                     <input type="text" id="phone" name="phone" placeholder="664 715 6350">
                </div>
                <div>
                    <button type="submit">Create a new seller</button>
                </div>
            </fieldset>
        </form>
    </div>


</section
</body>
</html>