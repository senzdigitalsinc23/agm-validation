<?php

use Core\Auth;
use Http\Models\UserModel;

$header = date('M') . " " . date('Y') . " Validation";
$month = date('M');
$year = date('Y');

if (Auth::logged_in()) {
    $staff = '';

    $page = $_GET['page'] ?? 1;
    
    $number_per_page = 10;
    $total_records = 0;
    $initial_page = ($page - 1) * $number_per_page;

    $user = new UserModel();

    if ($_SERVER['QUERY_STRING'] == '') {
        unset($_SESSION['SEARCH']);
    }


    if (isset($_GET['search']) && $_GET['search'] != '') {

        $name = $_GET['name'];

        $_SESSION['SEARCH']['name'] = $_GET['name'];
        $_SESSION['SEARCH']['page'] = $_GET['page'];
        //dd($_SESSION);

        $total_records = count(
            $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('fname', "LIKE", '(')
            ->or('lname', "LIKE")
            ->or('oname', 'LIKE', ')')
            ->fetch([
                'fname'=> "%$name%",              
                'lname'=> "%$name%",
                'oname' => "%$name%"])                  
            ->getAll()
        );

        $user->buildQuery = [];

        $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('fname', "LIKE", '(')
            ->or('lname', "LIKE")
            ->or('oname', 'LIKE', ')')
            ->orderBy('fname', 'ASC')
            ->limit($initial_page . ',' . $number_per_page)
            ->fetch([
                'fname'=> "%$name%",              
                'lname'=> "%$name%",
                'oname' => "%$name%"])                  
            ->getAll();

        //dd($user->buildQuery);
    }else if ($_SESSION['USER']['rank'] === "ITM") {
        $total_records = count(
            $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->fetch()
            ->getAll()
        );

        $user->buildQuery = [];

        $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->orderBy('status', 'ASC')
            ->limit($initial_page . ',' . $number_per_page)
            ->fetch()                  
            ->getAll();
    }else {
        $total_records = count(
            $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('unit', '=')
            ->fetch(['unit'=> $_SESSION['USER']['unit']])
            ->getAll()
        );

        $user->buildQuery = [];

        $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('unit', '=')
            ->orderBy('status', 'ASC')
            ->limit($initial_page . ',' . $number_per_page)
            ->fetch(['unit'=> $_SESSION['USER']['unit']])                  
            ->getAll();
    }

    $num_of_pages = ceil(num: $total_records / $number_per_page);

    return view('user/index', [
        'header' => $header,
        'data'  => $staff,
        'count'  => page_numb($_GET['page'] ?? 1),
        'total_pages' => $num_of_pages,
        'total_records' => $total_records,
        'page'  => $page
    ]);
}
