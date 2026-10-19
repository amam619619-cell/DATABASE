<?php
include "process.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDIVIDUAL DATA</title>
</head>
<body>
    <?php foreach($my_single_data as $data){ ?>
    <h2>My first name is <?php echo $data['first_name'] ?></h2>
    <h2>my second name is <?php echo $data['last_name'] ?></h2>
    <h2>my age is <?php echo $data['age'] ?></h2>
    <?php
    } ?>
    <a href="form.php"><button>Go back</button></a>
</body>
</html>