<?php
if (ob_get_level() > 0) {ob_end_clean();}

Excel::create("Reporte de Clientes", function ($excel) use ($clients) {
    

    $excel->sheet("Todos los clientes", function ($sheet) use ($clients) {
        $sheet->loadView('reports.entities.clients', array('clients' => $clients));
    });
    
})->download('xls');