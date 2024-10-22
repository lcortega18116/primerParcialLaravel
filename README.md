# PRIMER PARCIAL FRAMEWORK LARAVEL PARA DESARROLLO WEB
LUIS CARLOS ORTEGA


1. **Clonar el repositorio:**
   ```bash
   https://github.com/lcortega18116/primerParcialLaravel.git
2. **Instalar las dependencias:**
   ```bash
   composer install
3. **Configurar el archivo .env:**
   ```bash
    DB_CONNECTION=pgsql
    DB_HOST='127.0.0.1'
    DB_PORT=5432
    DB_DATABASE='parciallaravel'
    DB_USERNAME='postgres'
    DB_PASSWORD='contra'
4. **Ejecuta las migraciones para crear las tablas necesarias**
    ```bash
    php artisan migrate
5. **Para poblar la base de datos con datos iniciales**
    ```bash
    php artisan db:seed
6. **Iniciar el servidor**
    ```bash
    php artisan serve
7. **Registrarse con name,email y password de 8 caracteres**
    ```bash
    http://127.0.0.1:8000/api/register

    {
        "name": "user",
        "email": "user@correo.edu.co",
        "password":"user1234"
    }
8. **Obtener un token para poder ejecutar las consultas**
    ```bash
    http://127.0.0.1:8000/api/login

    {
        "email": "user@correo.edu.co",
        "password":"user1234"
    }
    ```
9. **Realizar las consultas por medio de Bearer Token**


