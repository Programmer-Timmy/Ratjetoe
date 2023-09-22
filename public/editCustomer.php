<?php
$countrys = country::getAll();
$customer = customers::get($_GET['id']);

if ($_POST) {
    $Premium_member = 0;
    if (isset($_POST['Premium_member'])) {
        $Premium_member = 1;
    }
    customers::edit($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['country'], $Premium_member);

    header("location: customer");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratjetoe - Edit Customers</title>
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
            <a href="logout" class="text-warning my-2 my-sm-0" type="submit">Logout</a>
        </div>
    </div>
</nav>

<div class="mt-4" style="padding: 20px">
    <span class="d-flex justify-content-between align-items-center">
        <h1>Edit Customer: <?php echo ucfirst($customer['firstname']) . " " . $customer['lastname'] ?></h1>
    </span>
    <div class="table-responsive mt-4">
        <form method="post">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="name" class="form-control" value="<?php echo $customer['firstname'] ?>" name="firstname"
                       required>
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="name" class="form-control" value="<?php echo $customer['lastname'] ?>" name="lastname"
                       required>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" aria-describedby="emailHelp"
                       value="<?php echo $customer['email'] ?>" name="email" required>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <select class="form-control" name="country" required>
                    <?php

                    foreach ($countrys as $country) {
                        $selected = "";
                        if ($country['id'] == $customer['country_id']) {
                            $selected = "selected";
                        }
                        echo "<option value='" . $country['id'] . "'" . $selected . ">" . $country['name'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1"
                       name="Premium_member" <?php if ($customer['premium_member'] == 1) {
                    echo 'checked';
                } ?>>
                <label class="form-check-label" for="exampleCheck1">Premium member</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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

