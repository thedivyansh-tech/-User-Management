
<?php
include "config.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

$user = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User - Fullstack Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Edit User</h1>

            <form action="action.php\<?= $id ?>" method="POST">

                <input type="hidden" name="id"
                       value="<?php echo $user['id']; ?>">

                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name"
                           required placeholder="Enter full name"
                           value="<?php echo $user['name']; ?>">
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email"
                           required placeholder="Enter email address"
                           value="<?php echo $user['email']; ?>">
                </div>

                <div class="input-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone"
                           required placeholder="Enter phone number"
                           value="<?php echo $user['phone']; ?>">
                </div>

                <div class="input-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address"
                           required placeholder="Enter residential address"
                           value="<?php echo $user['address']; ?>">
                </div>

                <button type="submit" name="update"
                        class="btn">
                    Update User
                </button>

            </form>

            <br>

            <a href="index.php" class="back-link">
                &larr; Back to User List
            </a>
        </div>
    </div>
</body>
</html>
