# online-checker

A online/offline checking website based on ajax and codeigniter with fully functioning user and admin section.

# Prerequisites

* Php 7.1 or higher.
* Mysql 5 an higher, phpmyadmin for easy import of database.


# Deployment

1. Download this repository and put it in the root directory of your website. 
2. Create a database.
3. Go to application\config\database.php and edit 'username', 'password', 'database' under $db['default'].
4. In phpmyadmin open the newly created database, import the "sql" file present on the root directory of this repository with default setting on that database.
5. Go to application\config\config.php and edit $config['base_url']'s value to your website's url.
6. Open your_website_url/admin in the browser, use admin as userid and testuser as password. Add new users from edit_user page and then you can access user section by using your_website_url. 

# Built With

* Codeigniter (https://codeigniter.com/).
* Bootstrap (https://getbootstrap.com/).
* W3 css (https://www.w3schools.com/w3css/w3css_downloads.asp).
* Font Awesome (https://fontawesome.com/).

# Authors

* Saswata Gorai.
* Sangita Ball.
* Sumon Das.
