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
    <form action="process.php" method="POST">
        <label for="firstname">First Name</label>
        <input type="text" name="first_name" id="first_name"><br>
        <label for="lastname">Last name</label>
        <input type="text" name="last_name" id="last_name"><br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age"><br>

        <input type="submit" name="submit" id="submit">

    </form>

    <hr>
    <h2>List of registered students</h2>
    <table border="2">
        <thead>
            <th>SN</th>
            <th>First name</th>
            <th>Second name</th>
            <th>Age</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php
            $sn = 1;
            foreach($students as $student) { ?>
                <tr>
                    <td><?php echo $sn++; ?></td>
                    <td><?php echo $student['first_name']; ?></td>
                    <td><?php echo $student['last_name']; ?></td>
                    <td><?php echo $student['age']; ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $student['id']; ?>"><button>View</button></a>
                        <a href="edit.php?id=<?php echo $student['id']; ?>"><button>Edit</button></a>
                        <a href="delete.php?id=<?php echo $student['id']; ?>"><button>Delete</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>