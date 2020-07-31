
## About the app

This is a simple notes app created for the purpose of demonstrating basic Laravel skills. The application includes:
- User authentication using Laravel build in ui user handling.
- Users can create and delete notes specific to their account.
- Custom css that is mobile friendly.

## Build Using
The application was build using:
- Laravel 7.22.4
- PHP 7.4.8

## Running the app
T- run the app:
- Ensure you have all the required dependancies: php, composer, mysql, etc.
- Download or clone the repository.
- Using xampp start a apache & mysql server.
- You can either dump the SQL file in the main directory into your local mysql database in phpmyadmin 
- or- 
- You can migrate the database. 
    - In terminal log into your mysql. 
    - Run 'create database notesapp;'.
    - Exit mysql.
    - Run 'php artisan migrate'
- In '.env' change the database credentials to your cridentials on line 9-14.
- Now run 'php artisan serve'.
- Follow the url and create an account.

