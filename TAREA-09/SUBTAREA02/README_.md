
# TAREA 09 – Principios modernos de desarrollo de aplicaciones web con PHP (DWES)
Este proyecto forma parte de la TAREA 09 del módulo DWES.   

# 🛒 Gestión de Productos en Laravel 
Aplicación web desarrollada en Laravel para la gestión de productos, con autenticación, roles (Administrador / Cliente), dashboard con estadísticas y CRUD.

---

## 📌 Características principales

### 🔐 Autenticación (Laravel Breeze)
- Registro
- Inicio de sesión
- Verificación de email
- Recuperación de contraseña
- Perfil de usuario
---

### 👥 Roles y acceso de usuario

El rol ADMIN se asigna manualmente desde phpMyAdmin. Todos los usuariios registrados desde la web reciben automaticamente rol de CLIENTE. 

- Administrador: acceso completo al CRUD de productos.
- Cliente: solo puede visualizar productos en modo lectura.
---

### 📦 Gestión de productos (CRUD)
- Crear productos
- Editar productos
- Eliminar productos
- Listado completo
- Validación de formularios
---

### 📊 Dashboard
Incluye:
*Tarjetas informativas*
- Productos con stock bajo
- Productos sin stock
- Total de productos
- Último producto creado
*Gráfica de stock*
- Gráfica tipo doughnut con Chart.js
*Acceso rápido al CRUD*
- Solo acceso a usuarios autenticados.
---

### 👁️ Vista pública para clientes
Ruta: `/productos`  
Permite ver productos sin acceso al CRUD.

---

### 🛠️ Tecnologías utilizadas

- Laravel
- PHP 8+
- MySQL / MariaDB
- Laravel Breeze
- TailwindCSS
- Chart.js
- Blade Components

---

### 🚀 Instalación del proyecto

1. Clonar el repositorio
2. Instalar dependencias
    - composer install
    - npm install
    - npm run dev
3. Configurar el entorno 
    - cp .env.example .env
    - php artisan key:generate
    - Configura tu base de datos en .env (DB_DATABSE=laravel_productos)
4. Migrar la base de datos 
    - php artisan migrate

--- 

### 📄 Autor/licencia
Chaima (CNO) 
Ciclo: Desarrollo de Aplicaciones Web  
Módulo: DWES – Principios modernos de desarrollo de aplicaciones web con PHP








