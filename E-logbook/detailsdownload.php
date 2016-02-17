<?php

$username ="root";
$password ="";
$hostname ="localhost"; 
$database="project";
$con_db=mysql_connect($hostname,$username,$password);
$find_db=mysql_select_db($database);

$qry= "SELECT * FROM register";
$result=mysql_query($qry);
if($result) {


	error_reporting(E_ALL);
	ini_set('display_errors', TRUE);
	ini_set('display_startup_errors', TRUE);
	date_default_timezone_set('Europe/London');



	/** Include PHPExcel */
	require_once dirname(__FILE__) . '/Classes/PHPExcel.php';


	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();


$row1=mysql_fetch_array($result);


// Add some data
$alphabet= array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$x=1;
$objPHPExcel->setActiveSheetIndex(0)
            
			 ->setCellValue('A1', 'USN')
            ->setCellValue('B1', 'sem')
            ->setCellValue('C1', 'batch')
            
		
            ->setCellValue('D1', 'lab');
          

			//$subj=$_POST['subject'];
					
				//$q="SELECT count(*) as total FROM logbook_final where sub_name='$subj'";
				/*$r=mysql_query($query);
				$data=mysqli_fetch_assoc($r);
				$total= $data['usn'];
				$sem=$data['sem'];*/
				
				/*$qry= "SELECT * FROM subject where sub_name='$subj'";
				$result=mysqli_query($con,$qry);
				$row=mysqli_fetch_array($result);
				$sem=$row['sem'];
				
				
				$qry= "SELECT * FROM student where sem='$sem'";
				$result=mysqli_query($con,$qry);*/
							
			 if($row1) {
			while ($row=mysql_fetch_array($result))
			{

				$usn=$row['usn'];
				$subj=$row['sem'];
				$d=$row['batch'];
				$total=$row['lab'];
				//$q="SELECT count(*) as tat FROM logbook_final where usn='$usn' and sub_name='$subj'";
				//$r=mysql_query($con,$q);
				//$datat=mysqli_fetch_assoc($r);
				//$d= $datat['tat'];



				$x++;							
			


$suff=(string)$x;
$c1='A' . $suff;
$c2='B' . $suff;
$c3='C' . $suff;
$c4='D' . $suff;


$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue($c1, $usn)
            ->setCellValue($c2, $subj)
            ->setCellValue($c3, $d)
			->setCellValue($c4, $total);
			
}

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Student');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Student.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');

exit;
}
}
?>