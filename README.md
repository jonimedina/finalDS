# proyecto_DisenioSistemas

1. Configurar el entorno:

```bash 
cp .env.example .env
```


2. Crear la base de datos:
Los usuarios deben crear una nueva base de datos en su sistema de gestión de bases de datos (por ejemplo, MySQL) utilizando el nombre especificado en el archivo .env.
La base de datos adjuntada en los archivos tiene por nombre "finalds"

   
3. Instalar dependencias de Composer:

```bash
composer install
```
4. Generar la clave de aplicación:

```bash
php artisan key:generate
```

5. Iniciar el servidor de desarrollo:

```bash
php artisan serve
```
La aplicación por default estará disponible en http://localhost:8000.
