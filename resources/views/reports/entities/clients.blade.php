<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CLIENTES</title>
	</head>
	<body>
		<div>
			<table class="table">
				<tr style="font-family: consolas;">
					<th colspan="5">
						<img src="Images/logo.jpg">
					</th>
				</tr>
				<tr style="font-family: consolas; font-size: 50px;">
					<th height="40">
						REPORTE DE CLIENTES
					</th>
				</tr>
				<tr style="font-family: consolas; background: #4BB543; color: #fff">
					<th width="20" height="25">RUC ó DNI</th>
					<th width="20" height="25">Razón Social</th>
					<th width="20" height="25">Dirección</th>
					<th width="20" height="25">Departamento</th>
					<th width="20" height="25">Ciudad</th>
					<th width="20" height="25">Provincia</th>
					<th width="20" height="25">Distrito</th>
					<th width="20" height="25">Teléfono</th>
					<th width="20" height="25">Contacto</th>
					<th width="20" height="25">Correo Electronico</th>
					<th width="20" height="25">Teléfono de Contacto</th>
				</tr>
				@if(sizeof($clients) > 0)
					@foreach ($clients as $client)
						<tr style="font-family: consolas;">
							<th width="20" height="25">{{$client->ent_ruc}}</th>
							<th width="20" height="25">{{$client->ent_rz}}</th>
							<th width="20" height="25">{{$client->ent_dir}}</th>
							<th width="20" height="25">{{$client->ent_dpto}}</th>
							<th width="20" height="25">{{$client->ent_ciu}}</th>
							<th width="20" height="25">{{$client->ent_prov}}</th>
							<th width="20" height="25">Distrito</th>
							<th width="20" height="25">Teléfono</th>
							<th width="20" height="25">{{$client->ent_cont}}</th>
							<th width="20" height="25">{{$client->ent_correo}}</th>
							<th width="20" height="25">{{$client->ent_ctel}}</th>
					</tr>
					@endforeach
				@endif
			</table>
		</div>
  </body>
</html>