<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>



<div class="container">
	<div class="form-group " id="codigo">

	</div>
</div>


<!-- <div class="container-fluid">
	<table class="table FORMLSCD012 table-sm table-dark table-responsive">
		<tbody>
			<tr>
				<th>Referencia</th>
				<td>0T 111-1295</td>					
			</tr>
			<tr>
				<th>Cliente</th>
				<td>ALEPH SAC</td>
			</tr>
			<tr>
				<th>Dirección</th>
				<td>Av. Rafael Escardo 154</td>
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
					10
				</td>
			</tr>
			<tr>
				<th>Marca monitor</th>
				<td>MGP</td>
			</tr>
			<tr>
				<th>Modelo monitor</th>
				<td>DMC 2000S</td>
			</tr>
			<tr>
				<th>Serie monitor</th>
				<td>690384T</td>
			</tr>
			<tr>
				<th>Marca Sonda</th>
				<td>-</td>
			</tr>
			<tr>
				<th>Modelo Sonda</th>
				<td>-</td>
			</tr>
			<tr>
				<th>Serie sonda</th>
				<td>-</td>
			</tr>
			<tr>
				<th>Fecha de recepción</th>
				<td>2021-05-20</td>
			</tr>
			<tr>
				<th>Fecha de inicio de calibr.</th>
				<td>2021-05-20</td>
			</tr>
			<tr>
				<th>Fecha de fin de calibr.</th>
				<td>2021-05-20</td>
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
				<td>S-Cs (ISO 4037-3)</td>
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
				<td></td>
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
				<td>029-2021</td>
			</tr>
			<tr>
				<th>Fecha emisión informe</th>
				<td>2021-05-20</td>
			</tr>
		</tbody>
	</table>
</div> -->





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
  var pdf_array = '<?=json_encode($con);?>';
  var pdf_list = String(pdf_array).split("\n");
  
  console.log((String(pdf_array).split("\n"))[2]);
  var codigo_content = document.getElementById('codigo');
  var código = document.createElement('p');
  código.appendChild(document.createTextNode( pdf_list[0]));
  codigo_content.appendChild(código);
  

  
</script>
