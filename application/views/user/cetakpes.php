<?php	
	$this->fpdf->FPDF('P','cm','A4');
	$this->fpdf->AliasNbPages();
	$this->fpdf->AddPage();

	$this->fpdf->SetFont('courier','B',10);
	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(0,1,'KARTU UJIAN MAHASISWA',0,0,'C');	
	
	$this->fpdf->SetFont('courier','',9);
	$this->fpdf->Ln(1);

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'NIM',0,0,'L');		
	$this->fpdf->Cell(6,0.5,' : '.$nim,0,0,'L');		

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'NAMA LENGKAP',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$nama,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'USERNAME',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$username,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'PASSWORD',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$pass,0,0,'L');


	$this->fpdf->Output();
?>