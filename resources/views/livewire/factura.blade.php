
<body>
<div style="	width: 95%;
margin: 15px auto 10px auto;">
	<table style="width: 100%;
	margin-bottom: 10px;">
		<tr>
			<td style="width: 25%;height:25%;text-align: left;">
				<div>
					<img style=" max-width: 100%;
					max-height: 100%;" src="img/logo.jpeg">
				</div>
			</td>
			<td style="width: 50%;
			text-align: center;">
				<div>
					<span style="font-family: 'BrixSansBlack';
					font-size: 16pt;">TIENDA KMJA</span>
					<p>Lo mejor en Tecnología, Ecuador</p>
					<p>Teléfono: +(502) 2222-3333</p>
					<p>Email: KMJA@gmail.com</p>
				</div>
			</td>
			<td style="	width: 25%;">
				<div style="border-radius: 10px;
				border: 1px solid #0a4661;
				overflow: hidden;
				padding-bottom: 15px;">
					<span style="font-family: 'BrixSansBlack';
					font-size: 12pt;
					display: block;
					background: #0a4661;
					color: #FFF;
					text-align: center;
					padding: 3px;
					margin-bottom: 5px;">Factura</span>
					<p>No. Factura: <strong>000001</strong></p>
					<p>Fecha: 21/06/2012</p>
					<p>Hora: 18:30 PM</p>
					<p>Vendedor Virtual: MARIA GARCIA</p>
				</div>
			</td>
		</tr>
	</table>
	<table style="width: 100%;
	margin-bottom: 10px;">
		<tr>
			<td style="width: 100%;">
				<div style="border-radius: 10px;
				border: 1px solid #0a4661;
				overflow: hidden;
				padding-bottom: 15px;">
					<span style="font-family: 'BrixSansBlack';
					font-size: 12pt;
					display: block;
					background: #0a4661;
					color: #FFF;
					text-align: center;
					padding: 3px;
					margin-bottom: 5px;">Cliente</span>
					<table style="width: 100%;">
						@foreach ($clientes as $cliente )
							
						
						<tr>
							<td><label>Email:</label><p>{{$cliente->email}}</p></td>
							<td><label>Teléfono:</label> <p>{{$cliente->telefono}}</p></td>
						</tr>
						<tr>
							<td><label>Nombre:</label> <p>{{$cliente->nombre}}</p></td>
							<td><label>Dirección:</label> <p>{{$cliente->direccion}}</p></td>
						</tr>
						@endforeach
					</table>
				</div>
			</td>

		</tr>
	</table>

	<table style="border-collapse: collapse;background: #058167;
	color: #FFF;
	padding: 5px;">
	@foreach ($carrito as $car )
	@endforeach
			<thead>
				<tr>
					<th width="50px">Cant.</th>
					<th style="	text-align: left;">Descripción</th>
					<th style="	text-align: right;" width="150px">Precio Unitario.</th>
					<th style="	text-align: right;" width="150px"> Precio Total</th>
				</tr>
			</thead>
			@foreach ($productos as $produc )
			
			<tbody style=" background: #fdfdfd;">
				<tr>
					<td style=" color: black; text-align: center;">{{$car->cantidad}}</td>
					<td style="color: black">{{$produc->producto}}</td>
					<td style="color: black;	text-align: right;">{{$produc->precio}}</td>
					<td style="color: black;	text-align: right;">{{$produc->precio}}</td>
				</tr>
			
			
			</tbody>
			
			@endforeach
			<tfoot style="font-family: 'BrixSansBlack';">
				<tr>
					<td colspan="3" style="	text-align: right;"><span>SUBTOTAL Q.</span></td>
					<td style="	text-align: right;"><span>{{$produc->precio}}</span></td>
				</tr>
				<tr>
					<td colspan="3"style="	text-align: right;"><span>IVA (12%)</span></td>
					<td style="	text-align: right;"><span>12</span></td>
				</tr>
				<tr>
					<td colspan="3" style="	text-align: right;"><span>TOTAL Q.</span></td>
					<td style="	text-align: right;"><span>212</span></td>
				</tr>
		</tfoot>
	</table>
	<div>
		<p style="font-size: 8pt;">Si usted tiene preguntas sobre esta factura, <br>pongase en contacto con nombre, teléfono y Email</p>
		<h4 style="font-family: verdana;
		font-weight: bold;
		font-style: italic;
		text-align: center;
		margin-top: 20px;">¡Gracias por su compra!</h4>
	</div>

</div>

</body>
</html>