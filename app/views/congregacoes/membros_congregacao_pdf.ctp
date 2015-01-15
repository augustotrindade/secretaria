<?php
$this->Fpdf->cabecalho_rodape = false;
$this->Fpdf->SetFont('Arial','',7);

if(count($congregacao)>0){
	foreach($congregacao as $cong){
		$this->Fpdf->AddPage();
		$this->Fpdf->SetFont('Arial','B',10);
		$this->Fpdf->SetFillColor(200,200,200);
		$this->Fpdf->Cell('',4,utf8_decode('Congregação: '.$cong['Congregacao']['nome']),0,0,'C',1);
		$this->Fpdf->Ln();
		
		$this->Fpdf->SetFont('Arial','B',7);
		$w2 = array(10,90,15,10,15,15,15,15);
		$this->Fpdf->Cell($w2[0],4,'Cod',0);
		$this->Fpdf->Cell($w2[1],4,'Nome',0);
		$this->Fpdf->Cell($w2[2],4,'Data Nasc',0);
		$this->Fpdf->Cell($w2[3],4,'Idade',0,0,'C');
		$this->Fpdf->Cell($w2[4],4,'Data Cad.',0);
		$this->Fpdf->Cell($w2[5],4,utf8_decode('Função'),0);
		$this->Fpdf->Cell($w2[6],4,utf8_decode('Cartão Imp'),0);
		$this->Fpdf->Cell($w2[7],4,'Tirou foto',0);
		$this->Fpdf->Cell('',4,'');
		
		$this->Fpdf->Ln();
		$y=$this->Fpdf->GetY();
		$this->Fpdf->Line(10,$y,200,$y);
		$this->Fpdf->SetFont('Arial','',7);
		$cor = '255';
		if(count($cong['Membro'])>0){
			foreach($cong['Membro'] as $membro){
				$this->Fpdf->SetFillColor($cor,$cor,$cor);
				$this->Fpdf->Cell($w2[0],4,str_pad($membro['id'],4,0,STR_PAD_LEFT),0,0,'',1);
				$this->Fpdf->SetFont('Arial','B',7);
				$this->Fpdf->Cell($w2[1],4,utf8_decode($membro['nome']),0,0,'',1);
				$this->Fpdf->SetFont('Arial','',7);
				$this->Fpdf->Cell($w2[2],4,$this->Formatacao->data($membro['data_nascimento']),0,0,'',1);
				$this->Fpdf->Cell($w2[3],4,$this->Idade->calcIdade($membro['data_nascimento']),0,0,'C',1);
				$this->Fpdf->Cell($w2[4],4,$this->Formatacao->data($membro['created']),0,0,'',1);
				$this->Fpdf->Cell($w2[5],4,utf8_decode($membro['Funcao']['nome']),0,0,'',1);
				$this->Fpdf->Cell($w2[6],4,'-',0,0,'C',1);
				$this->Fpdf->Cell($w2[7],4,utf8_decode(($membro['foto']!=''?'sim':'não')),0,0,'C',1);
				$this->Fpdf->Cell('',4,'',0,0,'C',1);
				$cor == '255' ? $cor = '230' : $cor = '255' ;
				$this->Fpdf->Ln();
			}
			$this->Fpdf->Ln();
			$this->Fpdf->SetFillColor(255,255,255);
			$y=$this->Fpdf->GetY();
			$this->Fpdf->Line(10,$y,200,$y);
			$this->Fpdf->SetFont('Arial','B',7);
			$this->Fpdf->Cell($w2[0],4,count($cong['Membro']).' membros listados');
			$this->Fpdf->Ln(6);
		} else {
			$this->Fpdf->Cell('',6,utf8_decode('Não possui itens à imprimir'),0,0,'C');
		}
		
	}
} else {
	$this->Fpdf->SetFont('Arial','',15);
	$this->Fpdf->Cell('',6,utf8_decode('Não possui itens à imprimir'),0,0,'C');
}

echo $this->Fpdf->fpdfOutput('relatorio_'.date('YmdHis').'.pdf','D');
?>