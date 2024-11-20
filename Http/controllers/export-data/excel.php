<?php

use Core\Auth;
use Core\Model;
use Core\Session;
$header = "Dashboard";


$user = new Model();
$staff = [];

$filename = '';

if (Auth::logged_in()) {
    $units = $user->select()
            ->from('units')
            ->fetch()
            ->getAll();

    $user->buildQuery = [];

    //dd($_SESSION);

    if (!isset($_SESSION['unit']) || ((isset($_SESSION['unit']) && $_SESSION['unit'] === 'all') && $_SESSION['status'] === 'all')) {

        $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->fetch()                  
            ->getAll();
    }/* else if ($_SESSION['unit'] === 'all' && $_SESSION['status'] !== 'all') {

        $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')        
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('status', '=')
            ->fetch([':status' => $_SESSION['status'] ?? ''])                  
            ->getAll();


    }  */else if ($_SESSION['unit'] !== 'all' && $_SESSION['status'] !== 'all') {

        $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')        
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('status', '=')
            ->and('unit', '=')
            ->fetch(['status' => $_SESSION['status'], 'unit' => $_SESSION['unit']])                  
            ->getAll();

        
    }else {

        $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')        
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('unit', '=')
            ->fetch([':unit' => $_SESSION['unit'] ?? ''])                  
            ->getAll();

    }
}


function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
}

//Downloaded file name
$filename = 'validated-emp_' . date('m-d-Y') . ".xlsx";

//Column headers
$fields = array('#', 'NAME', 'GRADE', 'STAFF ID', 'TELEPHONE', 'STATUS', 'REMARKS');

//Display column names as first row
$excelData = implode("\t", array_values($fields)) . "\n";

$count = 1;


if ($staff) {
    foreach ($staff as $st) {
        if ($st['status'] === 1) {
            $status = "At Post";
        }else if($st['status'] === 0){
            $status = "Not At Post";
        }else {
            $status = "Not Validated";
        }

        $rawData = array($count, $st['fname'] . ' ' . $st['oname'] . ' ' . $st['lname'], $st['grade'], $st['staff_id'], $st['phone'], $status, $st['remarks']);

        $excelData .= implode("\t", array_values($rawData)) . "\n";

        $count++;
    }
}

//dd('End');

//dd($excelData);

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Pragma: no-cache"); 
header("Expires: 0");

echo $excelData;

Session::unflash('unit_id');
Session::unflash('status');
Session::unflash('unit_name');

exit();