<head>
	<style>

	/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
		
	</style>
	<style>
		
		.contenedor
		{
			height: 350px;
			width : 600px;
			border: solid 2px;
			border-radius: 13px;
			margin: 40px 90px;

		}
		.imagen
		{
			height: 350px;
			width: 230px;
			background-color: #61C444;
			position: absolute;
			border-radius: 10px 0 0 10px;

		}
		.descripcion
		{
			height: 350px;
			width: 370px;
			background-color: #DCE9D8;
			position: relative;
			float: right;
			border-radius: 0 10px 10px 0;
		}
		.titulo
		{
			color: black;
			margin: 20px;
			text-align: center;
		}

		.imagen-center
		{
			width: 180px;
			height: 180px;
			margin: 0 auto;
		}

		.foto
		{
			width: 180px;
			height: 180px;
			margin: 20px 0;
			border-radius: 92px;
			position: absolute;
		}

		.foto-imagen img
		{
			
			width: 180px;
			height: 180px;
			position: absolute;
			border-radius: 92px;
			border: 1px dotted;
		}

		.datos
		{
			color: white;
			margin: 40px 20px;
		}
		.datos td
		{
			color: black;
			padding: 10px;
		}
		.imagen-sena img
		{
			height: 100px;
			width: 100px;
			
		}
		.imagen-sena
		{
			margin: 20px auto;
			width: 100px;
			
		}

		.datos p
		{
			color: black;
		}

		.saltopagina
		{
			page-break-after:always;
		}
		
	</style>
</head>

<body>
	<div class="frontal">
		<div class="contenedor">

			<div class="imagen">
				<div class="imagen-center">
					<div class="foto">
									
					</div>
					<div class="foto-imagen">
						<img src="img/bart.png" >
					</div>			
				</div>
				<div class="imagen-sena">
					<img src="img/sena.png">
				</div>
			</div>
			<div class="descripcion">

				<div class="titulo">
					<h5>SERVICIO NACIONAL DE APRENDIZAJE<h5>
				</div>
				<div class="datos">
					<ul>
						<table>
							<tr style="width:100px">
								<td>NOMBRES:</td>
								<td>DAVID STEVEN</td>
							</tr>
							<tr>
								<td>APELLIDOS:  </td>
								<td>MARTINEZ VARGAS</td>
							</tr>
							<tr>
								<td>RH:  </td>
								<td>O</td>
							</tr>
							<tr>
								<td>FACTOR:  </td>
								<td>+</td>
							</tr>
							<tr>
								<td>FICHA:  </td>
								<td>11111</td>
							</tr>
							<tr>
								<td>PROGRAMA:  </td>
								<td>ADSI</td>
							</tr>
						</table>
					</ul>
				</div>
			</div>
	</div>

	<div class="reverso">
		<div class="contenedor">

			
			<div class="descripcion-reverso">

				<div class="titulo">
					<h5>TERMINOS Y CONDICIONES<h5>
				</div>
				<div class="datos">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
	</div>

	<div class="saltopagina"></div>	
 </body> 