# Membresías IO
## Instalar el proyecto localmente

1. Instalar [Laragon](https://laragon.org/download/)

2. Clonar el proyecto dentro de la carpeta ~laragon/www/

  ```
  $ git clone https://github.com/amersb29/membresias-IO.git
  ```
  
3. Dentro de la carpeta **membresias-IO** ejecutar los siguientes comandos
 
  ```
  $ composer update
  $ cp .env.example .env
  $ php artisan key:generate
  ```
  
4. Iniciar los servicios de laragon

5. Desde cualquier navegador ingresar a [http://membresias-io.test](http://membresias-io.test)
