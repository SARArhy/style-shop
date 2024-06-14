# Papion Style Shop

This repository contains the implementation of a simple online store named "Papion Style," which specializes in selling girl accessories. Despite its simplicity, this project is efficient and functional.

## Features

- **User registration and login**: Secure user authentication and profile management.
- **Product browsing and detail viewing**: View and search for products with detailed descriptions and images.
- **Shopping cart management**: Add, update, and remove products from the shopping cart.
- **Order placement and management**: Complete purchase orders and track order status.
- **Admin management for products and orders**: Admin interface to manage product listings and order statuses.
- **Comment submission and display**: Users can submit comments on products.
- **Contact form for inquiries**: Users can send messages to the admin through a contact form.

## Description

- **images/**: Directory containing image files.
  - **products/**: Subdirectory containing product images.
- **css/**: Directory containing CSS style files.
  - **admin_productstyle.css**: Styles for admin product management.
  - **contactstyle.css**: Styles for the contact page.
  - **detailstyle.css**: Styles for the product detail page.
  - **loginstyle.css**: Styles for the login page.
  - **manage_orderstyle.css**: Styles for order management.
  - **orderstyle.css**: Styles for the order page.
  - **registerstyle.css**: Styles for the registration page.
  - **style.css**: General styles for the website.
  - **stylefooter.css**: Styles for the footer.
  - **styleindex.css**: Styles for the index page.
- **index.php**: Main page of the store.
- **product_detail.php**: Page for displaying product details.
- **register.php**: User registration page.
- **login.php**: User login page.
- **logout.php**: User logout script.
- **order.php**: Page to view orders.
- **admin_products.php**: Admin page to manage products.
- **admin_manage_order.php**: Admin page to manage orders.
- **submit_comment.php**: Script for submitting comments.
- **about.php**: Information page about the store.
- **contact.php**: Contact page for inquiries.
- **footer.php**: Script for the website's footer section.
- **header.php**: Script for the website's header section.
- **shop_db.sql**: SQL file for setting up the database.

## Installation

1. **Clone the repository**:
    ```bash
    git clone https://github.com/SARArhy/style-shop.git
    ```
2. **Set up the database** using the `shop_db.sql` file.
    - Import the `shop_db.sql` file into your MySQL database.
3. **Configure the database connection** in `db.php`:
    - Update the database credentials (host, username, password, database name) in the `db.php` file.
4. **Open the project** in your web server:
    - Place the project folder in your web server's root directory (e.g., `htdocs` for XAMPP or `www` for WAMP).
    - Start the web server and navigate to `http://localhost/style-shop/` in your browser.

## Usage

1. **Open the `index.php` page** in your browser.
2. **Register a new user** or login with an existing account.
3. **Browse products** and add them to your cart.
4. **View the cart** and proceed to checkout.

## Directory Structure

```
style-shop/
│   about.php
│   action_admin_manage_order.php
│   action_admin_products.php
│   action_contact.php
│   action_login.php
│   action_order.php
│   action_register.php
│   admin_manage_order.php
│   admin_products.php
│   contact.php
│   db.php
│   index.php
│   login.php
│   logout.php
│   order.php
│   product_detail.php
│   README.md
│   register.php
│   shop_db.sql
│   submit_comment.php
│
├───css
│   │   admin_productstyle.css
│   │   contactstyle.css
│   │   detailstyle.css
│   │   loginstyle.css
│   │   manage_orderstyle.css
│   │   orderstyle.css
│   │   registerstyle.css
│   │   style.css
│   │   stylefooter.css
│   │   styleindex.css
│
├───images
│   │   b.png
│   │
│   └───products
│           1-1.jpg
│           101.jpg
│           121.jpg
│           131.jpg
│           141.jpg
│           151.jpg
│           51.jpg
│           71.jpg
│           91.jpg
│
├───includes
│   │   footer.php
│   │   header.php
│
├───main
│   │   footer.php
│   │   header.php
│
└───video
        projectstyle.mp4
```

## Video

<a href="https://drive.google.com/file/d/1hHwpgJ7dcQMuOs_PtdNo2yny1pz5j03-/preview" target="_blank">
    <img src=""https://drive.google.com/file/d/1SsYN4Jgf5fdvvu-9LY3CJeoJC5N398sX/preview" alt="Project Demo" width="600"/>
</a>

A video demonstrating the functionality of the project is available [here](https://drive.google.com/file/d/1hHwpgJ7dcQMuOs_PtdNo2yny1pz5j03-/preview).

---
