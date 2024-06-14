# Papion Style Shop

This repository contains the implementation of a simple online store named "Papion Style," which specializes in selling girl accessories. Despite its simplicity, this project is efficient and functional.

## Features

- User registration and login
- Product browsing and detail viewing
- Shopping cart management
- Order placement and management
- Admin management for products and orders
- Comment submission and display
- Contact form for inquiries

## Description

- `images/`: Directory containing image files.
  - `products/`: Subdirectory containing product images.
- `css/`: Directory containing CSS style files.
  - `admin_productstyle.css`: Styles for admin product management.
  - `contactstyle.css`: Styles for the contact page.
  - `detailstyle.css`: Styles for the product detail page.
  - `loginstyle.css`: Styles for the login page.
  - `manage_orderstyle.css`: Styles for order management.
  - `orderstyle.css`: Styles for the order page.
  - `registerstyle.css`: Styles for the registration page.
  - `style.css`: General styles for the website.
  - `stylefooter.css`: Styles for the footer.
  - `styleindex.css`: Styles for the index page.
- `index.php`: Main page of the store.
- `product_detail.php`: Page for displaying product details.
- `register.php`: User registration page.
- `login.php`: User login page.
- `logout.php`: User logout script.
- `order.php`: Page to view orders.
- `admin_products.php`: Admin page to manage products.
- `admin_manage_order.php`: Admin page to manage orders.
- `submit_comment.php`: Script for submitting comments.
- `about.php`: Information page about the store.
- `contact.php`: Contact page for inquiries.
- `footer.php`: Script for the website's footer section.
- `header.php`: Script for the website's header section.
- `shop_db.sql`: SQL file for setting up the database.

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/SARArhy/style-shop.git
    ```
2. Set up the database using the `shop_db.sql` file.
3. Configure the database connection in `db.php`.
4. Open the project in your web server.

## Usage

1. Open the `index.php` page in your browser.
2. Register a new user or login with an existing account.
3. Browse products and add them to your cart.
4. View the cart and proceed to checkout.

## Directory Structure

```
style-shop:.
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
## Video

[![Project Demo](images/thumbnail.png)](video/projectstyle.mp4)
A video demonstrating the functionality of the project is available [here](path_to_video).
