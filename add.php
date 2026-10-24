<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add User - Fullstack Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Add User</h1>
            <form action="action.php" method="POST">
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required placeholder="Enter full name">
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="Enter email address">
                </div>

                <div class="input-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" required placeholder="Enter phone number">
                </div>

                <div class="input-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" required placeholder="Enter residential address">
                </div>
                <div style="text-align: center;">
                    <button type="submit" name="add"
                        style="background-color: orange; color: white; padding: 10px 25px; border: none; border-radius: 6px; cursor: pointer; font-size: 16px;">
                        Submit User
                    </button>
                </div>
            </form>
            <br>
            <a href="index.php" class="back-link">&larr; Back to User List</a>
        </div>
    </div>
</body>

</html>