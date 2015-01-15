<?php
$this->Fpdf->cabecalho = false;
$this->Fpdf->rodape = false;
$this->Fpdf->AddFont('monotype','','monotype.php');
$this->Fpdf->AddFont('avantg','','avantg.php');
$this->Fpdf->Open();
if (count($membros)>0) {
	foreach($membros as $membro){
		$this->Fpdf->AddPage();
		$this->Fpdf->SetTopMargin(20);
		$this->Fpdf->SetLeftMargin(25);
		$this->Fpdf->SetRightMargin(15);
		$this->Fpdf->Image('img/logotipo.jpg',10,20,30,20.2);
		$this->Fpdf->Image('img/logotipo2.jpg',55,80,110,73.8);
		$this->Fpdf->SetFont('Arial','B',12);
		$this->Fpdf->SetXY(40,20);
		$this->Fpdf->Cell(0,6,utf8_decode('IGREJA EV. ASSEMBLÉIA DE DEUS EM SERRANÓPOLIS'),0,0,'C');
		$this->Fpdf->Ln(4);
		$this->Fpdf->SetFont('Arial','B',10);
		$this->Fpdf->SetX(40);
		$this->Fpdf->Cell(0,6,utf8_decode('Av. Geraldo P. de Azevedo Qd 119 Lt02 - Setor Rodoviário - Serranópolis - GO'),0,0,'C');
		$this->Fpdf->Ln(4);
		$this->Fpdf->SetX(40);
		$this->Fpdf->Cell(0,6,'FILIADA A CADESGO E CGADB - fone 0xx64 3668-1393',0,0,'C');
		$this->Fpdf->Ln(4);
		$this->Fpdf->Ln(4);
		$this->Fpdf->Ln(4);
		$this->Fpdf->Ln(4);
		$this->Fpdf->Ln(4);
		$this->Fpdf->Ln(4);
		$this->Fpdf->Ln(4);
		$this->Fpdf->Cell(0,6,utf8_decode('SAUDAÇÕES NO SENHOR'),0,0,'C');
		$this->Fpdf->Ln(4);
		$this->Fpdf->SetTextColor(255,0,0);
		$this->Fpdf->Cell(0,6,'Filipenses 1:3',0,0,'C');
		$this->Fpdf->SetTextColor(0,0,0);
		$this->Fpdf->Ln(4);
		$this->Fpdf->Ln(4);
		$this->Fpdf->Ln(4);
		$this->Fpdf->Ln(4);
		$this->Fpdf->Ln(4);
		$this->Fpdf->Ln(4);
		$this->Fpdf->SetFont('Arial','',14);
		$this->Fpdf->MultiCell(0,9,utf8_decode('        Prezad'.($membro['Membro']['sexo']=='M' ? 'o' : 'a').' irmã'.($membro['Membro']['sexo']=='M' ? 'o' : '').' '.$membro['Membro']['nome'].' é com muita alegria que venho através desta parabenizá-lo pelo seu aniversário que ocorrerá no dia '.substr( $membro['Membro']["data_nascimento"], 8,2 ).'/'.substr( $membro['Membro']["data_nascimento"], 5,2 ).'/'.date('Y').'.'));
		$this->Fpdf->MultiCell(0,9,utf8_decode('        O nosso desejo é que o Senhor alargue os seus dias na face da terra e que todos os seus sonhos sejam realizados estando eles debaixo da vontade de Deus.'));
		$this->Fpdf->MultiCell(0,9,utf8_decode('        Que através de você toda sua família seja abençoada, guardada e guiada pelas mãos do nosso Deus.'));
		$this->Fpdf->MultiCell(0,9,utf8_decode('        Sem mais termino esta saudando-'.($membro['Membro']['sexo']=='M' ? 'o' : 'a').' com a seguinte leitura bíblica.'));
		$this->Fpdf->SetTextColor(255,0,0);
		$this->Fpdf->MultiCell(0,9,utf8_decode('        "O Senhor te abençoe e te guarde,o Senhor faça resplandecer o  rosto sobre ti e tenha misericórdia de ti, o Senhor sobre ti levante o rosto e te dê a paz Num.6:24ao26."'));
		$this->Fpdf->SetTextColor(0,0,0);
		$this->Fpdf->MultiCell(0,9,utf8_decode('        São os sinceros votos do seu servo, companheiro, amigo, irmão e pastor que muito '.($membro['Membro']['sexo']=='M' ? 'o' : 'a').' considera.'));
		$this->Fpdf->Ln(6);
		$this->Fpdf->Cell(0,6,'        Fraternalmente em Cristo');
		$this->Fpdf->Ln(6);
		$this->Fpdf->Ln(6);
		$this->Fpdf->Ln(6);
		$this->Fpdf->Ln(6);
		$this->Fpdf->Ln(6);
		$this->Fpdf->Ln(6);
		$this->Fpdf->SetFont('Arial','B',12);
		$this->Fpdf->Cell(0,6,'Pr. Cleosmar de Almeida',0,0,'C');
		$this->Fpdf->Ln(4);
		$this->Fpdf->SetFont('monotype','',12);
		$this->Fpdf->Cell(0,6,'Pr. Presidente',0,0,'C');
		$this->Fpdf->Ln(4);
	}
} else {
	$this->Fpdf->SetFont('Arial','',15);
	$this->Fpdf->Cell('',6,utf8_decode('Não possui cartas à imprimir'),0,0,'C');
}

echo $this->Fpdf->fpdfOutput('aniversarios_'.date('YmdHis').'.pdf','D');
?>