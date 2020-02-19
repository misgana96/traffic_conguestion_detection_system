# Admin Dashboard for controlling vechicles distribution

## What Admin can control
1. An Admin can add or remove vehicles into or from the server

2. An Admin can add or remove installed cameras into or from the server

3. An Admin can add or remove pathes(streets) into or from the server

### how to setup 
1. clone the repository to your local machine

2. composer install

3. database configuration
    ``` 
    go to mysql database 
    ```
    ```
    create "vehiclesCounting" database
    ```
    ``` 
    Run "php artisan migrate" (from root directory of the project)
    ```
    ```
    import "vehiclesCounting.sql"
    ```
4. Run "php artisan serve"

5. create an acount