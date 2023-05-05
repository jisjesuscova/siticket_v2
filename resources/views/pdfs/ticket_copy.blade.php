<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ticket de Evento</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
			padding: 20px;
		}
		.ticket {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
			max-width: 500px;
			margin: auto;
		}
		h1, h2 {
			text-align: center;
		}
		.event-info {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-top: 30px;
		}
		.event-info div {
			flex-grow: 1;
			text-align: center;
		}
		.qr-code {
			margin-top: 30px;
			text-align: center;
		}
		.logo {
			margin-top: 30px;
			text-align: center;
		}
        .logo > img {
            height: 150px;
		}
	</style>
</head>
<body>
	<div class="ticket">
        <div class="logo">
			<img src="{{ url('/template/dist/img/logo.jpg') }}" alt="Logo de la Empresa">
		</div>
		<h1>Ticket de Evento</h1>
		<h2>Nombre del Evento</h2>
		<div class="event-info">
			<div>
				<p>Fecha: {{ url('/template/dist/img/logo.jpg') }}</p>
				<p>Hora:</p>
			</div>
			<div>
				<p>Lugar:</p>
				<p>Dirección:</p>
			</div>
		</div>
		<div class="qr-code">
			<img src="ruta/qr-code.png" alt="Código QR del Ticket">
		</div>
		
	</div>
</body>
</html>