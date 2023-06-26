# Proyecto Final 

## Descripción del proyecto
La página tiene como propósito el ayudar a la comunidad estudiantil con 3 funciones que son muy usadas alrededor de toda la escuela y las cuales no tienen un espacio específico para ser consultadas y que no se mezclen con otros temas. 
### Funciones:
* Servir como foro para publicar y buscar objetos perdidos alrededor del plantel.

* Servir como punto de compra y venta de productos alrededor del plantel.

* Crear foros para la comunicación entre estudiantes, estos foros separados por temas a tratar.

### Importancia
Gracias a las aplicaciones antes mencionadas permitimos facilitar varios procesos que se solían hacer dentro de páginas de Facebook y que ahora tienen su lugar con las herramientas necesarias para que esté lo mejor optimizado posible. Con esto ayudando tanto a la gente involucrada como a los que no están tan interesados al mantener limpios los canales de comunicación previamente empleados y tenerlos para otros posibles temas.

### Tecnologías utilizadas
Principalmente, se utilizó de html para los maquetados y la cara de la página, se usó JavaScript para indicar eventos y generar alertas, Se usó php en todo el lado lógico y en la conexión y uso de los datos de la base de datos y por último se utilizó boostrap y CSS para el diseño de la página. 

## Instrucciones de instalación

### Programas necesarios
Además de los programas mencionados en la duración del Curso Web, no se manejaron otros programas o aplicaciones.
### Pasos para instalación
1. Copiar este repositorio en su dispositivo.
2. Ingresar la carpeta "FINAL" dentro de la carpeta "php" dentro de la carpeta "htdocs" de la carpeta "XAMPP" en el dispositivo, siguiendo la siguiente ruta : **F:\XAMPP\htdocs\php**.
3. Agrega a tu dispositivo la base de datos llamada "resp_proyceto_cw.sql" bajo el nombre de "proyecto_cw".
4. Abrir el archivo php llamado "menu.php"en el navegador, este se encuentra dentro de la carpeta "FINAL", dentro de la carpeta "Dynamics" y después dentro de la carpeta "PHP".
5. Empezar a usar el archivo y disfrutar de sus funciones.
## Instrucciones de uso
### Instrucciones para el usuario
Al abrir el index mencionado en el apartado anterior, se te enviará a la página de inicio de sesión, si ya tienes una sesión existente será cuestión de ingresarla, en caso contrario deberás seleccionar la opción de registro.
>Dentro de la opción de registro te pedirá que ingreses diversos datos con las siguientes características:
>> * El nombre completo, con espacios, recibe mayúsculas y minúsculas 
>>* El número de cuenta, este tiene que contar con 9 dígitos     
>>* El número telefónico, este debe de contar con 10 dígitos
>>* El grupo, este solo acepta valores del 410 al 669
>>* El nombre del usuario, debe tener mínimo 3 caracteres y máximo 10
>>* La contraseña, esta debe de iniciar con letras y/o números y finalizar con caracteres especiales

Al iniciar sesión se te mandará a la página principal, en esta podrás revisar todas las funciones de la página y elegir la que prefieras.

#### **EN EL CASO DE LA PÁGINA DE BÚSQUEDA**
Te mostrará las publicaciones de objetos que ya se hayan hecho, además que estará incluido un botón "+" que te permitirá ingresar tus publicaciones, las publicaciones incluyen el nombre del objeto, la recompensa, donde se encontró y el número para ponerte en contacto con quien haya hecho la publicación.

#### **EN EL CASO DE LA PÁGINA DE VENTAS** 
Te mostrará las publicaciones de los productos que ya se hayan hecho, además que estará incluido un botón "+" que te permitirá ingresar tus publicaciones, las publicaciones incluyen el nombre del producto, el precio, el horario de venta, un mapa con el lugar donde se puede entregar y el número para ponerte en contacto con quien haya hecho la publicación.  

#### **EN EL CASO DE LA PÁGINA DE FOROS** 
Te mostrará las publicaciones de los foros que ya se hayan hecho, además que estará incluido un botón "+" que te permitirá ingresar tus publicaciones, las publicaciones incluyen el nombre del foro, el tema, una imagen representativa y la opción de unirte al foro.

#### **EN EL CASO DE LA PÁGINA DE JUEGOS** 
Te mostrará las publicaciones de los grupos de juegos que ya se hayan hecho, además que estará incluido un botón "+" que te permitirá ingresar tus publicaciones, las publicaciones incluyen el nombre del juego, una imagen temática, datos de los desarrolladores, fecha de la salida del juego y la clasificación de edad del mismo. 

Además de esto, en el encabezado de la página tenemos un link para la página de la preparatoria (el escudo), una barra de búsqueda, un acceso directo a todas las funciones antes mencionadas y un par de espacios para iniciar sesión y para crear tu usuario.
### Instrucciones para el programador 
Los archivos donde aparecen las publicaciones están hechos en php

Los formularios están hechos en html

La parte de los botones y los eventos está en su mayoría realizado en los JavaScript

##### Sobre la organización de las carpetas

* La carpeta Docs contiene la base de datos y los Wireframes del proyecto.
* La carpeta Dynamics incluye los php y los JavaScript, cada uno de estos divididos en sus respectivas carpetas.
* La carpeta Libs incluye los archivos de bootsrap.
* La carpeta pruebas2 incluye archivos usados para hacer pruebas.
* La carpeta Statics contiene las imágenes y los archivos CSS, repartidos en sus respectivas carpetas.
* La carpeta Templates contienen los archivos html, los cuales son empleados para los formularios.

## Créditos
### Desarrolladores
* José Manuel Vela Gómez: Wireframes, Maquetado, diseño y funcionalidad de: Juegos, Resolución de errores en maquetados, Base de datos y contribuyó en la parte lógica de proyecto en general. 

* Jimena Martínez Méndez: Maquetado, diseño y funcionalidad de: Formulario Inicio de sesión, Registro, Formulario de Objetos perdidos y contribuyó en la parte lógica del proyecto en general.  

* Citlalli Abigail Peredo López: Normalización de base de datos. 

* Fernanda Daniela Calzada Fuentes: Maquetado y diseño de: Formulario de Comunidad, Configuración, Términos y Condiciones, Créditos y Mapa interactivo. 

* Alexei Ramírez Pedroza: Esta hermosa Documentación ;)

* Regina García Portillo: Maquetado y diseño de: Formulario de Ventas. 

* Daniel Salvador Baca López: Organizó carpetas. 
