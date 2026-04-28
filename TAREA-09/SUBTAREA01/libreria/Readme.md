# 📚 Sistema de Gestión de Librería
Este proyecto corresponde a la Tarea 09 – Subtarea 01 del módulo Desarrollo Web en Entorno Servidor (DWCS).
Es una Aplicación web desarrollada con Symfony 7 para la gestión integral de un catálogo de libros. Este proyecto implementa un sistema completo de autenticación y operaciones CRUD.

---

## 🚀 Funcionalidades Principales

### 🔐 Seguridad y Autenticación
*   Registro e Inicio de Sesión: Gestión completa de usuarios.
*   Seguridad:Contraseñas cifradas y protección contra ataques CSRF mediante tokens.
*   Control de Acceso: Rutas protegidas para garantizar que solo usuarios autorizados gestionen el catálogo.

### 📚 Gestión de Libros (CRUD)
*   Catálogo:Listado de libros registrados.
*   Operaciones: Creación, edición y eliminación (con confirmación de seguridad).
*   Formularios: Implementados con Symfony Forms y validación automática de datos.

### 🎨 Interfaz de Usuario
*   Bootstrap 5: Diseño responsive y profesional.
*   **Modo Oscuro: Interruptor (toggle) integrado para alternar entre tema claro y oscuro.
*   Plantillas Twig: Estructura limpia, modular y optimizada.

---

## 🛠️ Tecnologías Utilizadas

*   Backend:PHP 8.2+
*   Symfony 7
*   Twig
*   MySQL
*   Bootstrap 5.3

---

## 📦 Instalación y Configuración

Sigue estos pasos para desplegar el proyecto localmente:

1. Clonar el repositorio:
   git clone <url-del-repositorio>
   cd nombre-del-proyecto
2. Instalar dependencias:
    composer install
3. Configurar la base de datos en .env:
    DATABASE_URL="mysql://usuario:password@127.0.0.1:3306/libreria"
4. Crear la base de datos:
    php bin/console doctrine:database:create
5. Ejecutar migraciones:
    php bin/console doctrine:migrations:migrate
6. Iniciar el servidor:
    symfony server:start

--- 

##  📁 Estructura del proyecto

src/
 ├── Controller/
 ├── Entity/
 ├── Form/
 ├── Repository/
templates/
 ├── base.html.twig
 ├── home.html.twig
 └── libro/
public/
config/

--- 

## Comentarios sobre el desarrollo
*   Se ha eliminado la internacionalización para simplificar el proyecto, manteniendo todos los textos en castellano, tal como permite el enunciado.

*   Se ha mantenido un diseño coherente en todas las vistas.

*   El código está comentado en los puntos clave para facilitar su comprensión.

*   Se ha implementado un interruptor de tema claro/oscuro mediante JavaScript.

--- 

##  👤 Autora
Chaima (CNO) 
Ciclo: Desarrollo de Aplicaciones Web  
Módulo: DWES – Principios modernos de desarrollo de aplicaciones web con PHP
