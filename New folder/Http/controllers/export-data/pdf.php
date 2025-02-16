<?php
use Core\Auth;
use Core\Model;
use Core\Session;

require_once BASE_PATH . 'vendor/autoload.php';

                  // pretty self-explanatory
    // 1 is line height

$user = new Model();
$staff = [];


if (Auth::logged_in()) {
    $units = $user->select()
            ->from('units')
            ->fetch()
            ->getAll();

    $user->buildQuery = [];

    //dd($_SESSION);

    if (!isset($_SESSION['unit']) || ((isset($_SESSION['unit']) && $_SESSION['unit'] === 'all') && $_SESSION['status'] === 'all')) {

        $staff = $user->select('st.*,unit_name, vd.status, vd.remarks')
            ->from('staff AS st')
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->leftJoin('units AS un', 'st.unit', 'un.unit_id')
            ->fetch()
            ->getAll();
        //dd($_SESSION);
    }/* else if ($_SESSION['unit'] === 'all' && $_SESSION['status'] !== 'all') {

        $staff = $user->select('st.*, vd.status, vd.remarks')
            ->from('staff AS st')        
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->where('status', '=')
            ->fetch([':status' => $_SESSION['status'] ?? ''])                  
            ->getAll();


    }  */else if ($_SESSION['unit'] !== 'all' && $_SESSION['status'] !== 'all') {

        $staff = $user->select('st.*, unit_name, vd.status, vd.remarks')
            ->from('staff AS st')        
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->leftJoin('units AS un', 'st.unit', 'un.unit_id')
            ->where('status', '=')
            ->and('unit', '=')
            ->fetch(['status' => $_SESSION['status'], 'unit' => $_SESSION['unit']])                  
            ->getAll();

        
    }else {

        $staff = $user->select('st.*, unit_name, vd.status, vd.remarks')
            ->from('staff AS st')        
            ->leftJoin('validations AS vd', 'st.id', 'vd.user_id')
            ->leftJoin('units AS un', 'st.unit', 'un.unit_id')
            ->where('unit', '=')
            ->fetch([':unit' => $_SESSION['unit'] ?? ''])                  
            ->getAll();

    }
}

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Senzu Douglas');
$pdf->SetTitle('TAGH Monthly Staff Validation List');
$pdf->SetSubject('Monthly Staff Validation List');
$pdf->SetKeywords('TCPDF, PDF, radni, nalog, ispis');

//set some language-dependent strings
$pdf->setLanguageArray($l);
// ---------------------------------------------------------
// set font
$pdf->SetFont('helvetica', 'B', 16, '', true);
// add a page
$pdf->AddPage('landscapte', '', true, true);

$tbl = <<<EOD
<table border="0"  cellpadding="0" align="center" fontsize="14">
<tr>
<td>GHANA HEALTH SERVICE</td>
</tr>
</table>
EOD; 
$pdf->writeHTML($tbl, true, true, false, false, ''); 
$pdf->Ln();

$pdf->SetLineStyle(array('width' => 0.0, 'cap' => 'butt', 'join' => 'miter', 'dash' => 4, 'color' => array(0, 0, 0)));
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(0,0,0);

$pdf->Ln();

$pdf->SetFont('helvetica', '', 12, '', false);

$tbl = <<<EOD
<table border="1" fontsize="12">
<tr align="center" style="font-size: 13px; font-weight: bolder;">
<th width="50" align="left"> #</th>
<th width="80">STAFF ID</th>
<th width="200">NAME</th>
<th width="60">GRADE</th>
<th width="90">TELEPHONE</th>
<th width="80">STATUS</th>
<th width="200">REMARKS</th>
<th width="200">UNIT</th>
</tr>
EOD;

//$pdf->writeHTML($tbl, false, false, false, false, 'l');

//$pdf->Ln();
//$pdf->SetFont('helvetica', '', 12, '', true);

$count = 1;

 foreach($staff as $row) {

    if ($row['status'] === 1) {
        $row['status'] = "At Post";
    } elseif ($row['status'] === 0) {
        $row['status'] = "Not At Post";
    }else {
        $row['status'] = "Not Validated";
    }
  $tbl .= "<tr>
<td> {$count}</td> 
<td> {$row['staff_id']}</td>
<td> {$row['fname']} {$row['oname']} {$row['lname']}</td> 
<td> {$row['grade']}</td>
<td> {$row['phone']}</td>
<td> {$row['status']}</td>
<td> {$row['remarks']}</td>
<td> {$row['unit_name']}</td>
</tr>";

    $count++;
 }

$tbl .= '</table>';

$pdf->writeHTML($tbl, true, false, false, false, '');

// Set some content to print
$html = <<<EOD
<i>APINTO GOVERNMENT HOSPITAL, TARKWA</i>
EOD;

$pdf->writeHTMLCell($w='', $h='', $x='', $y='', $html, $border=1, $ln=1, $fill=1, $reseth=true, $align='center', $autopadding=true);

$filename = 'validated-emp_' . date('m-d-Y') . ".pdf";

// ---------------------------------------------------------
//Close and output PDF document
$pdf->Output( $filename, 'I');
