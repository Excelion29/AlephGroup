<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<!-- 
<div class="container">
	<div class="form-group " id="codigo">

	</div>
</div> -->

<div class="form-group">
  <label for="file_report">Document</label>
  <input type="file" class="form-control-file" name="" id="file_report" placeholder="document.pdf" aria-describedby="fileHelpId">
</div>

<div class="container-fluid">
	<table class="table FORMLSCD012 table-sm table-dark table-responsive">
		<tbody>
			<tr>
				<th>Referencia</th>
				<td>
					<div id="code">
					</div>
				</td>			
			</tr>
			<tr>
				<th>Cliente</th>
				<td>
					<div id="client">
					</div>
				</td>
			</tr>
			<tr>
				<th>Dirección</th>
				<td>
					<div id="direction">
					</div>
				</td>
				<th>Dsitrito</th>
				<td>
					<select class="selecet_LSCD" name="" id="">
						<option value="" selected disabled>Selected</option>
					</select>
				</td>
				<th>Provincia</th>
				<td>
					<select class="selecet_LSCD" name="" id="">
						<option value="" selected disabled>Selected</option>
					</select>
				</td>
				<th>Departamento</th>
				<td>
					<select class="selecet_LSCD" name="" id="">
						<option value="" selected disabled>Selected</option>
					</select>
				</td>
				<th>País</th>
				<td> 
					<select id="SelectedCountry" class="selecet_LSCD form-control select2 select2-hidden-accessible" style="width: 150px;"  tabindex="-1" aria-hidden="true">
					</select>
				</td>
			</tr>
			<tr>
				<th>Equipo</th>
				<td>
					<select class="selecet_LSCD" name="" id="">
						<option value="" selected disabled>Selected</option>
						<option value="Monitor de readiación (digital)">Monitor de readiación (digital)</option>
						<option value="Monitor de readiación (analógico)">Monitor de readiación (analógico)</option>
						<option value="Dosimetría personal (digital)">Dosimetría personal (digital)</option>
						<option value="Dosimetría personal (analógico)">Dosimetría personal (analógico)</option>
						<option value="Dosímetro personal (con indicación audible)">Dosímetro personal (con indicación audible)</option>
						<option value="Dosímetro personal (analógico tipo lapicero)">Dosímetro personal (analógico tipo lapicero)</option>
					</select>
				</td>
				<th>Precisión</th>
				<td>
					<input type="text" name="" id="" value="10" disabled>
				</td>
			</tr>
			<tr>
				<th>Marca monitor</th>
				<td>
					<div id="mc_monitor_content">

					</div>
			</tr>
			<tr>
				<th>Modelo monitor</th>
				<td>
					<div id="md_monitor_content">

					</div>
				</td>
			</tr>
			<tr>
				<th>Serie monitor</th>
				<td>
					<div id="sr_monitor_content">

					</div>
				</td>
			</tr>
			<tr>
				<th>Marca Sonda</th>
				<td>
					<div id="mr_sonda_content">

					</div>
				</td>
			</tr>
			<tr>
				<th>Modelo Sonda</th>
				<td>
					<div id="md_sonda_content">

					</div>
				</td>
			</tr>
			<tr>
				<th>Serie sonda</th>
				<td>
					<div id="sr_sonda_content">

					</div>
				</td>
			</tr>
			<tr>
				<th>Fecha de recepción</th>
				<td>
					<?php  echo date("Y-m-d"); ?>
				</td>
			</tr>
			<tr>
				<th>Fecha de inicio de calibr.</th>
				<td>
					<?php  echo date("Y-m-d"); ?>
				</td>
			</tr>
			<tr>
				<th>Fecha de fin de calibr.</th>
				<td>
					<?php  echo (date("Y"."-m"."-30")); ?>
				</td>
			</tr>
			<tr>
				<th>Procedimiento de calib.</th>
				<td>
					<select class="selecet_LSCD" name="" id="">
						<option value="" selected disabled>Selected</option>
						<option value="Campo de radiación calibrado usando un fantoma, según ISO 4037-3 (2019), aplicado al PROC-LSCD-001 Irradiación controlada de dosímetros personales (versión 05)">Campo de radiación calibrado usando un fantoma, según ISO 4037-3 (2019), aplicado al PROC-LSCD-001 Irradiación controlada de dosímetros personales (versión 05)</option>
						<option value="Campo de radiación calibrado en aire, según ISO 4037-3 (2019), aplicado al PROC-LSCD-008 Calibración dosimétrica de monitor de radiación portátil (versión 07)">Campo de radiación calibrado en aire, según ISO 4037-3 (2019), aplicado al PROC-LSCD-008 Calibración dosimétrica de monitor de radiación portátil (versión 07)</option>
						<option value="Campo de radiación calibrado en aire, según ISO 4037-3 (2019), aplicado al PROC-LSCD-009 Calibración dosimétrica de monitor de radiación de área (versión 07)">Campo de radiación calibrado en aire, según ISO 4037-3 (2019), aplicado al PROC-LSCD-009 Calibración dosimétrica de monitor de radiación de área (versión 07)</option>
						<option value="Campo de radiación calibrado usando un fantoma, según ISO 4037-3 (2019), aplicado al PROC-LSCD-012 Calibración de dosímetros personales (versión 05)">Campo de radiación calibrado usando un fantoma, según ISO 4037-3 (2019), aplicado al PROC-LSCD-012 Calibración de dosímetros personales (versión 05)</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Patrón de referencia</th>
				<td>
					Cámara de ionización patrón de 1 L , marca: PTW; modelo: TN32002; serie: 000568; Reporte de calibración de Kerma en aire DG: 13580-21 con fecha 2021-04-01 (NIST); trazable al NIST.
				</td>
			</tr>
			<tr>
				<th>Calidad de readiación</th>
				<td>
					<div id="cal_rad">						
					</div>
				</td>
			</tr>
			<tr>
				<th>Geometría de irradiación</th>
				<td>
					<select class="selecet_LSCD" name="" id="">
						<option value="" selected disabled>Selected</option>
						<option value="Campo de radiación calibrado usando un fantoma, según ISO 4037-3 (2019), aplicado al PROC-LSCD-001 Irradiación controlada de dosímetros personales (versión 05)">Campo de radiación calibrado usando un fantoma, según ISO 4037-3 (2019), aplicado al PROC-LSCD-001 Irradiación controlada de dosímetros personales (versión 05)</option>
						<option value="Campo de radiación calibrado en aire, según ISO 4037-3 (2019), aplicado al PROC-LSCD-008 Calibración dosimétrica de monitor de radiación portátil (versión 07)">Campo de radiación calibrado en aire, según ISO 4037-3 (2019), aplicado al PROC-LSCD-008 Calibración dosimétrica de monitor de radiación portátil (versión 07)</option>
						<option value="Campo de radiación calibrado en aire, según ISO 4037-3 (2019), aplicado al PROC-LSCD-009 Calibración dosimétrica de monitor de radiación de área (versión 07)">Campo de radiación calibrado en aire, según ISO 4037-3 (2019), aplicado al PROC-LSCD-009 Calibración dosimétrica de monitor de radiación de área (versión 07)</option>
						<option value="Campo de radiación calibrado usando un fantoma, según ISO 4037-3 (2019), aplicado al PROC-LSCD-012 Calibración de dosímetros personales (versión 05)">Campo de radiación calibrado usando un fantoma, según ISO 4037-3 (2019), aplicado al PROC-LSCD-012 Calibración de dosímetros personales (versión 05)</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Punto de referencia</th>
				<td>
					<select class="selecet_LSCD" name="" id="">
						<option value="" selected disabled>Selected</option>
						<option value="Centro geométrico del volumen sensible del detector Geiger-Mueller">Centro geométrico del volumen sensible del detector Geiger-Mueller</option>
						<option value="Centro geométrico del volumen sensible del detector">Centro geométrico del volumen sensible del detector</option>
						<option value="Centro geométrico de la cámara de ionización del monitor (intersección de la proyección de los puntos blancos)">Centro geométrico de la cámara de ionización del monitor (intersección de la proyección de los puntos blancos)</option>
						<option value="Centro geométrico de la cámara de ionización del monitor">Centro geométrico de la cámara de ionización del monitor</option>
						<option value="'Centro geométrico de la cámara de ionización">Centro geométrico de la cámara de ionización</option>						
					</select>
				</td>
			</tr>
			<tr>
				<th>Rango de calibración</th>
				<td><input type="text" disabled><a class="a_edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
				<th>Unidad</th>
				<td>
				<select required="true" id="unidad0" >
					<option selected="selected" value="" disabled="true">Selected</option>
					<option value="µSv">µSv</option>
					<option value="mSv">mSv</option>
					<option value="Sv">Sv</option>
					<option value="R">R</option>
					<option value="mR">mR</option>
					<option value="µR">µR</option>
					<option value="rem">rem</option>
					<option value="mrem">mrem</option>
				</select>
				</td>
				<th>Magnitud</th>
				<td>
					<select class="selecet_LSCD" name="" id="">
						<option value="" disabled selected>Selected</option>
						<option value="Dosis equivalente personal, Hp(10)">Dosis equivalente personal, Hp(10)</option>
						<option value="Dosis equivalente personal, Hp(0,07)">Dosis equivalente personal, Hp(0,07)</option>
						<option value="Dosis absorbida, D(10)">Dosis absorbida, D(10)</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Informe Nº</th>
				<td><?php echo rand(01,365) . '-' . date("Y");?></td>
			</tr>
			<tr>
				<th>Fecha emisión informe</th>
				<td><?php  echo (date("Y"."-m"."-30")); ?></td>
			</tr>
		</tbody>
	</table>
