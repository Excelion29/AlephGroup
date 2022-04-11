=ELEGIR(V34;
	O34/A34-1;
	(O34*1000)/A34-1;
	(O34*1000000)/A34-1;
	(O34*'Datos varios'!$E$119)/A34-1;
	(O34*'Datos varios'!$E$120)/A34-1;
	(O34*'Datos varios'!$E$121)/A34-1;
	(O34*'Datos varios'!$E$122)/A34-1;
	(O34*'Datos varios'!$E$123)/A34-1;"-")
	
	2474.0/25000-1
	
	
	=ELEGIR(V34;
	A34/O34;
	A34/(O34*1000);
	A34/(O34*1000000);
	A34/(O34*'Datos varios'!$E$119);
	A34/(O34*'Datos varios'!$E$120);
	A34/(O34*'Datos varios'!$E$121);
	A34/(O34*'Datos varios'!$E$122);
	A34/(O34*'Datos varios'!$E$123);"-";
	A34/O34;
	A34/O34)
	
	
	=SI(O($C$9="Monitor de radiación (digital)";$C$9="Monitor de radiación (analógico)");
		SI(C34="-";"-";
			SI(C34="full range";"-";
				SI(C34="Alarma off";"10";
					SI(C34="Alarma on";"10";
						SI('Incert. Cal. Mon.'!M39>=10%;
							REDONDEAR.MAS('Incert. Cal. Mon.'!M39;2);
							REDONDEAR.MAS('Incert. Cal. Mon.'!M39;3)
							)
						)
					)
				)
			);
		SI(O($C$9="Dosímetro personal (digital)";$C$9="Dosímetro personal (analógico)";
			$C$9="Dosímetro personal (analógico tipo lapicero)"
			);
		SI('Incert. Cal. Dosímetros pers'!O34>=10%;
			REDONDEAR.MAS('Incert. Cal. Dosímetros pers'!O34;2);
			REDONDEAR.MAS('Incert. Cal. Dosímetros pers'!O34;3)
			)
		)
	)
	
	Monitor de radiación(digital)
	Monitor de radiación(analógico)
	
	=SI(O34="full range";"OUT";
		SI(C9="Monitor de radiación (digital)";
			ELEGIR(V34;
				SI(Y(O34<=(A34+10/100*A34);O34>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
				SI(Y(O34*1000<=(A34+10/100*A34);O34*1000>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
				SI(Y(O34*1000000<=(A34+10/100*A34);O34*1000000>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
				SI(Y(O34*'Datos varios'!$E$119<=(A34+10/100*A34);O34*'Datos varios'!$E$119>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
				SI(Y(O34*'Datos varios'!$E$120<=(A34+10/100*A34);O34*'Datos varios'!$E$120>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
				SI(Y(O34*'Datos varios'!$E$121<=(A34+10/100*A34);O34*'Datos varios'!$E$121>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
				SI(Y(O34*'Datos varios'!$E$122<=(A34+10/100*A34);O34*'Datos varios'!$E$122>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
				SI(Y(O34*'Datos varios'!$E$123<=(A34+10/100*A34);O34*'Datos varios'!$E$123>=(A34-10/100*A34);T34<=10%);"OK";"OUT");"-");
		SI(C9="Monitor de radiación (analógico)";
			ELEGIR(V34;SI(Y(O34<=(A34+10/100*A34);O34>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
				SI(Y(O34*1000<=(A34+10/100*A34);O34*1000>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
				SI(Y(O34*1000000<=(A34+10/100*A34);O34*1000000>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
				SI(Y(O34*'Datos varios'!$E$119<=(A34+10/100*A34);O34*'Datos varios'!$E$119>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
				SI(Y(O34*'Datos varios'!$E$120<=(A34+10/100*A34);O34*'Datos varios'!$E$120>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
				SI(Y(O34*'Datos varios'!$E$121<=(A34+10/100*A34);O34*'Datos varios'!$E$121>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
				SI(Y(O34*'Datos varios'!$E$122<=(A34+10/100*A34);O34*'Datos varios'!$E$122>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
				SI(Y(O34*'Datos varios'!$E$123<=(A34+10/100*A34);O34*'Datos varios'!$E$123>=(A34-10/100*A34);T34<=10%);"OK";"OUT");"-"))))
				
				
				



Fuentes de incertidumbtres
["Dosimetría C.I patrón de aleph SAC","Homogeneidad del campo","Repetibilida de las mediciones","Posicionamiento longitudinal de la distancia fuente - monitor","Posición de la fuente en el irradiador","Calibración de la cinta métrica","Resolución de la cinta métrica","Resolución del monitor de radiación","Coeficiente de conversión","Ajuste de la curva de dosimetría"]
	
Simbolo
["uDos","uhom","urep","upos-l","uf-ir","ucm","ures-cm","ures-mon","ucoef","ucurv"]

Tipo Incert
["A","B"]

Antes del ajuste
Tasa de dosis VCV (µSv/h) = 25000.00
Lectura tasa de dosis del monitor (unidad del monitor) = 0.0100
D.S. lecturas monitor = 0.00
Lectura mínima del monitor = 0.01
# Lecturas tomados del monitor = 10
Distancia fuente - monitor(m) = 1.224


