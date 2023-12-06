# Movies App 

<p align="center">
    <img height="100px" src="https://platform.sh/static/symfony_black@2x-5108baa5562a2f483c64a62d8269b8f3.png" alt="Symfony Logo">
    <img height="100px" src="assets/img/movie-app.png" alt="Movie Logo">
</p>

Aplicación simple de un CRUD en Symfony, como introducción a este framework de `PHP`, ademas de conocer todo lo que nos puede ofrecer.

## Requisitos

Asegúrate de tener instalados los siguientes requisitos en tu sistema:

- PHP >= 8.1
- Composer
- Symfony CLI

## Instalación

1. Clona este repositorio: 
```bash 
git clone https://github.com/Yeyoramirez17/symfony-movie-app.git
```
2. Entra al directorio del proyecto: 
```bash
cd tu-proyecto
```
3. Instala las dependencias de Symfony: 
```bash
composer install
```
4. Configura la base de datos en el archivo `.env` y ejecuta las migraciones: 
```bash
php bin/console doctrine:migrations:migrate
```

5. Levante su servidor de manera local mediante `Symfony CLI`: 
```bash
symfony server:start
````