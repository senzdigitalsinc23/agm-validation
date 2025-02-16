<?php

use Core\Auth;
use Http\Models\UserModel;

$header = date('M') . " " . date('Y') . " Validation";
$month = date('M');
$year = date('Y');

//dd($_SESSION);

//dd(dateInDays(time()));


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

    $thisMonth = date('M');
    $day = date('d');

   // dd($thisMonth);

    $monthYear = $user->select('month, year')
                    ->from('validations')
                    ->fetch()
                    ->get();

    $user->buildQuery = [];

    $prevMonth = $monthYear['month'];

    //dd($thisMonth);

    if ($monthYear && (($thisMonth != $prevMonth) && $day >= 15)) {dd($monthYear);
        
       $user->writeQuery('INSERT INTO all_validations (staff_id, `status`,`month`,`year`,remarks,validated_by,date_validated,user_id)
                                     SELECT staff_id, `status`,`month`,`year`,remarks,validated_by,date_validated,user_id FROM validations');

        $user->truncate('validations');
    }

    

    if (isset($_GET['search']) && $_GET['search'] != '') {

        $name = $_GET['name'];
        $unit = $_SESSION['USER']['unit'];

        $_SESSION['SEARCH']['name'] = $_GET['name'];
        $_SESSION['SEARCH']['page'] = $_GET['page'];

       // dd($user->buildQuery);
        $total_records = count(
            $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('fname', "LIKE", '(')
            ->or('lname', "LIKE")
            ->or('oname', 'LIKE', ')')
            ->and('under', '=')
            ->and('staff_type', '!=')
            ->fetch([
                'fname'=> "%$name%",              
                'lname'=> "%$name%",
                'oname' => "%$name%",
                'under'  => $unit,
                'staff_type' => 'NSP'])                  
            ->getAll()
        );

        $user->buildQuery = [];

        $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('fname', "LIKE", '(')
            ->or('lname', "LIKE")
            ->or('oname', 'LIKE', ')')
            ->and('under', '=')
            ->and('staff_type', '!=')
            ->orderBy('fname', 'ASC')
            ->limit($initial_page . ',' . $number_per_page)
            ->fetch([
                'fname'=> "%$name%",              
                'lname'=> "%$name%",
                'oname' => "%$name%",
                'under'  => $unit,
                'staff_type' => 'NSP'])                  
            ->getAll();

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
            ->and('staff_type', '!=')
            ->fetch(['unit'=> $_SESSION['USER']['unit'], 'staff_type' => 'NSP'])
            ->getAll()
        );

        $user->buildQuery = [];

        $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('under', '=')
            ->and('staff_type', '!=')
            ->orderBy('status', 'ASC')
            ->limit($initial_page . ',' . $number_per_page)
            ->fetch(['under'=> $_SESSION['USER']['unit'], 'staff_type' => 'NSP'])                  
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
