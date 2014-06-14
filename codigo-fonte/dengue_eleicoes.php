<h2>A dengue e as eleições no Brasil</h2>

<h3>N&uacute;mero de casos de dengue por cada 100.000 habitantes de 1990 a 2008</h3>

<br/><br/>

<table>
 <col width=45 span=20 style='width:45pt'>
 <tr height=15 style='height:15.0pt'>
  <td height=15 width=45 style='height:15.0pt;width:45pt'>Brasil</td>
  <td align=right width=45 style='width:45pt'>1990</td>
  <td align=right width=45 style='width:45pt'>1991</td>
  <td align=right width=45 style='width:45pt'>1992</td>
  <td align=right width=45 style='width:45pt'>1993</td>
  <td align=right width=45 style='width:45pt'>1994</td>
  <td align=right width=45 style='width:45pt'>1995</td>
  <td align=right width=45 style='width:45pt'>1996</td>
  <td align=right width=45 style='width:45pt'>1997</td>
  <td align=right width=45 style='width:45pt'>1998</td>
  <td align=right width=45 style='width:45pt'>1999</td>
  <td align=right width=45 style='width:45pt'>2000</td>
  <td align=right width=45 style='width:45pt'>2001</td>
  <td align=right width=45 style='width:45pt'>2002</td>
  <td align=right width=45 style='width:45pt'>2003</td>
  <td align=right width=45 style='width:45pt'>2004</td>
  <td align=right width=45 style='width:45pt'>2005</td>
  <td align=right width=45 style='width:45pt'>2006</td>
  <td align=right width=45 style='width:45pt'>2007</td>
  <td align=right width=45 style='width:45pt'>2008</td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td height=15 style='height:15.0pt'>Brasil</td>
  <td align=right>27,29</td>
  <td align=right>71,1</td>
  <td align=right>1,12</td>
  <td align=right>4,87</td>
  <td align=right>36,81</td>
  <td align=right>88,12</td>
  <td align=right>116,99</td>
  <td align=right>156,13</td>
  <td align=right>326,59</td>
  <td align=right>54,48</td>
  <td align=right>63,89</td>
  <td align=right>225,97</td>
  <td align=right>401,63</td>
  <td align=right>156,88</td>
  <td align=right>40,01</td>
  <td align=right>82,28</td>
  <td align=right>143,19</td>
  <td align=right>264,88</td>
  <td align=right>293,35</td>
 </tr>
</table>

<br/><br/>

<?php $grafico = geraGrafico(1000, 300, 
		array("27.29"
			, "71.1"
			, "1.12"
			, "4.87"
			, "36.81"
			, "88.12"
			, "116.99"
			, "156.13"
			, "326.59"
			, "54.48"
			, "63.89"
			, "225.97"
			, "401.63"
			, "156.88"
			, "40.01"
			, "82.28"
			, "143.19"
			, "264.88"
			, "293.35"),
		 
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
			, "2008"));


function viewChart($type = NULL, $width, $high, $value1, $value2, $refer){

	//$type='lc';

	$value1 = implode(',', $value1);
	$value2 = implode(',', $value2);
	$refer = implode('|', $refer);

	return "http://chart.apis.google.com/chart?"
			. "cht=" . $type
			. "&amp;chs=".$width ."x". $high
			. "&amp;chco=5CB8E6,E68A00"
			. "&amp;chg=20,50"
			. "&amp;chxt=x,y"
  			. "&amp;chxl=0:|" . $refer
			. "&amp;chd=t:" . $value1 . "%7C" . $value2
			. "&amp;chxr=1,0,400&amp;chds=0,400"
			. "&amp;chg=0,5,1,19"
			. "&amp;chbh=a"
  			. "&amp;chdl=Incidência de Dengue%7CAno de Eleições"
  			. "&amp;chdlp=b"
  			. "&amp;chtt=Compativo Dengue x Eleições";

}


$grafico2 = viewChart('lc', 1000, 300, 
		array("27.29"
				, "71.1"
				, "1.12"
				, "4.87"
				, "36.81"
				, "88.12"
				, "116.99"
				, "156.13"
				, "326.59"
				, "54.48"
				, "63.89"
				, "225.97"
				, "401.63"
				, "156.88"
				, "40.01"
				, "82.28"
				, "143.19"
				, "264.88"
				, "293.35"),
		
		array("200"	//1990
		, "200"
		, "200"
		, "200"
		, "200"
		, "0"		//1994
		, "200"
		, "200"
		, "200"
		, "200"
		, "0"		//1998
		, "200"
		, "200"
		, "200"
		, "200"
		, "0"		//2002
		, "200"
		, "200"
		, "200"
		, "200"
		, "0"		//2006
		, "200"
		, "200"),	//2010

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
				, "2008"));


?>


<img src="<?php echo $grafico2 ?>" title="Grafico gerado pelo Google Chart" />

<br/><br/><br/>



<table>
<tr>
<td width="225"><b>Presidente</b></td>
<td width="185"><b>Foto </b></td>
<td width="185"><b>Início de mandato</b></td>
<td width="185"><b>Fim de mandato</b></td>
</tr>
<tr>
<td><b>&nbsp;</b></td>
<td><b>&nbsp; </b></td>
<td><b>&nbsp;</b></td>
<td><b>&nbsp;</b></td>
</tr>
<tr>
<td><b>Fernando Collor de Mello</b></td>
<td><img src="images/presidentes/fernando_collor.jpg" alt="Fernando Collor"> </td>
<td>15 de março de 1990</td>
<td>29 de dezembro de 1992</td>
</tr>
<tr>
<td><b>Itamar Augusto Franco Cautieiro</b></td>
<td><img src="images/presidentes/itamar_franco.jpg" alt="Itamar Franco"> </td>
<td>29 de dezembro de 1992</td>
<td>1 de janeiro de 1995</td>
</tr>
<tr>
<td><b>Fernando Henrique Cardoso</b></td>
<td><img src="images/presidentes/fhc.jpg" alt="FHC"> </td>
<td>1 de janeiro de 1995</td>
<td>1 de janeiro de 2003</td>
</tr>
<tr>
<td><b>Luiz Inácio Lula da Silva</b></td>
<td><img src="images/presidentes/lula.jpg" alt="Lula"> </td>
<td>1 de janeiro de 2003</td>
<td>1 de janeiro de 2011</td>
</tr>
<tr>
<td><b>Dilma Vana Rousseff</b></td>
<td><img src="images/presidentes/dilma.jpg" alt="Dilma"> </td>
<td>1 de janeiro de 2011</td>
<td>em exercício</td>
</tr>
</table>






<br/><br/><br/>
<?php include_once 'informacoesAdicionais.php';?>