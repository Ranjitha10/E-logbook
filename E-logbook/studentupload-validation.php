<?php
	//$sem=$_POST["sem"];
	$fname=$_FILES['file']['name'];
	if(!isset($fname))
	{
		echo "File not able to upload!Please try again!";
	}
	else if ($_FILES['file']['error'] > 0) 
	{
		echo "Error: " . $_FILES['file']['error'] . "<br>";
	} 
	else 
	{
		$ext = pathinfo($fname, PATHINFO_EXTENSION);
		$temp="faculty".".".$ext;
		$mov=move_uploaded_file($_FILES['file']['name'],"uploads/$temp");
		include 'Classes/PHPExcel/IOFactory.php';
		
			$inputFileType = 'Excel2007';
			
			$fname=$_FILES['file']['name'];
			$ext = pathinfo($fname, PATHINFO_EXTENSION);
			$temp="faculty".".".$ext;
			
						
			$objReader = PHPExcel_IOFactory::createReader($inputFileType);
			$objPHPExcel = $objReader->load("uploads/".$temp);

			$sheet = $objPHPExcel->setActiveSheetIndex(0); 
			$highestRow = $sheet->getHighestRow(); 
			$highestColumn = $sheet->getHighestColumn();
			$x=1;
			$con=mysqli_connect("localhost","root","","project");
			
			
			while($x<=$highestRow)
			{	$l="A".$x;
				$m="B".$x;
				$n="C".$x;
				$o="D".$x;
				$p="E".$x;
				
				
				$fname=$sheet->getCell($l)->getValue();
				$lname=$sheet->getCell($m)->getValue();
				$username=$sheet->getCell($n)->getValue();
				$emailid=$sheet->getCell($o)->getValue();
				$contactno=$sheet->getCell($p)->getValue();
				
				$query="INSERT into facultyupload values('$fname','$lname','$username','$emailid','$contactno')";
				mysqli_query($con,$query);
				$x=$x+1;
				
			}
			

	}
	
	
	header("Location: adminloginsucess.php");
?> 