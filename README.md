# ESTIGaming

UC: Desenvolvimento de Aplicações Web (DAW)  
[Relatório](https://github.com/FabiomtGoncalves/ESTIGaming-Laravel/blob/master/DAW_PI_17646.pdf)
```
IDE: PhpStorm
Laravel
XAMPP
MySQL
``` 

1) Add DB name and username to .env file, by default they are:
   * **DB_DATABASE** = estigaming
   * **DB_USERNAME** = root
   
2) Run migrations for the creation of the already defined tables:
    * php artisan migrate:fresh --seed

3) Run a seed command to populate table 'games' with games already created:
    *  php artisan db:seed --class=GamesSeeder

Gaming website developed and API creation using Laravel to accomplish the following tasks:

- `Task 1` - User can see the available catalog of games on the website; 
- `Task 2` - User can buy multiple games;

**Login** - Using your already existing Gmail account to sign in by pressing the '+' button.  
![Login Interface](https://github.com/FabiomtGoncalves/ESTIGmail-React/blob/master/imgs/login.png)
