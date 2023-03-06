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

**Homepage**
![Homepage Interface](https://github.com/FabiomtGoncalves/ESTIGaming-Laravel/blob/master/imgs/homepage.png)

**Selected Game Info**
![Game Info Interface](https://github.com/FabiomtGoncalves/ESTIGaming-Laravel/blob/master/imgs/clicked_game.png)

**Search Game by Name**
![Search by Name](https://github.com/FabiomtGoncalves/ESTIGaming-Laravel/blob/master/imgs/search_by_name.png)

**Games on Sale**
![Sale Interface](https://github.com/FabiomtGoncalves/ESTIGaming-Laravel/blob/master/imgs/sale.png)

**Login/Register**
![Login/Register Interface](https://github.com/FabiomtGoncalves/ESTIGaming-Laravel/blob/master/imgs/login_register.png)

**Cart/Checkout**
![Cart/Checkout Interface](https://github.com/FabiomtGoncalves/ESTIGaming-Laravel/blob/master/imgs/cart.png)

**Account/Games Bought**
![Account Interface](https://github.com/FabiomtGoncalves/ESTIGaming-Laravel/blob/master/imgs/games_bought.png)