</div>




<style>
	.select2{
		width: 100%;
	}
	body{
		font-size: 12px;
	}
	.FORMLSCD012 > :not(caption) > * > * {
  		padding: .2rem .5rem;
	}
	.selecet_LSCD{
		width:150px;
	}
	.a_edit{
		margin-left: 5px;
		color: greenyellow;
	}
	
</style>

<script>	
	const settings = {
		"async": true,
		"crossDomain": true,
		"url": "https://restcountries.com/v3.1/all",
		"method": "GET",
	};

	$.ajax(settings).done(function (response) {
		var select = document.getElementById('SelectedCountry');
		var OPT0 = document.createElement('option');
			OPT0.setAttribute('selected', 'selected');
			OPT0.setAttribute('value','');
			OPT0.setAttribute('disabled','true');
			OPT0.appendChild( document.createTextNode( 'Selected' ) );
			for (let index = 0; index < response.length; index++) {
				var option = document.createElement('option')
				option.setAttribute('value',response[index]['name']['common'])
				option.appendChild( document.createTextNode( response[index]['name']['common'] ) )
				select.appendChild(option);
				}
		select.appendChild(OPT0);
	});

	$('.select2').select2({});
</script>
<?php 
	include_once("./vendor/autoload.php");
	$parseador = new \Smalot\PdfParser\Parser();
	$nombreDocumento = "OT 15139SP.pdf";
	$documento = $parseador->parseFile($nombreDocumento);
	$details = $documento->getDetails();
	$pages = $documento->getPages();
	$page = $pages[0]->getText();
	foreach ($pages as $page) {
		$con[] = $page->getText();
	}
	echo "<pre>";
	echo json_encode($details);
	echo '<br>';
	echo json_encode($con);
	echo "</pre>";

