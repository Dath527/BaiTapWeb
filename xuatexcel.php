<?php
if(isset($_POST['btnXuatExcel'])){
    $objExcel=new PHPExcel();
        $objExcel->setActiveSheetIndex(0);
        $sheet=$objExcel->getActiveSheet()->setTitle('DSSP');
        $rowCount=1;
        //Tạo tiêu đề cho cột trong excel
        $sheet->setCellValue('A'.$rowCount,'ID');
        $sheet->setCellValue('B'.$rowCount,'tên sản phẩm');
        $sheet->setCellValue('C'.$rowCount,'giá sản phẩm');
        $sheet->setCellValue('D'.$rowCount,'ID điện thoại');
        $sheet->setCellValue('E'.$rowCount,'File ảnh');
        $sheet->setCellValue('F'.$rowCount,'Số lượng');
        $sheet->setCellValue('G'.$rowCount,'comment');
        //định dạng cột tiêu đề
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        //gán màu nền
        $sheet->getStyle('A1:D1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00FF00');
        //căn giữa
        $sheet->getStyle('A1:D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
        include_once('ketnoi.php');
        $sql = "SELECT * FROM sanpham
            INNER JOIN dmdienthoai
            ON sanpham.id_dienthoai = dmdienthoai.id_dienthoai
            ORDER BY id_sp DESC
            LIMIT $firstRow, $rowsPerPage";
        $query = mysqli_query($dbConnect, $sql);
       
        while($row=mysqli_fetch_array($query)){
            $rowCount++;
            $sheet->setCellValue('A'.$rowCount,$row['id_sp']);
            $sheet->setCellValue('B'.$rowCount,$row['ten_sp']);
            $sheet->setCellValue('D'.$rowCount,$row['gia_sp']);
            $sheet->setCellValue('C'.$rowCount,$row['id_dienthoai']);
            $sheet->setCellValue('E'.$rowCount,$row['anh_sp']);
            $sheet->setCellValue('F'.$rowCount,$row['so_luong']);
            $sheet->setCellValue('G'.$rowCount,$row['comment']);
        }
        //Kẻ bảng 
        $styleAray=array(
            'borders'=>array(
                'allborders'=>array(
                    'style'=>PHPExcel_Style_Border::BORDER_THIN
                )
            )
            );
        $sheet->getStyle('A1:'.'D'.($rowCount))->applyFromArray($styleAray);
        $objWriter=new PHPExcel_Writer_Excel2007($objExcel);
        $fileName='ExportExcel.xlsx';
        $objWriter->save($fileName);
        header('Content-Disposition: attachment; filename="'.$fileName.'"');
        header('Content-Type: application/vnd.openxlmformatsofficedocument.speadsheetml.sheet');
        header('Content-Length: '.filesize($fileName));
        header('Content-Transfer-Encoding:binary');
        header('Cache-Control: must-revalidate');
        header('Pragma: no-cache');
        readfile($fileName);
    }
?>