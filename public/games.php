<?php
$customer_games = games::get($_GET['id']);
$customer = customers::get($_GET['id']);
$games = games::getAll();

if ($_POST) {
    games::add($_GET['id'], $_POST['game']);
    header('location: games/?id=' . $_GET['id']);
}

if (isset($_GET['delete'])) {
    games::delete('id', $_GET['delete']);
    header('location: games/?id=' . $_GET['id']);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratjetoe - Customers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="customer">Ratjetoe</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="customer">Customers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addCustomer">Add Customers</a>
            </li>
        </ul>
        <div class="my-2 my-lg-0">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
        </div>
    </div>
</nav>

<div class="mt-4" style="padding: 20px">
    <span class="d-flex justify-content-between align-items-center">
        <h1>Games of: <?php echo ucfirst($customer['firstname']) . " " . $customer['lastname'] ?> </h1>
    </span>
    <form method="post">
        <div class="form-group">
            <select class="form-control" name="game" required>
                <?php

                foreach ($games as $game) {

                    echo "<option value='" . $game['id'] . "'>" . $game['name'] . " (" . $game['platform'] . ")</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add game</button>
    </form>
    <div class="table-responsive mt-4">
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">platform</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($customer_games as $customer_game) {
                echo "
                <tr>
                    <td>" . $customer_game['name'] . "</td>
                    <td>" . $customer_game['platform'] . "</td>
                    <td><a class='btn btn-danger' onclick='return confirm(\"Are you sure?\")' href='?delete=" . $customer_game['id'] . "&id=" . $_GET['id'] . "'>X</a></td>
                </tr>
                ";
            }


            ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Add Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>
</html>
