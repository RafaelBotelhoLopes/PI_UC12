



<?php
/*ESSA FUNÇÃO VAI RETORNA UM ARRAY CONTENDO UM INDICE E UM VALOR, O INDICE VAI SE O NÚMERO REPRESENTATIVO PELO MÊS 1 AO 12.
 E O VALOR VAI SE UM NÚMERO INTEIRO COM QUANTOS DIAS O DETERMINADO MÊS TEM.*/

	function diasMeses(){
		$retorno = array();
		
		for($i =1; $i<=12;$i++){
			$retorno[$i] = cal_days_in_month(CAL_GREGORIAN, $i, date('Y'));
		}
		return $retorno;
	}
	
	function montaCalendario(){
		/*DIAS DA SEMANA*/
		$daysWeek = array(
		'Sun',
		'Mon',
		'Tue',
		'Wed',
		'Thu',
		'Fri',
		'Sat'
	);
		$diasSemana = array(
		'Domingo',
		'Segunda',
		'Terça',
		'Quarta',
		'Quinta',
		'Sexta',
		'Sabado'
		
	);
	
	/*VARIAVEL PARA GUARDAR OS MESES EM SI*/
	$arrayMes = array(
		1 => 'Janeiro',
		2 => 'Fevereiro',
		3 => 'Março',
		4 => 'Abril',
		5 => 'Maio',
		6 => 'Junho',
		7 => 'Julho',
		8 => 'Agosto',
		9 => 'Setembro',
		10 => 'Outubro',
		11 => 'Novembro',
		12 => 'Dezembro'
	);
	
	/*VARIAVEL PARA GUARDAR O RETORNO DOS DIAS/MESES GUARDA QUANTOS DIAS TEM EM CADA MÊS */
	$diasMeses = diasMeses();
	$arrayRetorno = array();
	
	/*MÊS QUE ESTOU*/
	for($i =1; $i <=12; $i++){ 
		$arrayRetorno[$i] = array();
		
	/*DIA DE QUAL MÊS QUE ESTOU*/
		for($n=1; $n<= $diasMeses[$i]; $n++){
			
	/*RECEBE A DATA NO FORMATO GREGORIAN DIA,MÊS E ANO E ME RETORNA O NÚMERO REPRESENTATIVO DO DIA DAQUELA DATA NA SEMANA 
	  EXEMPLO: 1=SEG,2=TER,3=QUAR. ETC...
	
	  MÊS($i)
	  DIA($n)
	  ANO($date('Y')
	  
	*/
			$dayMonth = gregorianjd($i, $n, date('Y'));
			
	/*RETORNA POR EXTENSO NOME  DOS MESES $weekMontg
	  substr MOSTRA OS MESES COM AS TRÊS PRIMEIRAS LETRAS EXEMPLO: SUN,MON.....
	*/
			$weekMonth = substr(jddayofweek($dayMonth, 1),0,3);
			
			
	/*NO jddayofweek O MUNDAY VEM MONDAY ENTÃO SE FAZ A TROCA
	  NO INGLES GREGORIANO MONDAY É MUNDAY
	*/
			if($weekMonth == 'Mun') $weekMonth = 'Mon';
			$arrayRetorno[$i][$n] = $weekMonth;
		}
	}
	
	
	/*CADA MÊS VAI ESTÁ DENTRO DE SUA RESPECTIVA <tbody></tbody> NESSA <table></table>*/
	
		echo '<a href="#" id="volta">&laquo;</a><a href="#" id="vai">&raquo;</a>';
		echo '<table border="0" width= "100%">';
		foreach($arrayMes as $num => $mes){
			echo '<tbody id="mes_'.$num.'" class="mes">';
			echo '<tr><td colspan="7">'.$mes.'</td></tr><tr>';
			foreach($diasSemana as $i =>$day){
				echo '<td>'.$day.'</td>';
			}
			
			
    /*MONTA OS DIAS, PERCORRER OS DIAS DO MÊS, CUJO OS MESES QUE TEM DIAS QUE COMEÇA NO MEIO DA SEMANA 
	  USAR UMA VÁRIAVEL QUE IDENTIFICA EM QUAL COLUNA SE ESTÁ
	  POIS SE O 1 DIA DO MÊS COMEÇA NA SEXTA, TEM QUE VERIFICAR QUANTOS DIAS ELE TEM QUE PULAR
	  E QUANDO CHEGA NO PROXIMO DIA FECHA A <tr></tr>
	  POIS ASSIM COMEÇAR A PRÓXIMA E COMPLETA O MÊS*/
	  
			echo '</tr><tr>';
			$y =0;
			foreach($arrayRetorno[$num] as $numero => $dia){
				$y++;
				if($numero ==1){
					$qtd = array_search($dia, $daysWeek);
					for($i=1; $i<=qtd; $i++){
						echo '<td></td>';
						$y+=1;
					}
				}
				echo '<td>'.$numero.'</td>';
				if($y == 7){
					$y=0;
					echo '</tr><tr>';
				}
			}
			echo '</tr></tbody>';
		}
		echo '</table>';
		
		print_r($arrayRetorno);
}

?>

