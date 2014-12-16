<?php
function pdfEncrypt ($origFile, $password, $destFile){
	require_once('./libraries/fpdi/FPDI_Protection.php');
	$pdf =& new FPDI_Protection();
	$pdf->FPDF('P', 'in');
	//Calculate the number of pages from the original document.
	$pagecount = $pdf->setSourceFile($origFile);
	//Copy all pages from the old unprotected pdf in the new one.
	for ($loop = 1; $loop <= $pagecount; $loop++) {
		$tplidx = $pdf->importPage($loop);
		$pdf->addPage();
		$pdf->useTemplate($tplidx);
	}

	//Protect the new pdf file, and allow no printing, copy, etc. and
	//leave only reading allowed.
	$pdf->SetProtection(array(), $password);
	$pdf->Output($destFile, 'F');
	return $destFile;
}

?>