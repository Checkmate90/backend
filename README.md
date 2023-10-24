### Instrucciones
0. Requiere tener instalado php 8.0, que esté corriendo Apache y algún motor de base de datos, con una base de datos accesible
1. Clonar el repositorio a través de Git
2. Entrar con una terminal a la carpeta del repositorio
3. Ejecutar el comando "composer install"
4. Copiar archivo .env dentro del repositorio clonado
5. Una vez terminado esto, ejecutar el comando "php artisan migrate:fresh"
6. Terminada la migración, ejecutar el comando "php artisan db:seed"
7. Con esto terminado, ejecutar usando "php artisan serve"
8. Conprobar que se esté ejecutando correctamente accediendo a la pagina "http://127.0.0.1:8000"