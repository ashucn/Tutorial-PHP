# Turorial-PHP
----  
![Learn PHP](http://makeawebsitehub.com/wp-content/uploads/2016/02/learn-php.jpg)  
###PHP学习，本地开发环境搭建：  
1. 建议安装 __Homestead__ 虚拟机集成环境 [Laravel Homestead version 2.2.1 教程](https://github.com/mayusa/Tutorial-Laravel/blob/master/LaravelHomesteadSetup.md)  
 
2. __XAMPP__ MAC本机 PHP开发环境集成软件包 [Apache+MySQL+PHP+PERL](https://www.apachefriends.org/download.html)  


3. __PHP内置HTTP 服务器__  
 It’s a great way to write and preview HTML locally without installing MAMP, WAMP, or a heavyweight web server.  
````  
 php -S localhost:8000  
 ````  
  
It’s not uncommon for an application to require its own PHP INI configuration file, especially if it has unique requirements for memory usage, file uploads, profiling, or bytecode caching. You can tell the PHP built-in server to use a specific INI file with the -c option:  
php -S localhost:8000 -c app/config/php.ini  

Tip
It’s a good idea to keep the custom INI file beneath the application’s root directory and, optionally, version-control the INI file if it should be shared with other developers on your
team.