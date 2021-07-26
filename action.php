<?php
	
	

	include_once "baglanti.php";


	
	if (isset($_POST['ID'])) {

  		$output = "";
  		$id = $_POST['ID'];
  		$query = "SELECT * FROM SHEET_1 WHERE ILAC_ADI LIKE '%$id%'";
  		$result = $con->query($query);

  		$output = '<ul class="list-unstyled">';		

  		if ($result->num_rows > 0) {
  			while ($row = $result->fetch_array()) {
  				$output .= '<li>'.ucwords($row['ILAC_ADI']).'</li>';
  			}
  		}else{
  			  $output .= '<li>ilaç bulunamadı...</li>';
  		}
  		
	  	$output .= '</ul>';
	  	echo $output;
	}

?>