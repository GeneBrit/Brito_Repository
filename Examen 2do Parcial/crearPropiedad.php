<?php
    include "Examen 2do parcial header/header.php";
    require "Examen 2 parcial/connection/connect.php";
    $db = $conn;
    
var_dump($_POST);

$id = $_POST["id"];
$title = $_POST["title"];
$price = $_POST["price"];
$description = $_POST["description"];
$timesnap = $_POST["timesnap"];
$id_vendedor = $_POST["id_vendedor"];

$query = "insert into propierties(title, price, image, description, timesnap, id_vendedor)
values('$title', '$price', '$image', '$description', '$timesnap', '$id_sellers');";
$response = mysqli_query($conn, $query);

?>

<section>
    <h2>Properties form</h2>
    <div>
        <form action="createProperties.php" method="post">
            <fieldset>
                <legend>Fill all form fields to create a propertie</legend>
                <div>
                    <label for="id">ID</label>
                    <input type="number" id="id" name="id">
                </div>

                <div>
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="title of propertie">
                </div>

                <div>
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" placeholder="$999,999,9999">
                </div>

                <div>
                    <label for="rooms">rooms</label>
                    <input type="number" id="rooms" name="rooms">
                </div>

                <div>
                    <label for="description">Description</label>
                    <textarea name="description" id="description"></textarea>
                </div>
                    <label for="timesnap">Timesnap</label>
                    <input type="date" name="timesnap" id="timesnap">
                <div>

                </div>
                    <label for="seller">Seller</label>
                    <input type="number" id="seller" name="seller">
                <div>
                    <button type="submit">Create a new propertie</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>