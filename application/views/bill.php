
<?php
$taxID = '0105529026000';
$suFfix = '00';
$reF1 = '11111';
$reF2 = '2222';
$cr = chr(0x0D);
$aMount = '10000'; //100.00
$barcode_show = '|'.$taxID.''.$suFfix.' '.$reF1.' '.$reF2.' '.$aMount;
$barcode = '|'.$taxID.''.$suFfix.$cr.$reF1.$cr.$reF2.$cr.$aMount;
    $code = $barcode;
function ThaiBahtConversion($amount_number)
{
    $amount_number = number_format($amount_number, 2, ".","");
    $pt = strpos($amount_number , ".");
    $number = $fraction = "";
    if ($pt === false) 
        $number = $amount_number;
    else
    {
        $number = substr($amount_number, 0, $pt);
        $fraction = substr($amount_number, $pt + 1);
    }
    $ret = "";
    $baht = ReadNumber ($number);
    if ($baht != "")
        $ret .= $baht . "บาท";
    
    $satang = ReadNumber($fraction);
    if ($satang != "")
        $ret .=  $satang . "สตางค์";
    else 
        $ret .= "ถ้วน";
    return $ret;
}

function ReadNumber($number)
{
    $position_call = array("แสน", "หมื่น", "พัน", "ร้อย", "สิบ", "");
    $number_call = array("", "หนึ่ง", "สอง", "สาม", "สี่", "ห้า", "หก", "เจ็ด", "แปด", "เก้า");
    $number = $number + 0;
    $ret = "";
    if ($number == 0) return $ret;
    if ($number > 1000000)
    {
        $ret .= ReadNumber(intval($number / 1000000)) . "ล้าน";
        $number = intval(fmod($number, 1000000));
    }
    
    $divider = 100000;
    $pos = 0;
    while($number > 0)
    {
        $d = intval($number / $divider);
        $ret .= (($divider == 10) && ($d == 2)) ? "ยี่" : 
            ((($divider == 10) && ($d == 1)) ? "" :
            ((($divider == 1) && ($d == 1) && ($ret != "")) ? "เอ็ด" : $number_call[$d]));
        $ret .= ($d ? $position_call[$pos] : "");
        $number = $number % $divider;
        $divider = $divider / 10;
        $pos++;
    }
    return $ret;
}
 $this->load->library("mpdf/mpdf");
 ob_start();
 ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://bootstraptaste.com" />
</head>


<body >
<div style="position:fixed;left:0.7cm;top:25.1cm"><barcode code="<?php echo $code ?>" type="EAN128A" height="1.5" size="0.5" text="0"/></div>
<div style="position:fixed;left:0.7cm;top:25.9cm;font-size:10px"><?php echo $code ?></div>
<div style="position:fixed;left:17.3cm;top:1.5cm;width:1000px">สำหรับลูกค้า</div>
<div style="position:fixed;left:13.5cm;top:4.5cm;width:1000px"><?php echo $register['firstname']." ".$register['lastname'] ?></div>
<div style="position:fixed;left:16.3cm;top:5.1cm;width:1000px"><?php echo $register['citizenid'] ?></div>
<div style="position:fixed;left:17.3cm;top:5.75cm;width:1000px">0123</div>
<div style="position:fixed;left:14.7cm;top:7.3cm;width:1000px"><?php echo number_format ($register['course_cost']) ?></div>
<div style="position:fixed;left:10.7cm;top:8.2cm;width:1000px;font-size:11px"><?php echo ThaiBahtConversion($register['course_cost']) ?></div>


<div style="position:fixed;left:17.3cm;top:14.2cm;width:1000px">สำหรับธนาคาร</div>
<div style="position:fixed;left:13.5cm;top:17.3cm;width:1000px"><?php echo $register['firstname']." ".$register['lastname'] ?></div>
<div style="position:fixed;left:16.3cm;top:17.9cm;width:1000px"><?php echo $register['citizenid'] ?></div>
<div style="position:fixed;left:17.3cm;top:18.595cm;width:1000px">0123</div>
<div style="position:fixed;left:14.7cm;top:20.1cm;width:1000px"><?php echo number_format ($register['course_cost']) ?></div>
<div style="position:fixed;left:10.7cm;top:20.9cm;width:1000px;font-size:11px"><?php echo ThaiBahtConversion($register['course_cost']) ?></div>

  <div style="padding:0.5cm">
  <div><img src="<?php echo base_url('img/bill-payment.jpg')?> " alt="">
  <p>......................................................................................................................................................................................</p>
    <img src="<?php echo base_url('img/bill-payment.jpg')?> " alt="">
</div>
</div>
</body>
<?php error_reporting(~E_NOTICE & ~E_WARNING);

    
      $html = ob_get_contents();
      ob_end_clean();
      $mpdf = new mPDF('th','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 
      $mpdf->SetDisplayMode('fullpage');
      // echo ob_get_contents();
      // exit();
    //$mpdf->debug = true;
      $mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
      $mpdf->WriteHTML($html);
      //render the pdf on the browser
      $mpdf->Output();
?>