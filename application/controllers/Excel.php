<?php
	class Excel extends CI_Controller{
			public function action(){

    			$this->load->model('productModel');
    			$this->load->library('Excelexport');
    			$object = new PHPExcel();
    			$object->setActiveSheetIndex(0)->mergeCells('A1:D1');
    			$object->getActiveSheet()->getStyle('A1:D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    			$object->getActiveSheet()->getStyle('C1')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER);
    			$object->getActiveSheet()->getStyle('D')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);
    			$object->getActiveSheet()->getStyle('B13')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT );
    			$object->getActiveSheet()->getStyle('D')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1 );
    			  $object->getActiveSheet()->getColumnDimension('A')->setWidth(15);
    			  $object->getActiveSheet()->getColumnDimension('B')->setWidth(15);
    			  $object->getActiveSheet()->getColumnDimension('C')->setWidth(15);
   				  $object->getActiveSheet()->getColumnDimension('D')->setWidth(15);

   				 

   			
    			$table_columns=array("Product Name","Product Code","Product Stock","Product Price");
    			$column = 0;
    			foreach($table_columns as $field){
    				$object->getActiveSheet()->SetCellValueByColumnAndRow($column, 2, $field);
    				 $object->getActiveSheet()->SetCellValueByColumnAndRow($column, 1, 'Product Reports');
					$column++;
    			}

    			
    			$exrow = 3;
    				$result = $this->productModel->getProducts();
    				$data = $result->result_array();
					foreach($data as $row) {
					//print_r($data);
    					$object->getActiveSheet()->SetCellValueByColumnAndRow(0,$exrow, $row['product_name']);
    					$object->getActiveSheet()->SetCellValueByColumnAndRow(1,$exrow, $row['product_code']);
    					$object->getActiveSheet()->SetCellValueByColumnAndRow(2,$exrow, $row['stock']);
    					$object->getActiveSheet()->SetCellValueByColumnAndRow(3,$exrow, $row['price']);
    			$exrow++;

    				}
					$object->getActiveSheet()->setTitle("Products");
					$today = date("m.d.y.H.i.s");
					$filename = "Report ".$today.".xls";
    				$object_writer= PHPExcel_IOFactory::createWriter($object,'Excel5');
    				header('Content-Type: application/vnd.ms-excel');
					header('Content-Disposition: attachment;filename="'.$filename.'"');
					header('Cache-Control: max-age=0');
					$object_writer->save('php://output');
					exit;

 			 }
			
	}