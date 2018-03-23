<?php

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Adrian Respicio');
$pdf->SetTitle('Sales Reports');
$pdf->SetSubject('CodeIgniter');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' OA', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();
$heading = 'Product Reports';
$pdf->writeHTMLCell(0,0, '','',$heading,0,1,0,true,'C',true);
$pdf->Ln(8);
$table ='<table style="border:1px solid black;">';
$table .='<tr>
		<th style="background-color:orange; border: 1px solid black;">Product Name</th>
		<th style="background-color:orange; border: 1px solid black;">Product Code</th>
		<th style="background-color:orange; border: 1px solid black;">Product Stocks</th>
		<th style="background-color:orange; border: 1px solid black;">Product Price</th>
		</tr>';
		$query = $this->db->query("SELECT * FROM products ORDER BY id DESC");
		$data = array($query);
		foreach($query->result() as $row){
			$table .='<tr>
						<td style="border: 1px solid black;">'.$row->product_name.'</td>
						<td style="border: 1px solid black;">'.$row->product_code.'</td>
						<td style="border: 1px solid black;">'.$row->stock.'</td>
						<td style="border: 1px solid black;">'.$row->price.'</td>
					   </tr>';
		}
$table .='</table>';
$pdf->writeHTMLCell(0,0, '','',$table, 0,1,0,true,'C',true);
//Close and output PDF document
ob_clean();
$pdf->Output('example_006.pdf', 'I');
//============================================================+
// END OF FILE
//============================================================+