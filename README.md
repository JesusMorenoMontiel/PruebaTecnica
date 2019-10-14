# Prueba técnica:

En este ejercicio existen don ficheros principales.

* INDEX.PHP que muestra varios datos dados por la API y muestra una FOTO o un
VIDEO dependiendo de donde cliquemos.

Botón video: tiene que enseñar durante 30 segundos el video adjuntado y ocultar
mientras tanto la preview. Tras estos 30 segundos, se tiene que volver a enseñar
la preview.

Botón image: tiene que enseñar durante 30 segundos la imagen adjuntada y ocultar
mientras tanto la preview. Tras estos 30 segundos, se tiene que volver a enseñar
la preview.

Botón API: Hemos creado una API que devuelve al azar información en XML, JSON y
txt. Cuando pulséis el botón tenéis que interpretar la información y poner
algunos datos en un contenedor. Es a vosotros de poner esta información como
queráis. No es necesario que ocultéis la preview ni nada, solo poner en un sitio
visible alguno de los campos que os devuelva la API. Los campos del JSON, del
XML y del TXT no van a cambiar, por lo que la estructura siempre va a ser la misma.

* Por otro lado esta REMOTE.PHP que cuenta con 3 botones y dependiendo de cual
cliquemos nos redirige a INDEX.PHP con un video u otro dentro del iframe.


* He tenido que copiar el JSON que devolvía el ejercicio y modificarlo, por eso
dentro de FUNCTIONS.PHP cuando diferencio si es un XML o un JSON, cargo un JSON
que tengo en local, Porque con el dado por la API me da error de sintaxis.

* He tirade de Jquery para hacer efectos de ocultar y mostrar elementos,
redireccionar a index.php y llamar a las funciones cuando clicamos
en los botones.
