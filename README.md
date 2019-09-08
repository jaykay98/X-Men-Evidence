### Mutants can submit their applications for X-Men to view.
### Form validation doesn't really work and authentication is broken.
### X-Men are able to view submissions without logging in.

This guide is for PCs running Windows.

Make sure you have the following software installed:
# XAMPP, Composer, Hosts File Editor

## Step 1. Delete everything in the xampp/htdocs directory
## Step 2. Edit xampp/apache/conf/extra/httpd-vhosts.conf and uncomment one of the VirtualHosts. Change the DocumentRoot to xampp/htdocs/x-men-project/public. Change the ServerName to your desired name e.g. ServerName laravel is http://laravel in your web browser.
## Step 3. Open Hosts File Editor and change the host name for the IP address "127.0.0.1" to the ServerName you provided in Step 1. Make sure to click SAVE, then REFRESH.
## Step 4. Download the GitHub folder as a ZIP, extract it somewhere, rename it to x-men-project and place it inside xampp/htdocs/.
## Step 5. Open a command prompt or Windows Powershell and change directory into xampp/htdocs/x-men-project/.
## Step 6. Type "composer install" to install all the dependencies. (THIS WILL TAKE A WHILE).
## Step 7. Create a .env file in the root of the directory then type "php artisan key:generate".
## Step 8. Create a database called "x-men". Then run "php artisan cache:clear". Then run "php artisan migrate".
