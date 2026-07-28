# PHP-CRUD-Users-System
A simple PHP and MySQL user management system that allows adding users, displaying records, and toggling user status.
# PHP CRUD Users System

## Project Description

This project is a simple web application developed using HTML, CSS, JavaScript, PHP, and MySQL.

The system allows users to:

- Add user information (Name and Age)
- Store data in a MySQL database
- Display all users in a table
- Toggle user status between 0 and 1
- Update the status immediately without refreshing the page

## Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- MySQL

## Project Files

- f.html : Contains the user input form.
- in.php : Connects to the database, inserts data, and displays user records.
- toggle.php : Updates the user status value.
- script.js : Handles the toggle action without refreshing the page.
- style.css : Provides the page design and styling.

## Database

Database Table Name:

users

Columns:

- id
- name
- age
- status

## How to Run

1. Create a MySQL database.
2. Create the users table.
3. Update the database connection information in PHP files.
4. Upload the files to a PHP server.
5. Open f.html in the browser.


## Steps Completed

1. Created a MySQL database and created a table named users.

2. Created the users table with the following columns:
   - id (Primary Key)
   - name
   - age
   - status

3. Created an HTML form to enter user name and age.

4. Connected PHP files with the MySQL database.

5. Stored submitted data into the users table.

6. Displayed all records from the database in an HTML table.

7. Added a Toggle button to change the status value between 0 and 1.

8. Used JavaScript and PHP to update the status immediately without refreshing the page.

9. Uploaded the project files to a PHP hosting server.

## Features

- User registration form.
- Display users in a table.
- Toggle status functionality.
- Dynamic status update.


## Project Link

You can access the project here:

https://mysitn.rf.gd/f.html
