# DataDock - User Management System

A fullstack **User Management** web application built with PHP and MySQL. Add, view, edit and delete users through a clean, responsive interface.

---

## Features

- View all users in a responsive table
- Add a new user
- Edit an existing user
- Delete a user with a confirmation prompt
- Animated page loader
- Responsive layout for desktop, tablet and mobile
- Custom SVG favicon
- About page and a grid-based footer
- Output escaping with `htmlspecialchars()` to prevent XSS

---

## Built With

| Technology | Purpose |
|---|---|
| PHP | Server-side logic |
| MySQL (MySQLi) | Database |
| HTML5 | Page structure |
| CSS3 (Grid and Flexbox) | Styling and responsive layout |
| JavaScript | Loader behaviour and delete confirmation |
| XAMPP | Local development server |

---

## Project Structure

```
myproject/
├── index.php        # User list page
├── add.php          # Add user form
├── edit.php         # Edit user form
├── about.php        # About the developer
├── action.php       # Handles add, update and delete requests
├── config.php       # Database connection
├── style.css        # All styles
├── favicon.svg      # Site icon
└── README.md
```

---

## Getting Started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) (or any stack with PHP 7.4+ and MySQL)

### Installation

1. **Clone or download** this repository into your server folder:

   ```bash
   cd C:/xampp/htdocs
   git clone https://github.com/your-username/myproject.git
   ```

2. **Start Apache and MySQL** from the XAMPP Control Panel.

3. **Create the database.** Open `http://localhost/phpmyadmin`, then run:

   ```sql
   CREATE DATABASE fullstack_db;

   USE fullstack_db;

   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(150) NOT NULL,
       phone VARCHAR(20),
       address TEXT
   );
   ```

4. **Configure the connection** in `config.php`:

   ```php
   <?php

   $conn = mysqli_connect("localhost", "root", "", "fullstack_db");

   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }
   ```

5. **Open the app** in your browser:

   ```
   http://localhost/myproject/
   ```

---

## Database Schema

**Table: `users`**

| Column | Type | Description |
|---|---|---|
| `id` | INT (PK, AUTO_INCREMENT) | Unique user ID |
| `name` | VARCHAR(100) | Full name |
| `email` | VARCHAR(150) | Email address |
| `phone` | VARCHAR(20) | Phone number |
| `address` | TEXT | Address |

---

## Screenshots

> Add your screenshots to a `screenshots/` folder and link them here.

```md
![User List](screenshots/user-list.png)
![Add User](screenshots/add-user.png)
```

---

## Future Improvements

- Switch delete to a POST request with CSRF protection
- Use prepared statements for all queries
- Add search and pagination
- Add user login and authentication
- Add server-side form validation

---

## Developer

**Divyansh Singh**

- Email: [divyanshsingh0634@gmail.com](mailto:divyanshsingh0634@gmail.com)

---

## License

This project is open source and available under the [MIT License](LICENSE).