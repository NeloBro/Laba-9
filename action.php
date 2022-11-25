	<?php 


		$stolbtsov = $_GET['stolbtsov'];
		$strok = $_GET['strok']; 
		$n = $stolbtsov; 
		$m = $strok;
		$mas = [];
		for ($i = 0; $i < $m; $i++){
    		$mas[$i] = [];
    		for ($j = 0; $j < $n; $j++){
        		$mas[$i][$j] = rand(1,100);
        		echo $mas[$i][$j]." ";
        	}
        	echo '<br>';
		}

		$sum = 0;
		for($i=0;$i<$strok;$i++) {
			if($mas[$i][$i]){
				$sum+= $mas[$i][$i];
			}
		}

		echo "Сумма по диаганали равана: $sum";
?>