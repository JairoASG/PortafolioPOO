Nombre del proyecto: Cloud Energy Monitor (Analizador de Consumo en Servidores)

Objetivo del proyecto:
Desarrollar una aplicación web orientada a administradores de sistemas que permita calcular la energía total consumida por un servidor mediante la integración numérica de una función de potencia en un intervalo de tiempo específico.

Problema que resuelve:
En los centros de datos, el consumo energético de los servidores cambia constantemente dependiendo de la carga de trabajo que tenga el procesador. Este sistema permite estimar de manera precisa la energía utilizada, facilitando el cálculo de costos operativos, el análisis del impacto ambiental del hardware y la aproximación de integrales complejas utilizando la Regla del Trapecio.

Tecnologías utilizadas:

Lenguaje de programación: PHP 8.x.
Paradigma: Programación Orientada a Objetos (POO).
Interfaz de usuario: HTML5 y CSS3 mediante hojas de estilo externas.
Entorno de ejecución: XAMPP y servidor Apache.

Conceptos aplicados:
Basados en los temas de Programación Orientada a Objetos:

Uso de Namespaces para organizar el código y evitar conflictos entre clases.
Aplicación del encapsulamiento mediante propiedades privadas para proteger los datos internos.
Implementación de la abstracción a través de una clase encargada de realizar los cálculos matemáticos.
Manejo de excepciones utilizando bloques try-catch para validar entradas incorrectas.
Análisis del costo computacional relacionado con el nivel de precisión utilizado en los cálculos numéricos.
Separación de responsabilidades entre la lógica del sistema y la interfaz de usuario.

Capturas de pantalla:
<img width="957" height="628" alt="image" src="https://github.com/user-attachments/assets/24e78fd3-7435-4cda-8c21-ce22235ccb57" />


Formulario principal del sistema.
Agregar captura correspondiente.
<img width="947" height="706" alt="image" src="https://github.com/user-attachments/assets/6298019e-506f-4a80-ab6d-698a7fd8559e" />


Demostración de resultados obtenidos.
Agregar captura correspondiente.
<img width="945" height="608" alt="image" src="https://github.com/user-attachments/assets/96fb9d32-5423-4990-943f-6306506ef793" />


Opciones disponibles para los distintos modos de cálculo.
Agregar captura correspondiente.
<img width="966" height="708" alt="image" src="https://github.com/user-attachments/assets/ea1b7d85-a1c3-42c0-8f36-69e5eca7b212" />


Instrucciones de ejecución:

Copiar la carpeta monitor_energetico dentro del directorio htdocs de XAMPP.
Verificar que se conserve la estructura de carpetas del proyecto, incluyendo src/Calculo/IntegradorNumerico.php e index.php.
Iniciar el servicio Apache desde el Panel de Control de XAMPP.
Abrir un navegador web y acceder a la siguiente dirección:
http://localhost/Nombre_de_tu_carpeta/index.php

Reflexión personal

¿Qué aprendí?
Aprendí la importancia de utilizar Namespaces para mantener una mejor organización del código y evitar conflictos entre clases. Además, comprendí cómo la Programación Orientada a Objetos ayuda a separar la lógica de cálculo de la parte visual de la aplicación, haciendo el proyecto más ordenado y fácil de mantener.

¿Qué fue difícil?
Lo más complicado fue implementar correctamente la Regla del Trapecio dentro de la estructura de repetición y asegurar que las validaciones mediante excepciones detectaran cualquier dato incorrecto antes de ejecutar los cálculos.

¿Qué mejoraría?
Como mejora futura, permitiría que el usuario seleccionara distintos perfiles de carga del servidor, como bajo, medio o alto rendimiento, en lugar de utilizar una única función fija. También agregaría la conversión automática de los resultados a kilowatts-hora para generar reportes financieros más completos.
