<p align="center">Instruction</p>

## Instruction

- Clone project
- Install docker app
- Console run : docker compose build
- Console run : docker compose up -d
- Console run command: composer install
- Create .env file and configure database connect (host: mysql, port:3306, db: example_db, user: root, password: root)
- Console run command: php artisan key:generate
- Console run command: docker compose run artisan migrate --seed
- Console run command: php artisan storage:link
- Console run command: chmod 777 -R storage && chmod 777 -R bootstrap/cache
- Front (http:localhost:8020), Adminpanel (http:localhost:8020/admin, email: admin@gmail.com, pwd: 11admin11)
