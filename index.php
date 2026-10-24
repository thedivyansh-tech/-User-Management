<?php

include "config.php";

$query = mysqli_query($conn, "SELECT * FROM users");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>DataDock | User Management</title>
    <link rel="stylesheet" href="style.css">
<link rel="icon" type="image/svg+xml" href="logo.svg">
</head>

<body>

    <div id="loader">
        <div class="spinner"></div>
    </div>

    <div class="container">

        <h1>User List</h1>
       <a href="add.php" style="margin-left: 250px;">Add User</a>
<a href="about.php" style="margin-left: 350px;">About Maker</a>

        <div class="table-responsive">
            <table>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>

                <?php
                $no = 1;
                while ($user = mysqli_fetch_assoc($query)) :
                ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($user['name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['phone']) ?></td>
                    <td><?= htmlspecialchars($user['address']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $user['id'] ?>">Edit</a>
                        |
                        <a href="action.php?delete=<?= $user['id'] ?>"
                           class="btn-delete"
                           onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                </tr>

                <?php endwhile; ?>
            </table>
        </div>

    </div>

    <footer class="footer">

        <div class="footer-grid">

            <div class="footer-box">
                <h3>About Project</h3>
                <p>
                    A fullstack User Management project where you can add,
                    view, edit and delete users.
                </p>
            </div>

            <div class="footer-box">
                <h3>Built With</h3>
                <ul>
                    <li>PHP</li>
                    <li>MySQL (PostgreSQL)</li>
                    <li>HTML5</li>
                    <li>CSS3 </li>
                    <li>JavaScript</li>
                </ul>
            </div>

            <div class="footer-box">
                <h3>Developer</h3>
                <p>Developed by <strong>Divyansh Singh</strong></p>
                <p>Email: divyanshsingh0634@gmail.com</p>
            </div>

        </div>

        <div class="footer-bottom">
            &copy; <?= date('Y') ?> Your Name. All rights reserved.
        </div>

    </footer>

    <script>
        setTimeout(function () {
            var loader = document.getElementById("loader");
            loader.classList.add("hide");

            setTimeout(function () {
                loader.remove();
            }, 400);
        }, 1000);
    </script>

</body>

</html>