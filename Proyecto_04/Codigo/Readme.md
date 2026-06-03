Proyecto: Gestión de Inventario con Arreglos Unidimensionales
1. Nombre del proyecto

Sistema de Administración de Inventario en PHP

2. Objetivo del proyecto

Crear una aplicación web capaz de administrar productos y precios mediante el uso de arreglos unidimensionales, permitiendo realizar cálculos y consultas básicas sobre la información almacenada en el inventario.

3. Problema que resuelve

Este proyecto facilita la administración de productos sin necesidad de utilizar una base de datos, permitiendo:

Registrar múltiples productos junto con sus precios de manera temporal.
Obtener automáticamente estadísticas importantes del inventario, como el valor total, el precio promedio y los productos con mayor y menor costo.
Mantener la información disponible durante la navegación gracias al uso de sesiones en PHP.
4. Tecnologías utilizadas
PHP 8.x: Procesamiento de datos, manejo de arreglos y sesiones.
HTML5: Creación de formularios y estructura de la página.
CSS3: Diseño y presentación visual de la interfaz.
XAMPP / Apache: Entorno local para la ejecución del proyecto.
5. Conceptos aplicados
Arreglos unidimensionales: Almacenamiento organizado de nombres de productos y precios mediante índices.
Manejo de sesiones: Uso de session_start() para conservar los datos del inventario entre diferentes solicitudes.
Funciones integradas de PHP:
array_sum() para calcular el valor total del inventario.
max() y min() para encontrar los precios más altos y más bajos.
count() para obtener el promedio de precios.
Estructuras repetitivas: Utilización de ciclos para mostrar dinámicamente los productos registrados.
6. Capturas de pantalla
<img width="535" height="662" alt="image" src="https://github.com/user-attachments/assets/96cd4280-93a4-4816-98bc-cefc0978a755" />


<img width="566" height="287" alt="image" src="https://github.com/user-attachments/assets/b378508d-0b4c-4f37-95f2-bae6f9bc0bf5" />


7. Instrucciones de ejecución
Tener instalado XAMPP y verificar que el servicio Apache esté en funcionamiento.
Crear una carpeta llamada inventario dentro del directorio C:\xampp\htdocs\.
Copiar los archivos del proyecto dentro de dicha carpeta.
Abrir el navegador y acceder a la ruta correspondiente del proyecto.
Registrar productos y precios para comenzar a utilizar el sistema.
8. Reflexión personal
¿Qué aprendí?

Aprendí a utilizar arreglos unidimensionales para almacenar y procesar información relacionada, además de comprender cómo las sesiones permiten conservar datos en una aplicación web aun cuando el usuario interactúa con diferentes páginas o recarga el navegador.

¿Qué fue difícil?

Uno de los principales retos fue mantener sincronizados los arreglos de productos y precios para evitar inconsistencias en los datos, así como implementar correctamente la lógica necesaria para eliminar toda la información almacenada en la sesión.

¿Qué mejoraría?

Como mejora futura, incorporaría la opción de eliminar productos de manera individual utilizando su posición dentro del arreglo. También añadiría la generación de reportes en PDF para facilitar la consulta y el almacenamiento de la información del inventario.
