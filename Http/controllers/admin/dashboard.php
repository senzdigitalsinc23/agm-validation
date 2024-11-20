<?php

use Core\Auth;
use Core\Model;
use Core\Session;

$header = "Dashboard";

$user = new Model();
$staff = [];

$page = $_GET['page'] ?? 1;

$number_per_page = 10;
$total_records = 0;
$initial_page = ($page - 1) * $number_per_page;

$month = date('M');
$year = date('Y');

if (Auth::logged_in()) {
        $units = $user->select()
            ->from('units')
            ->fetch()
            ->getAll();

    $user->buildQuery = [];

    if (isset($_GET['excel']) || isset($_GET['pdf']) || isset($_GET['search']) || isset($_GET['page'])) {
        $unit_name = $user->select('unit_name')
            ->from('units')
            ->where('unit_id', '=')
            ->limit($initial_page . ','. $number_per_page)
            ->fetch(['unit_id' => $_GET['unit']])
            ->get();

        
        Session::flash('status', $_GET['status']);
        Session::flash('unit', $_GET['unit']);
        Session::flash('unit_name', $unit_name['unit_name'] ?? 'All Units');
        
        if (isset($_GET['excel'])) {
            $_SESSION['status'] = $_GET['status'];
            $_SESSION['unit'] = $_GET['unit'];
            $_SESSION['unit_name'] = $unit_name['unit_name'] ?? 'All Units';
            
            redirect("/export-data");
        }


        if (isset($_GET['pdf'])) {
            
            $_SESSION['status'] = $_GET['status'];
            $_SESSION['unit'] = $_GET['unit'];
            $_SESSION['unit_name'] = $unit_name['unit_name'] ?? 'All Units';
            
            redirect("/export-pdf");
        }

        $user->buildQuery = [];
    }

    if (!isset($_GET['unit']) || (isset($_GET['unit']) && $_GET['unit'] === 'all' && $_GET['status'] === 'all')) {
        $total_records = count(
            $staff = $user->select('st.id, vd.status, vd.remarks')
                ->from('staff AS st')
                ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
                ->fetch()
                ->getAll()
        );

        $user->buildQuery = [];

        $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->limit($initial_page . ','. $number_per_page)
            ->fetch()                  
            ->getAll();

        Session::flash('status', $_GET['status'] ?? "");
        Session::flash('unit', $_GET['unit'] ?? "");
        Session::flash('unit_name', $unit_name['unit_name'] ?? 'All Units');
        //dd('sadfhdghdfg');

    }else if ($_GET['unit'] === 'all' && $_GET['status'] !== 'all') {
        $total_records = count(
            $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')        
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('status', '=')
            ->fetch([':status' => $_GET['status'] ?? ''])                  
            ->getAll()
        );

        $user->buildQuery = [];

        $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')        
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('status', '=')
            ->limit($initial_page . ','. $number_per_page)
            ->fetch([':status' => $_GET['status'] ?? ''])                  
            ->getAll();

            Session::flash('status', $_GET['status']);
            Session::flash('unit', $_GET['unit']);
            Session::flash('unit_name', $unit_name['unit_name'] ?? 'All Units');

    } else if ($_GET['unit'] !== 'all' && $_GET['status'] !== 'all') {

        $total_records = count(
            $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')        
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('status', '=')
            ->and('unit', '=')
            ->fetch(['status' => $_GET['status'], 'unit' => $_GET['unit']])                  
            ->getAll()
        );

        $user->buildQuery = [];

        $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')        
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('status', '=')
            ->and('unit', '=')
            ->limit($initial_page . ','. $number_per_page)
            ->fetch(['status' => $_GET['status'], 'unit' => $_GET['unit']])
            ->getAll();
        

            Session::flash('status', $_GET['status']);
            Session::flash('unit', $_GET['unit']);
            Session::flash('unit_name', $unit_name['unit_name'] ?? 'All Units');
        
    }else {
        $total_records = count(
            $staff = $user->select('st.*, vd.status, vd.remarks')
                ->from('staff AS st')        
                ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
                ->where('unit', '=')
                ->fetch([':unit' => $_GET['unit'] ?? ''])                  
                ->getAll()
        );

        $user->buildQuery = [];

        $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')        
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('unit', '=')
            ->limit("$initial_page , $number_per_page")
            ->fetch([':unit' => $_GET['unit'] ?? ''])                  
            ->getAll();

            
            Session::flash('status', $_GET['status']);
            Session::flash('unit', $_GET['unit']);
            Session::flash('unit_name', $unit_name['unit_name'] ?? 'All Units');
            //dd($_GET);
            
    }


}

$num_of_pages = ceil(num: $total_records / $number_per_page);

return view('admin/dashboard', [
    'header' => $header,
    'data'   => $staff,
    'count'  => page_numb($_GET['page'] ?? 1),
    'units'  => $units,
    'total_pages' => $num_of_pages,
    'total_records' => $total_records,
    'page'  => $page
]);