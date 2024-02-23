# shopping-cart
This project is a simple PHP-based application for managing a bookstore. It includes features for adding, deleting, and viewing products (books), along with a shopping cart system for users to add books to their cart and place orders.

## Features
- **Add New Product:** Allows the admin to add new books to the bookstore database.
- **View Product List:** Admins can view a list of all books, including their names, descriptions, prices, quantities, and images.
- **Delete Product:** Admins can delete books from the database.
- **Shopping Cart:** Users can add books to their shopping cart, adjust the quantity, and place orders.
- **Database Support:** Utilizes a MySQL database to store book information and cart data.

## Setup
1. **Database Configuration:**
   - Create a MySQL database named `cs602db`.
   - Import the provided SQL file to create the `books` table with sample data.
   - Update the database connection settings in `database.php` with your MySQL username and password.

2. **Web Server:**
   - Deploy the application on a PHP-enabled web server.
   - Ensure the server has PDO extension enabled for MySQL.


## Usage
- Navigate to `index.php` to start using the application.
- Admin functionalities can be accessed by navigating to `index.php?page=admin`.
- Users can view books and add them to the shopping cart by visiting `index.php?page=products`.

## Technologies Used
- **PHP:** Server-side scripting.
- **MySQL:** Database management.
- **HTML/CSS:** Frontend layout and design.

