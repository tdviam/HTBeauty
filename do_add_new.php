<?
	include "common/connect.php";
	require_once "Classes/PHPExcel.php";

	$target_dir = "tmp/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	// Allow certain file formats
	if($imageFileType != "xls" && $imageFileType != "xlsx" ) {
	    echo "Sorry, only XLS & XLSX files are allowed.";
	    $uploadOk = 0;
	}
	
	if($uploadOk == 1){
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			$uploadOk = 1;
		} else {
			$uploadOk = 0;
   		}
	}
	
	if($uploadOk == 0){
		echo $_FILES["fileToUpload"]["name"]." was uploaded FAIL.";
	} else {
			
		if(isset($_POST['add'])){
			$excelReader = PHPExcel_IOFactory::createReaderForFile($target_file);
			$excelObj = $excelReader->load($target_file);
			$worksheet = $excelObj->getSheet(0);
			$lastRow = $worksheet->getHighestRow();
			//$row = 2;
			
			
			$listid = array();
			$sql = "INSERT INTO tblproduct_details(ID, product_name) VALUES";
			//$sql = "INSERT INTO tblproducts(ID) 
			//	VALUES('$rowID')";
			for ($row = 2; $row <= $lastRow; $row++) {
				$rowID = $worksheet->getCell('A'.$row)->getValue();
				$rowEmail = $worksheet->getCell('B'.$row)->getValue();
				$rowProductName = $worksheet->getCell('T'.$row)->getValue();
				$rowFee = $worksheet->getCell('M'.$row)->getValue();
			 	
			 	$arrlength = count($listid);
			 	$existed = false;
			 	if($arrlength > 0){
			 		//echo $arrlength;
			 		for($i = 0; $i < $arrlength; $i++) {
    					//echo $listid[$i];
    					if($listid[$i] == $rowID.'@@'.$rowEmail.'@@'.$rowFee){
    						//echo $rowID;
    						$existed = true;
    						break;
    					}
    					
					}
				}
				if($existed == false){
					//echo $rowID;
				 	array_push($listid, $rowID.'@@'.$rowEmail.'@@'.$rowFee);
				}		 	
			 	
			 	$sql .= "('$rowID', '$rowProductName')";
			 	if($row < $lastRow){
			 		$sql .= ",";
			 	}
			}	
			
			$retval = mysql_query( $sql, $conn );
			if(! $retval ){
				die('Could not enter data: ' . mysql_error());
			}
			
			$sql1 = "INSERT INTO tblproducts(ID, email, fee) VALUES ";
			$arrlength = count($listid);
			for($i = 0; $i < $arrlength; $i++) {
    			$splitID = explode("@@", $listid[$i]);
    			
    			$sql1 .= "('$splitID[0]', '$splitID[1]', '$splitID[2]')";
			 	if($i < $arrlength-1){
			 		$sql1 .= ",";
			 	}	
			}
			echo $sql1;
			$retval = mysql_query( $sql1, $conn );
			if(! $retval ){
				die('Could not enter data: ' . mysql_error());
			}
			
			mysql_close($conn);
		}
	}	
?>
