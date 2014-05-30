<?php
	function geraGrafico($largura, $altura, $valores, $referencias, $tipo = "p3"){
		$valores = implode(',', $valores);
		$referencias = implode('|', $referencias);
	
		return "http://chart.apis.google.com/chart?chs=" 
				.$largura ."x". $altura 
				. "&amp;chd=t:" . $valores 
				. "&amp;chds=a&amp;cht=lc&amp;chl=" . $referencias;
	}
	
	
	
//BRASIL
/*
<br/><br/>

<?php $grafico = geraGrafico(1000, 300, 
		array("27,29"
			, "71,1"
			, "1,12"
			, "4,87"
			, "36,81"
			, "88,12"
			, "116,99"
			, "156,13"
			, "326,59"
			, "54,48"
			, "63,89"
			, "225,97"
			, "401,63"
			, "156,88"
			, "40,01"
			, "82,28"
			, "143,19"
			, "264,88"
			, "293,35"),
		 
		array("1990"
			, "1991"
			, "1992"
			, "1993"
			, "1994"
			, "1995"
			, "1996"
			, "1997"
			, "1998"
			, "1999"
			, "2000"
			, "2001"
			, "2002"
			, "2003"
			, "2004"
			, "2005"
			, "2006"
			, "2007"
			, "2008")) ?>
<img src="<?php echo $grafico ?>" title="Grafico gerado pelo Google Chart" />
*/