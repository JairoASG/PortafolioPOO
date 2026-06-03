Proyecto 5: Gestión de Bitácoras en Archivos de Texto
1. Nombre del proyecto

LogWriter - Sistema de Registro y Gestión de Bitácoras en PHP

2. Objetivo del proyecto

Desarrollar una aplicación web que permita registrar, validar y almacenar información en archivos de texto utilizando las funciones nativas de PHP para el manejo de archivos, garantizando un almacenamiento sencillo y eficiente de los datos.

3. Problema que resuelve

Este proyecto cubre la necesidad de mantener registros de eventos sin depender de una base de datos, ofreciendo las siguientes ventajas:

Almacenamiento ligero y de bajo costo mediante archivos de texto.
Protección de los registros frente a entradas maliciosas gracias a la validación y sanitización de datos.
Conservación de un historial cronológico de actividades, errores o eventos importantes del sistema.
Gestión simple y rápida de información para aplicaciones pequeñas o de práctica.
4. Tecnologías utilizadas
PHP 8.x: Procesamiento de formularios y manejo de archivos del lado del servidor.
HTML5: Creación de formularios para la captura de información.
XAMPP / Apache: Entorno local para la ejecución de la aplicación.
5. Conceptos aplicados
Manejo de archivos: Utilización de funciones como fopen(), fwrite() y fclose() para abrir, escribir y cerrar archivos de texto.
Sanitización de datos: Uso de htmlspecialchars() para evitar la ejecución de código no deseado y proteger la información almacenada.
Procesamiento de formularios: Recepción y validación de datos enviados mediante el arreglo global $_POST.
Persistencia de información: Almacenamiento permanente de registros en un archivo de texto plano.
Seguridad básica: Prevención de errores y riesgos derivados de entradas proporcionadas por los usuarios.
6. Capturas de pantalla


<img width="328" height="403" alt="image" src="https://github.com/user-attachments/assets/9c554e4c-5ccc-4642-94c9-316fe23d70f0" />


7. Instrucciones de ejecución
Copiar la carpeta del proyecto dentro del directorio htdocs de XAMPP.
Iniciar el servicio Apache desde el Panel de Control de XAMPP.
Abrir un navegador web y acceder a la dirección correspondiente del proyecto.
Completar el formulario con la información requerida.
Enviar los datos y verificar que se almacenen correctamente dentro del archivo de bitácora.
8. Reflexión personal
¿Qué aprendí?

Aprendí a trabajar con archivos de texto desde PHP utilizando funciones específicas para abrir, escribir y cerrar archivos. También reforcé el manejo de formularios y la importancia de sanitizar la información recibida para evitar problemas de seguridad dentro de la aplicación.

¿Qué fue difícil?

La práctica resultó relativamente sencilla gracias a los conocimientos adquiridos en ejercicios anteriores. Sin embargo, fue importante prestar atención al flujo correcto de lectura y escritura de archivos para evitar errores durante el almacenamiento de los registros.

¿Qué mejoraría?

Como mejora futura, implementaría funciones más modernas como file_put_contents() para simplificar el código y añadiría mecanismos de bloqueo de archivos mediante flock() para evitar conflictos cuando varios usuarios intenten escribir información al mismo tiempo.
