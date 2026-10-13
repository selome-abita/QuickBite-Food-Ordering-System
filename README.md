# QuickBite — Online Food Ordering System

A beginner-friendly college project with HTML/CSS frontend, PHP backend, MySQL database, customer registration/login, menu, session cart, demo checkout, order history, and an admin dashboard.

## Run with XAMPP
1. Install XAMPP. Start Apache and MySQL.
2. Extract this ZIP and place the `QuickBite` folder in `C:\xampp\htdocs\` (or your XAMPP htdocs directory).
3. Open http://localhost/phpmyadmin, choose Import, and import `database.sql` **once**. This creates the `quickbite` database and demo products.
4. Check `config.php` database settings. Defaults: localhost, root, blank password.
5. Open http://localhost/QuickBite/ in a browser.
6. Register a customer account, add food to cart, place a demo order, and see it under Orders.

## Admin account
Register a normal account first. In phpMyAdmin, select `quickbite`, open the SQL tab and run:
```sql
UPDATE users SET role='admin' WHERE email='YOUR_REGISTERED_EMAIL@example.com';
```
Replace with your registered email, then log out and log back in. Click Admin. Only a database owner should execute this setup step.

## Features
- Menu, cart, quantity changes, checkout, customer order history
- Admin dashboard with counts, completed-sales summary, product add/edit/show/hide, order status management
- Password hashing, prepared statements, CSRF checks, role checks, server-side price calculations, transactional order placement
- Responsive design, demo ETB prices

## Important
This is a local student **demo**, not a production restaurant system. No real payment or delivery integration. Session carts do not synchronize across devices. Before public deployment, add HTTPS, rate limiting, secure cookie configuration, password reset, email verification, logging, and a security review. Never commit real database credentials or customer information.

## GitHub from Android
Create an empty repository on github.com. Extract this ZIP on your phone, then use Add file → Upload files to upload the extracted project files, not only the ZIP. Commit changes. GitHub Pages cannot run PHP/MySQL; run locally with XAMPP or deploy to a PHP/MySQL host.
