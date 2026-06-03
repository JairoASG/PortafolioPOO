Proyecto: Analizador de Consumo Energético en Servidores
1. Nombre del proyecto

Monitor Energético / Analizador de Joules para Servidores

2. Objetivo del proyecto

Desarrollar una aplicación web que permita calcular la energía total consumida por un servidor dentro de un intervalo de tiempo determinado, utilizando la integración numérica de una función de potencia. La herramienta está orientada a facilitar el análisis energético en entornos de cómputo y administración de servidores.

3. Problema que resuelve

Este sistema ayuda a estimar de forma automática el consumo eléctrico de servidores, lo que resulta útil para:

Realizar cálculos más precisos en la facturación de servicios en la nube.
Analizar el impacto ambiental y la huella de carbono de los centros de datos.
Obtener aproximaciones eficientes de integrales sin necesidad de recurrir a métodos simbólicos complejos.
4. Tecnologías utilizadas
PHP 8.x: Desarrollo de la lógica del sistema y uso de tipado estricto.
HTML5 y CSS3: Creación de la interfaz gráfica y diseño visual.
XAMPP: Entorno de ejecución con servidor Apache.
5. Conceptos aplicados
Namespaces: Organización del código mediante espacios de nombres para evitar conflictos entre clases.
Encapsulamiento: Uso de propiedades privadas para proteger y controlar el acceso a los datos.
Manejo de excepciones: Validación de datos mediante estructuras try-catch para prevenir errores durante la ejecución.
Abstracción: Separación de la lógica matemática del resto de la aplicación, permitiendo una interacción sencilla para el usuario.
Algoritmos numéricos: Implementación de la Regla del Trapecio para aproximar el resultado de integrales definidas.
6. Capturas de pantalla
<img width="231" height="98" alt="image" src="https://github.com/user-attachments/assets/b5c1aea4-22a8-4f77-9a60-af41545f2180" />
<img width="231" height="272" alt="image" src="https://github.com/user-attachments/assets/8f8f5e62-1ee6-4804-842d-a276d4985640" />
<img width="350" height="322" alt="image" src="https://github.com/user-attachments/assets/912163d2-2502-41b6-a592-bd2d965eacb7" />
7. Instrucciones de ejecución
Copiar la carpeta del proyecto dentro del directorio htdocs de XAMPP.
Abrir el Panel de Control de XAMPP e iniciar el servicio Apache.
Acceder desde el navegador a la ruta correspondiente del proyecto.
Introducir el tiempo inicial, el tiempo final y el nivel de precisión requerido para realizar el cálculo.
Ejecutar el proceso y revisar los resultados obtenidos por el sistema.
8. Reflexión personal
¿Qué aprendí?

Aprendí a desarrollar aplicaciones utilizando Programación Orientada a Objetos en PHP, aplicando conceptos como Namespaces, encapsulamiento y manejo de excepciones. También comprendí cómo separar la lógica matemática de la interfaz para lograr una estructura más organizada y profesional.

¿Qué fue difícil?

La parte más compleja fue implementar correctamente la Regla del Trapecio dentro de los ciclos de cálculo y asegurar que las validaciones detectaran errores antes de procesar la información ingresada por el usuario.

¿Qué mejoraría?

Como mejora futura, incorporaría gráficas dinámicas para visualizar el comportamiento de la potencia a lo largo del tiempo y permitiría que el usuario definiera funciones personalizadas para realizar análisis más avanzados.
