<!DOCTYPE html>
<html lang=es>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/inicio.css">
	<script src="https://maps.googleapis.com/maps/api/js"></script>

	<title>Mariachi</title>
</head>
<body>
	<section id="presentacion">
		<h1 id="presentacion-titulo" class="texto_centrado">Título de la seccion</h1>
		<p id="presentacion-frase" class="texto_centrado">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum cum asperiores quas minus quod quo, rerum aliquam iste, neque explicabo natus fuga ratione magni nemo sequi, officiis quam eum in!</p>

		<section id="presentacion-contacto">
			<div id="presentacion-contacto-telefonos" class="float_left">
				<ul>
					<li class="icon-phone"> (55) 5555 5555</li>
					<li class="icon-mobile"> (044) 55 5555 5555</li>
				</ul>
			</div>
			<div id="presentacion-contacto-direccion" class="icon-location float_right"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
		</section>
	</section>
	<div id="fondo_secundario"></div>
	
	<section id="contenedor">
		<div id="repertorio">
			<div id="repertorio-contenedor">
				<p class="justificado">Tenemos un amplio repertorio para su deleite…. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, rem harum necessitatibus rerum sequi iusto minima praesentium quis saepe blanditiis impedit molestias, quo dolores. Blanditiis architecto, praesentium voluptatibus ea eligendi!</p>
				<p class="justificado">Contamos con: sones,valses, danzones, pasos dobles, cumbias, boleros, rancheras, polkas, huapangos, música clásica, corridos, norteñas, etc, etc.</p>
				<ul>
					<span>BOLEROS <hr /></span>
					<li>Como fue</li>
					<li>Loco</li>
					<li>El loco</li>
					<li>Payaso</li>
					<li>Cataclismo</li>
					<li>La media buelta</li>
					<li>Si nos dejan</li>
					<li>Lloraras</li>
					<li>En mi viejo san juan</li>
					<li>Si dios me quita la vida</li>
				</ul>
				<ul>
					<span>SERENATAS <hr /></span>
					<li>Contigo aprendi</li>
					<li>Yo quiero ser</li>
					<li>Novia mia</li>
					<li>Despierta</li>
					<li>Bonita</li>
					<li>Amor de los dos</li>
					<li>Sabes una cosa</li>
					<li>El milagro de tus ojos</li>
					<li>Serenata huasteca</li>
					<li>Paloma querida</li>
				</ul>
				<ul>
					<span>RANCHERAS <hr /></span>
					<li>Aca entre nos</li>
					<li>La ley del monte</li>
					<li>Renunciacion</li>
					<li>Cuatro meses</li>
					<li>La puerta negra</li>
					<li>Las llaves de mi alma</li>
					<li>Juan charrasqueado</li>
					<li>El perro negro</li>
					<li>Mujeres divinas</li>
					<li>Boemio de aficion</li>
				</ul>
				<ul>
					<span>HUAPANGOS <hr /></span>
					<li>Serenata huasteca</li>
					<li>El mil amores</li>
					<li>El gustito</li>
					<li>El querreque</li>
					<li>El hidalguense</li>
					<li>La cecilia</li>
					<li>Tu enamorado</li>
					<li>El siete mares</li>
					<li>Ni contigo ni sin ti</li>
					<li>A la luz de los cocuyos</li>
				</ul>
			</div>
		</div>
		<div id="contacto">
			<div id="contacto-contenedor">
				<p><strong>Contactanos</strong></p>
				<form id="contacto-form" class="float_left">
					<table id="contacto-form-tbl">
						<caption>Formulario de contacto</caption>
						<tbody>
							<tr>
								<td>
									<p>Por favor ingresa la siguiente información y nosotros nos pondremos en contacto contigo lo antes posible. </p>
								</td>
							</tr>
							<tr>
								<td><input type="text" name="contacto[nombre]" id="" placeholder="Tu nombre"/></td>
							</tr>
							<tr>
								<td><input type="text" name="contacto[correo]" id="" placeholder="Tu correo electrónico"/></td>
							</tr>
							<tr>
								<td><input type="text" name="contacto[telefono]" id="" placeholder="Tu teléfono"/></td>
							</tr>
							<tr>
								<td><textarea name="contacto[comentario]" placeholder="¿En qué podemos ayudarte?"></textarea></td>
							</tr>
						</tbody>
					</table>
					<input type="button" value="Enviar" id="contacto-form-btn" class="float_right" />
				</form>
				<div id="contacto-informacion" class="float_right">
					<p>Ubicados en:</p>
					<div id="contacto-informacion-mapa"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptatibus blanditiis nostrum libero nam voluptate ea eos officiis, ab doloribus nemo, ducimus illum in veniam neque veritatis obcaecati sint impedit. </p>
					<p>Teléfonos:</p>
					<ul id="contacto-informacion-telefonos">
						<li>(55) 5555 5555</li>
						<li>(55) 5555 5555</li>
					</ul>
				</div>
			</div>
		</div>
		<footer id="footer"><p>© 2014-2015 Mariachi Mil Soles</p></footer>
	</section>

	<script src="js/vendor/jquery.js"></script>
	<script src="js/inicio.js"></script>
</body>
</html>