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
			ELEGIR(V34;
				SI(Y(O34<=(A34+10/100*A34);O34>=(A34-10/100*A34);T34<=10%);"OK";"OUT");
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

["Tasa de dosis VCV (µSv/h)",
"Lectura tasa de dosis del monitor (unidad del monitor)",
"D.S. lecturas monitor",
"Lectura mínima del monitor",
"# Lecturas tomados del monitor",
"Distancia fuente - monitor(m)"]




incert. comb. = 74.9106097 µSv/h
=RAIZ(SUMA.CUADRADOS(M25:M34))

destribución de prob. = normal(K=2)

factor de cobertura k = 2
=SI(M36="normal (k=1)";1;
SI(M36="normal (k=2)";2;
SI(M36="normal (k=3)";3;
SI(M36="rectangular";
RAIZ(3);
SI(M36="triangular";
RAIZ(6);
SI(M36="Prob. U";
RAIZ(2);
"no definido"))))))

Incert. expan. (95%)-Umon= 1.50E+02 µSv/h
=M35*M37

incert. expan. (95%)-Umon= 14982.1219386474
=ELEGIR('F-LSCD-012'!V34;
	M38/I19;
	M38/(I19*1000);
	M38/(I19*1000000);
	M38/(I19*'Datos varios'!$E$119);
	M38/(I19*'Datos varios'!$E$120);
	M38/(I19*'Datos varios'!$E$121);
	M38/(I19*'Datos varios'!$E$122);
	M38/(I19*'Datos varios'!$E$123);"-";
	M38/(I19*'F-LSCD-012'!R34);M38/(I19*'F-LSCD-012'!R34))


Default (dividido entres las fuentes de incertidumbre (siempre calcular con todas)
a
Unidad

Distribución de prob.
valor distribución de prob.
=SI(K25="normal (k=1)";
		1;
	SI(K25="normal (k=2)";
		2;
	SI(K25="normal (k=3)";
		3;
	SI(K25="rectangular";
		RAIZ(3);
	SI(K25="triangular";
		RAIZ(6);
	SI(K25="Prob. U";RAIZ(2);
		"no definido")
		)
	)
)
)

Valor incert estándar
=ELEGIR('F-LSCD-012'!V34;
	I25/L25*I19;
	I25/L25*I19*1000;
	I25/L25*I19*1000000;
	I25/L25*I19*'Datos varios'!$E$119;
	I25/L25*I19*'Datos varios'!$E$120;
	I25/L25*I19*'Datos varios'!$E$121;
	I25/L25*I19*'Datos varios'!$E$122;
	I25/L25*I19*'Datos varios'!$E$123;"-";
	I25/L25*I19*'F-LSCD-012'!R34;I25/L25*I19*'F-LSCD-012'!R34)

contribución %incert. estándar
=M25^2/$M$35^2

unidad incert. estándar

Contribución incert. 1er punto de calibración (antes del ajuste)
dosimetría C.I, patrón de Aleph SAC; 0.00%
Homogeneidad del campo
Repetibilidad de las edicionjes
Posocionamiento longitudinal de la distancia fuente - monitor
Posición de la fuentre en el irradiador
Calibración de la cinta métrica
Resolución de la cinta métrica
Resolución del monitor de radiación
Coeficiente de conversiónAjuste de la curva de dosimetría




"Sonda: Eje longitudinal del detector paralelo al eje central del haz de radiación / Detector interno: Eje longitudinal del detector transversal al eje central del haz de radiación
"															