?>
<script>
	
	function changed_status(id_element){
		var element = document.getElementById(id_element);
		element.disabled = false;
	};

	var pdf_array = '<?=json_encode($con);?>';
	var pdf_list = String(String(pdf_array).split('["')).split("\n");
  
	console.log(String(pdf_array).split("\n"));
  

	var codigo_content = document.getElementById('code');
	var code_p = document.createElement('p');
	code_p.appendChild(document.createTextNode( pdf_list[2]));
	codigo_content.appendChild(code_p);

	var client_content = document.getElementById('client');
	var client_p = document.createElement('p');
	client_p.appendChild(document.createTextNode( pdf_list[0].slice(28)));
	client_content.appendChild(client_p);

	var direct_content = document.getElementById('direction');
	var direct_p = document.createElement('p');
	direct_p.appendChild(document.createTextNode( pdf_list[12].slice(12,60)));
	direct_content.appendChild(direct_p);


	var mc_monitor_content = document.getElementById('mc_monitor_content');
	var md_monitor_content = document.getElementById('md_monitor_content');
	var sr_monitor_content = document.getElementById('sr_monitor_content');
	var mr_sonda_content = document.getElementById('mr_sonda_content'); 
	var md_sonda_content = document.getElementById('md_sonda_content');
	var sr_sonda_content = document.getElementById('sr_sonda_content');
	var cal_rad_content = document.getElementById('cal_rad');


	// 1
	var mc_monitor_p = document.createElement('input');
	mc_monitor_p.setAttribute('value', pdf_list[142].slice(0,10));
	mc_monitor_p.setAttribute('id', "mc_monitor");
	mc_monitor_p.setAttribute('disabled',true);

	var mc_monitor_a = document.createElement('a');
	mc_monitor_a.setAttribute("onclick",'changed_status("mc_monitor")');
	mc_monitor_a.setAttribute("class","a_edit");

	var mc_monitor_i = document.createElement('i');
	mc_monitor_i.setAttribute("class","fa fa-pencil-square-o");
	mc_monitor_i.setAttribute("aria-hidden",true);
	mc_monitor_a.appendChild(mc_monitor_i);
	
	mc_monitor_content.appendChild(mc_monitor_p);
	mc_monitor_content.appendChild(mc_monitor_a);
	// 2
	var md_monitor_p = document.createElement('input');
	md_monitor_p.setAttribute('value', pdf_list[142].slice(0,10));
	md_monitor_p.setAttribute('id', "md_monitor");
	md_monitor_p.setAttribute('disabled',true);

	var md_monitor_a = document.createElement('a');
	md_monitor_a.setAttribute("onclick",'changed_status("md_monitor")');
	md_monitor_a.setAttribute("class","a_edit");
	md_monitor_a.setAttribute("id","a_edit");

	var md_monitor_i = document.createElement('i');
	md_monitor_i.setAttribute("class","fa fa-pencil-square-o");
	md_monitor_i.setAttribute("aria-hidden",true);
	md_monitor_a.appendChild(md_monitor_i);
	
	md_monitor_content.appendChild(md_monitor_p);
	md_monitor_content.appendChild(md_monitor_a);
	// 3
	var sr_monitor_p = document.createElement('input');
	sr_monitor_p.setAttribute('value', pdf_list[142].slice(0,10));
	sr_monitor_p.setAttribute('id', "sr_monitor");
	sr_monitor_p.setAttribute('disabled',true);

	var sr_monitor_a = document.createElement('a');
	sr_monitor_a.setAttribute("onclick",'changed_status("sr_monitor")');
	sr_monitor_a.setAttribute("class","a_edit");

	var sr_monitor_i = document.createElement('i');
	sr_monitor_i.setAttribute("class","fa fa-pencil-square-o");
	sr_monitor_i.setAttribute("aria-hidden",true);
	sr_monitor_a.appendChild(sr_monitor_i);
	
	sr_monitor_content.appendChild(sr_monitor_p);
	sr_monitor_content.appendChild(sr_monitor_a);
	// 4
	var mr_sonda_p = document.createElement('input');
	mr_sonda_p.setAttribute('value', pdf_list[142].slice(0,10));
	mr_sonda_p.setAttribute('id', "mr_sonda");
	mr_sonda_p.setAttribute('disabled',true);

	var mr_sonda_a = document.createElement('a');
	mr_sonda_a.setAttribute("onclick",'changed_status("mr_sonda")');
	mr_sonda_a.setAttribute("class","a_edit");

	var mr_sonda_i = document.createElement('i');
	mr_sonda_i.setAttribute("class","fa fa-pencil-square-o");
	mr_sonda_i.setAttribute("aria-hidden",true);
	mr_sonda_a.appendChild(mr_sonda_i);
	
	mr_sonda_content.appendChild(mr_sonda_p);
	mr_sonda_content.appendChild(mr_sonda_a);
	// 5
	var md_sonda_p = document.createElement('input');
	md_sonda_p.setAttribute('value', pdf_list[142].slice(0,10));
	md_sonda_p.setAttribute('id', "md_sonda");
	md_sonda_p.setAttribute('disabled',true);
	
	var md_sonda_a = document.createElement('a');
	md_sonda_a.setAttribute("onclick",'changed_status("md_sonda")');
	md_sonda_a.setAttribute("class","a_edit");

	var md_sonda_i = document.createElement('i');
	md_sonda_i.setAttribute("class","fa fa-pencil-square-o");
	md_sonda_i.setAttribute("aria-hidden",true);
	md_sonda_a.appendChild(md_sonda_i);
	
	md_sonda_content.appendChild(md_sonda_p);
	md_sonda_content.appendChild(md_sonda_a);
	// 6
	var sr_sonda_p = document.createElement('input');
	sr_sonda_p.setAttribute('value', pdf_list[142].slice(0,10));
	sr_sonda_a.setAttribute("id",'sr_sonda');
	sr_sonda_p.setAttribute('disabled',true);

	var sr_sonda_a = document.createElement('a');
	sr_sonda_a.setAttribute("class","a_edit");
	sr_sonda_a.setAttribute("onclick",'changed_status("sr_sonda")');
	sr_sonda_a.setAttribute("id","a_edit");

	var sr_sonda_i = document.createElement('i');
	sr_sonda_i.setAttribute("class","fa fa-pencil-square-o");
	sr_sonda_i.setAttribute("aria-hidden",true);
	sr_sonda_a.appendChild(sr_sonda_i);
	
	sr_sonda_content.appendChild(sr_sonda_p);
	sr_sonda_content.appendChild(sr_sonda_a);
	// 7
	var cal_red_p = document.createElement('input');
	cal_red_p.setAttribute('value', pdf_list[142].slice(0,10));
	cal_red_p.setAttribute('id', 'cald_rad');
	cal_red_p.setAttribute('disabled',true);

	var cal_red_a = document.createElement('a');
	cal_red_a.setAttribute("class","a_edit");
	cal_red_a.setAttribute("id","a_edit");

	var cal_red_i = document.createElement('i');
	cal_red_i.setAttribute("class","fa fa-pencil-square-o");
	cal_red_i.setAttribute("aria-hidden",true);
	cal_red_a.appendChild(cal_red_i);

	cal_rad_content.appendChild(cal_red_p);
	cal_rad_content.appendChild(cal_red_a);
</script>
