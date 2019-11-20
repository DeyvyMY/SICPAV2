<?php
if (ob_get_level() > 0) {ob_end_clean();}

Excel::create("Reporte de Kardex", function ($excel) {
    

    $excel->sheet("UREA PERLADA", function ($sheet)  {
        $sheet->loadView('kardex.kardex');
    });
    
})->download('xls');