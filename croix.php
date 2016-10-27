<?php
	
	$cho1=30; //modifiez ces valeurs pour changer la taille de la croix et/ou du carré
	$cho2=30;
	/*$lon=10;
	$lar=18;*/  //gardez ces valeurs en comm

	/*for($i=0;$i<=$lon;$i++){
		for($j=0;$j<=$lar;$j++){
			if($i>=($j*$lon/$lar)-1 and $i<=($j*$lon/$lar)+1 and $j>=($i*$lar/$lon)-1 and $j<=($i*$lar/$lon)+1 or $i>=(($lar-$j)*$lon/$lar)-1 and $i<=(($lar-$j)*$lon/$lar)+1 and $j>=(($lon-$i)*$lar/$lon)-1 and $j<=(($lon-$i)*$lar/$lon)+1){   //vous pouvez retirer les = pour désépaissir la croix
				echo "x";
			}else{
				echo "&#160;&#160;";
			}
		}
		echo"<br/>";
	}*/  //croix sans fonction
	
	function croix($lon,$lar){
		$i=0;
		while($i<=$lon){
			$j=0;
			while($j<=$lar){
				if($i>=($j*$lon/$lar)-1 and $i<=($j*$lon/$lar)+1 and $j>=($i*$lar/$lon)-1 and $j<=($i*$lar/$lon)+1 or $i>=(($lar-$j)*$lon/$lar)-1 and $i<=(($lar-$j)*$lon/$lar)+1 and $j>=(($lon-$i)*$lar/$lon)-1 and $j<=(($lon-$i)*$lar/$lon)+1){  //vous pouvez retirer les = pour désépaissir la croix
					echo "x";
				}else{
					echo "&#160;&#160;";
				}
				$j++;
			}
			echo"<br/>";
			$i++;
		}

	}  //Croix avec fonction
	
	croix($cho1,$cho2);  //appel de la fonction qui fait la croix
	
	for($i=0;$i<=$cho1;$i++){
		for($j=0;$j<=$cho2;$j++){
			if($i==0 or $i==$cho1 or $j==0 or $j==$cho2){
				echo "x&#160;&#160;";
			}else{
				echo "&#160;&#160;&#160;&#160;";  //plusieurs espaces pour meilleure mise en page - pas forcément nécessaire
			}
		}
		echo"<br/>";
	}  //carré


?>