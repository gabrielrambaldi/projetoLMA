<h2>Incidência de dengue no Brasil</h2>

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
			, "2008")) ?>
<img src="<?php echo $grafico ?>" title="Grafico gerado pelo Google Chart" />



<br/><br/><br/>

<?php include_once 'informacoesAdicionais.php';?>