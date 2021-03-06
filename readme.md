# Checkout System using Laravel

## Environment Setup
- [XAMPP](https://www.apachefriends.org/index.html) PHP >= 7
- [Composer](https://getcomposer.org/)
- [Git bash terminal](https://git-scm.com/downloads)

## Setup the Project

- Pull the project from github to your `C:\xampp\htdocs` folder or wherever your `htdocs` folder is located
- Navigate to `C:\xampp\apache\conf\extra\` and open `httpd-vhosts.conf`with a text editor to add the following at the end and save it:
```
<VirtualHost *:80>
	DocumentRoot "C:/xampp/htdocs/laravelcheckout/public"
	ServerName laravelcheckout.test
</VirtualHost>
 ```
 - Run a text editor as *administrator* and open `C:\Windows\System32\drivers\etc\hosts ` file and add the following at the end and save it:
```
127.0.0.1 localhost
127.0.0.1 laravelcheckout.test
```
- Run Apache server using **XAMPP**
- Open `laravelcheckout.test` in your browser or `localhost/laravelcheckout/public`if it is not working or displaying correctly
- Create a database in your `localhost/phpmyadmin` named `laravelcheckout`
- Open **git bash** or your preferred command line and run the `composer migrate` command to migrate tables
- Input the quantity of apples and oranges by typing in the fields or by using the **Scan** button then press the **Checkout** button to display the total price
- Press the **Insert to Database** button input the data into the database

## Testing the Project

- Open **git bash** or your preferred command line
- Run the `composer test` command to run all the test cases.
