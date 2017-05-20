<?php	
	$this->fpdf->FPDF('P','cm','A4');
	$this->fpdf->AliasNbPages();
	$this->fpdf->AddPage();

	$this->fpdf->SetFont('courier','B',10);
	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(0,1,'DATA NILAI MAHASISWA',0,0,'C');	
	
	$this->fpdf->SetFont('courier','B',9);
	$this->fpdf->Ln(1);
	$this->fpdf->Cell(1.5,0.5,'NO','BT',0,'C');		
	$this->fpdf->Cell(3,0.5,'ID Paket','BT',0,'C');
	$this->fpdf->Cell(3,0.5,'TANGGAL TES','BT',0,'L');		
	$this->fpdf->Cell(5.5,0.5,'NAMA MAHASISWA','BT',0,'C');
	$this->fpdf->Cell(2,0.5,'BENAR','BT',0,'L');
	$this->fpdf->Cell(2,0.5,'SALAH','BT',0,'L');
	$this->fpdf->Cell(2,0.5,'NILAI','BT',0,'L');

 	$this->fpdf->SetFont('courier','',9);
	$no=1;
	foreach($nilai as $kon) {		
		$this->fpdf->Ln(0.5);
	  	$this->fpdf->Cell(1.5,0.5,$no,0,0,'C');	
	  	$this->fpdf->Cell(3,0.5,$kon['id_paket'],0,0,'C');	
	  	$this->fpdf->Cell(3,0.5,$kon['tgl_tes'],0,0,'L');	
	  	$this->fpdf->Cell(5,0.5,$kon['nama'],0,0,'L');	
	  	$this->fpdf->Cell(2,0.5,$kon['benar'],0,0,'C');	
	  	$this->fpdf->Cell(2,0.5,$kon['salah'],0,0,'C');	
	  	$this->fpdf->Cell(2,0.5,$kon['total_nilai'],0,0,'C');	

	 $no++;
	}

	$this->fpdf->Output();
?>