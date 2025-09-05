# PHP OOP Authentication System

A simple user authentication system built with **PHP (OOP)**, using sessions for login, registration, and logout.
This is a learning project.

## Features
- User Registration  
- User Registration Duplication 

- User Login  
- Session-based Authentication  
- User Logout  

- Logged-in user cannot access Login page instead Redirect to Dashaboard
- Logged-in user cannot access Register page instead Redirect to Dashaboard

- Visitor cannot access Dashboard instead Redirect to Login
- Visitor can access Register View

Credit: AJAY YADAV : https://www.youtube.com/watch?v=4UpiQahIIpw&list=PLT51dtioU1pOCka0jIwYYaIGhPct3El_i&index=14


## Requirements
- PHP 7.3.11+  
- MySQL Database  
- Apache/Nginx Server  

## Setup
1. Clone the repo:
   ```bash
   git clone https://github.com/adnanafzalraj/PHP-OOP-AUTHENTICATION-SYSTEM.git
   ```
2. Import the `authdb.sql` file into MySQL.  
3. Update database credentials in `app/Database.php`.  
4. Run the project in your browser:  
   ```
   http://localhost/php-auth-system
   ```

## License
MIT License
