<?php 
$correo=$row_site_info['ciudad'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];
$celular=$_POST['celular'];
$mensaje=$_POST['mensaje'];

$cuerpo= "Ha recibido un mesaje de: $nombre

Datos enviados:

Email: $email
Telefono: $telefono 
Celular: $celular
Ciudad: $ciudad

Mensaje: $mensaje";
mail("chechucarrasco@gmail.com", "Mensaje desde www.dominio.com", $cuerpo,"From: Contacto_www.dominio.com");  
?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/basica.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Contacto</title>
<!-- InstanceEndEditable -->
<meta name="description" content="Agencia de viajes especializada en experiencias únicas">
<meta name="keywords" content="Viajes, experiencias, viajar, aventuras">
<link href="../favicon.ico" rel="shortcut icon">
<!-- Adjuntamos hojas de estilos -->
<link href="../css/main.css" rel="stylesheet" type="text/css">
<link href="../css/menu.css" rel="stylesheet" type="text/css">
<link href="../css/forms.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<!-- Contenedor principal de la página -->
<div id="contenedor">
	<!-- Encabezado -->
	<div id="encabezado">
    	<img src="../img/logoExplora.png" width="190" height="54" alt="Imagen del logo de la empresa" id="logo"/><img src="../img/encabezado.jpg" width="960" height="200" alt="Imagen del encabezado"/>
    	<div id="menu">
        	<ul>
            	<li><a href="../index.html">Inicio</a></li>
                <li><a href="../promociones.html">Promociones</a></li>
                <li><a href="../nosotros.html">Nosotros</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </div>
  </div>
    <div id="contenido"><!-- InstanceBeginEditable name="contenido" -->
    <h1>Mensaje enviado!</h1>
    <p><img src="../img/correo.jpg" alt="enviado correos" width="600" height="399" class="fotos" /></p>
    <p>Pronto nos comunicaremos con usted.    </p>
    <!-- InstanceEndEditable --></div>
    <div id="lateral">
    	<img src="../img/bogota.jpg" width="200" height="200" class="fotos"> 
   	  <h2>Promoción del mes</h2>

		<p>Para el mes de Mayo te llevamos por un increí­ble tour en la ciudad de Bogotá donde podrás 		conocer los lugares más interesantes de esta ciudad. Ver más información...
        </p>
    </div>
    <div id="pie">
    	<p>Explora, la empresa de viajes turí­sticos lí­der de Colombia</p>
		<p>Carrera 28 No. 28-124 - Los Ciruelos - Teléfono (571-8943256)</p>
		<p>Bogotá - Colombia</p>
    </div>
</div>
</body>
<!-- InstanceEnd --></html>
