# Laravel CRUD de Clientes con Autenticación y Soft Deletes

Proyecto desarrollado en **Laravel 12** como parte de mi proceso de formación como desarrollador backend PHP.  
El sistema permite la gestión básica de clientes aplicando buenas prácticas del framework.

## 🚀 Funcionalidades

- CRUD completo de clientes
- Búsqueda por nombre o correo
- Paginación de resultados
- Validaciones con Form Requests
- Eliminación lógica (Soft Deletes)
- Rutas RESTful
- Estructura MVC clara

## 🛠️ Tecnologías utilizadas

- PHP 8+
- Laravel 12
- MySQL
- Blade
- Bootstrap (básico)
- Git & GitHub

## 📂 Estructura del proyecto

- `app/Models` → Modelo Client
- `app/Http/Controllers` → Controlador ClientController
- `app/Http/Requests` → Validaciones
- `resources/views` → Vistas Blade
- `routes/web.php` → Rutas del sistema

## ⚙️ Instalación y ejecución

1. Clonar el repositorio:
   ```bash
   git clone https://github.com/joseescobar-dev/laravel-crud-auth.git

2. Instalar dependencias
    ```bash
    composer install
3. Configurar variables de entorno
    ```bash
    cp .env.example .env
    php artisan key:generate
4. Configurar la base de datos en  .env
5. Ejecutar migraciones
    ```bash
    php artisan migrate
6. Levantar servidor
    ```bash
    php artisan migrate
