# ESTIGaming
### Fábio Gonçalves nº17646
### Docente: Luís Carlos Bruno
#### UC: Desenvolvimento de Aplicações Web (DAW)

---

1) Adicionar o nome da base de dados e o username ao ficheiro .env, que neste caso por default são:
   * **DB_DATABASE** = estigaming
   * **DB_USERNAME** = root
   
2) Executar as migrations para a criação das tabelas com o comando:
    * php artisan migrate:fresh --seed

3) Executar a seed para popular a tabela 'games' com alguns jogos já previamente criados:
    *  php artisan db:seed --class=GamesSeeder
