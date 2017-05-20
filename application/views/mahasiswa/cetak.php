<?php	
	$this->fpdf->FPDF('P','cm','A4');
	$this->fpdf->AliasNbPages();
	$this->fpdf->AddPage();

	$this->fpdf->SetFont('courier','B',10);
	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(0,1,'DATA MAHASISWA',0,0,'C');	
	
	$this->fpdf->SetFont('courier','',9);
	$this->fpdf->Ln(1);

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'NIM',0,0,'L');		
	$this->fpdf->Cell(6,0.5,' : '.$nim,0,0,'L');		

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'NAMA LENGKAP',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$nama,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'TEMPAT TANGGAL LAHIR',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$ttl,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'JENIS KELAMIN',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$jk,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'AGAMA',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$agama,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->cell(6,0.5,'ALAMAT',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$alamat,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->cell(6,0.5,'JURUSAN',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$jurusan,0,0,'L');

	$this->fpdf->Output();
?>