<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style type="text/css">
    button:hover{
        background-color:#cc5e19;
        color: white;
      }
      .df:hover {
    color: white;
    font-size: 16px;
    background-color: #cc5e19 !important;
    background-image: linear-gradient(315deg, #d4df23 0%, #cc5e19 74%) !important;
    }
    </style>
</head>

<body>

<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4">View All Users</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">NAME</th>
                <th class="text-center">EMAIL</th>      
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from users";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['id']; ?></td>
            <td class="py-2"><?php echo $rows['name']; ?></td>
            <td class="py-2"><?php echo $rows['email']; ?></td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>