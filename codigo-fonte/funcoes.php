<?php
	function geraGrafico($largura, $altura, $valores, $referencias){
		$valores = implode(',', $valores);
		$referencias = implode('|', $referencias);
		
		return "http://chart.apis.google.com/chart?"
				. "cht=bvs"
				. "&amp;chs=".$largura ."x". $altura
				. "&amp;chco=81DAF5"
				. "&amp;chg=20,50"
				. "&amp;chxt=x,y&amp;chxl=0:|" . $referencias
				. "&amp;chd=t:" . $valores
				. "&amp;chxr=1,0,400&amp;chds=0,400"
				. "&amp;chg=0,30,50,100"
				. "&amp;chbh=a";

	}