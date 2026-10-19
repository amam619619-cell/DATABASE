<?php
include "process.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h2>Simple form for data submission</h2>
     <?php foreach($edit_data as $data) { ?>
    <form action="process.phpup=<?php echo $data['id'];?>" method="POST">

        <label for="firstname">First Name</label>
        <input type="text" name="first_name" id="first_name" value="<?php echo $data['first_name'];?>"><br>

        <label for="lastname">Last name</label>
        <input type="text" name="last_name" id="last_name"><br>

        <label for="age">Age</label>
        <input type="number" name="age" id="age"><br>

        <input type="submit" name="update" value="update" id="submit">
        <!-- <input type="submit"> name="update" value="update" id="update"> -->

    </form>

    <?php } ?>
</body>
</html>