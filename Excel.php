<html>
<body>
<center>
<h2>Read Excel By PHPExcel</h2>
<?php
error_reporting(0);
require_once "Classes/PHPExcel.php";
$path="Team 6 Task 2 - Project Tracker - Part 2.xlsx";
$reader= PHPExcel_IOFactory::createReaderForFile($path);
$excel_Obj = $reader->load($path);

//Get the last sheet in excel
//$worksheet=$excel_Obj->getActiveSheet();

//Get the first sheet in excel
$worksheet=$excel_Obj->getSheet('1');
//echo $worksheet->getCell('E33')->getValue();
$lastRow = $worksheet->getHighestRow();
$colomncount = $worksheet->getHighestDataColumn();
$colomncount_number=PHPExcel_Cell::columnIndexFromString($colomncount);
echo $lastRow.'     ';
echo $colomncount;
echo "<table border='1'>";
	for($row=0;$row<=$lastRow;$row++){
		echo "<tr>";
		for($col=0;$col<=$colomncount_number;$col++){
			echo "<td>";
			echo $worksheet->getCell(PHPExcel_Cell::stringFromColumnIndex($col).$row)->getValue();
			echo "</td>";
		}
		echo "</tr>";
	}	
echo "</table>";
?>
</center>
</body>
</html>