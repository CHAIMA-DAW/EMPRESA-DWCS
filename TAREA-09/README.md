
# Guía completa para ejecutar ambos proyectos sin errores.
Este proyecto forma parte de la TAREA 09 del módulo DWES.   

# SUBTAREA 01 – Proyecto Symfony (Librería)
1. Requisitos
PHP 8+
Composer
MySQL / XAMPP
Symfony CLI (opcional pero recomendado)

2. Crear la base de datos
En phpMyAdmin crear: libreria (vacia)

3. Configurar .env : (por defecto: DATABASE_URL="mysql://root:@127.0.0.1:3306/libreria")

4. Instalar dependencias: (composer install)

5. Ejecutar migraciones (php bin/console doctrine:migrations:migrate)

6. Arrancar el servidor: opción 
A) symfony serve  
B) (sin Symfony CLI) php -S 127.0.0.1:8000 -t public

7. Acceso al proyecto. http://127.0.0.1:8000/home

---

# SUBTAREA 02 – Proyecto Laravel (Productos)

1. Requisitos
PHP 8+
Composer
Node.js + npm
MySQL / XAMPP

2. Crear la base de datos
En phpMyAdmin: laravel_productos (SQL EN CARPETA)

3. Configurar .env 
DB_DATABASE=laravel_productos
DB_USERNAME=root
DB_PASSWORD=

4. Instalar dependencias 
composer install
npm install
npm run dev

5. Migrar la base de datos (php artisan migrate)

6. Acceso al proyecto (dos opciones)
A) php artisan serve (http://127.0.0.1:8001)
B) Usar VirtualHost

---

### 📄 Autor/licencia
Chaima (CNO) 
Ciclo: Desarrollo de Aplicaciones Web  
Módulo: DWES – Principios modernos de desarrollo de aplicaciones web con PHP








