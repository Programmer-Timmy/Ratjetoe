<?php
$customers = customers::getAll();

if (isset($_GET['delete'])) {
    customers::delete($_GET['delete']);
    header('location: customer');
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
            <li class="nav-item active">
                <a class="nav-link" href="customer">Customers<span class="sr-only">(current)</span></a>
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
        <h1>Customers</h1>
        <a href="addCustomer" class="btn btn-primary">+ Toevoegen</a>
    </span>
    <div class="table-responsive mt-4">
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Premium</th>
                <th scope="col">Country</th>
                <th scope="col">number of games</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($customers as $customer) {
                echo "
                <tr>
                    <td>" . $customer['firstname'] . "</td>
                    <td>" . $customer['lastname'] . "</td>
                    <td>" . $customer['email'] . "</td>
                    <td>" . ($customer['premium_member'] ? 'Yes' : 'No') . "</td>
                    <td>" . $customer['country'] . "</td>
                    <td>" . $customer['games'] . "</td>
                    <td>
                        <div class='dropdown'>
                            <button class='btn btn-info dropdown-toggle' type='button' data-toggle='dropdown' aria-expanded='false'>
                                Actions
                            </button>
                            <div class='dropdown-menu'>
                                <a class='dropdown-item' href='games/?id=" . $customer['id'] . "'>Show games</a>
                                <a class='dropdown-item' href='?delete=" . $customer['id'] . "'>Delete</a>
                                <a class='dropdown-item' onclick='return confirm(\"Are you sure?\")' href='editCustomer/?id=" . $customer['id'] . "'>Edit</a>
                                <a class='dropdown-item' href='sendEmail/?id=" . $customer['id'] . "'>Send email</a>
                                
                            </div>
                        </div>
                    </td>
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
