<?php

// MySQLi or PDO
// connect to database

// $conn =  mysqli_connect('localhost', 'fabi', 'test1234', 'bresil_pizza');

$conn =  mysqli_connect('localhost:3333', 'faria', 'test1234', 'bresil_pizza');

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

// write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

// make query and get result
$result = mysqli_query($conn, $sql);

// fetch the resuklting rowa as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

// close the connection
mysqli_close($conn);

//print_r($pizzas);

?>
<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<h4 class="center grey-text">Pizzas!</h4>

<div class="container">
    <div class="row">

        <?php foreach ($pizzas as $pizza) { ?>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']) ?></h6>
                        <div><?php echo htmlspecialchars($pizza['ingredients']) ?></div>
                    </div>
                    <div class="card-action right-align">
                        <a href="#" class="brand-text">more info</a>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>

<?php include('templates/footer.php'); ?>



</html>