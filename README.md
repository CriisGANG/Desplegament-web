# Desplegament Web

Este proyecto es una aplicación web para la gestión de productos en una tienda. Permite visualizar, modificar y actualizar productos, así como gestionar sus categorías.

## Estructura del Proyecto

- `Principal.php`: Muestra la lista de productos con sus categorías.
- `Modificar.php`: Muestra el formulario para modificar un producto.
- `Actualitzar.php`: Actualiza un producto en la base de datos.
- `Header.php`: Muestra el encabezado de la página.
- `Footer.php`: Muestra el pie de página.
- `Connexio.php`: Gestiona la conexión a la base de datos.

## Requisitos

- PHP 7.4 o superior
- Servidor web (Apache, Nginx, etc.)
- Base de datos MySQL

## Instalación

1. Clona el repositorio en tu servidor web:
    ```bash
    git clone https://github.com/tu-usuario/tu-repositorio.git
    ```

2. Configura la base de datos en el archivo `Connexio.php`:
    ```php
    private $host = "localhost";
    private $usuario = "root";
    private $contraseña = "";
    private $baseDatos = "la_meva_botiga";
    ```

3. Importa la base de datos desde el archivo `database.sql` (si existe).

## Uso

1. Accede a la página principal en tu navegador:
    ```
    http://localhost/Desplegament-web/Principal.php
    ```

2. Desde la página principal, puedes:
    - Ver la lista de productos.
    - Agregar un nuevo producto.
    - Modificar un producto existente.
    - Eliminar un producto.

## Contribuciones

Las contribuciones son bienvenidas. Por favor, abre un issue o un pull request para discutir cualquier cambio que desees realizar.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo `LICENSE` para más detalles.
