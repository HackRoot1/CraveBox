<?php
include '../session.php';
include "../connection.php";
include "../connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST["email"]) ? $_POST["email"] : false;
    $mypassword = isset($_POST["SignInUpassword"]) ? $_POST["SignInUpassword"] : false;

    $UserIdentifyQry = mysqli_query($con, "SELECT * FROM agencylogin WHERE emailAddress='$email' AND password='$mypassword' AND from_web='andaman.vacation' AND active='0'");
    $count = mysqli_num_rows($UserIdentifyQry);

    if ($count == 1) {
        $UserArr = mysqli_fetch_array($UserIdentifyQry);
        $_SESSION['login_user'] = $UserArr['emailAddress'];
        $_SESSION['login_user_fname'] = $UserArr['UserfirstName'];
        $_SESSION['login_user_lname'] = $UserArr['Userlastname'];
        $_SESSION['login_user_phone'] = $UserArr['UserNumber'];
        $_SESSION['logger_name'] = $UserArr['UserfirstName'];
        $_SESSION['from_web'] = $UserArr['from_web'];
        $_SESSION['user_type'] = $UserArr['user_type'];
    }
}

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : false;
$hotelid = isset($_GET['hotelid']) ? $_GET['hotelid'] : false;
$hotelCode = isset($_REQUEST['code']) ? $_REQUEST['code'] : false;
// echo $hotelid;
$noofrooms = isset($_GET["noofrooms"]) ? $_GET["noofrooms"] : false;
$bt = isset($_GET["bt"]) ? $_GET["bt"] : false;
$rooms_no = isset($_REQUEST['rooms_no']) ? $_REQUEST['rooms_no'] : false;
$adults_no = isset($_REQUEST['adults_no']) ? $_REQUEST['adults_no'] : false;
$adultsData = isset($_REQUEST['adultsData']) ? $_REQUEST['adultsData'] : false;
$childData = isset($_REQUEST['childData']) ? $_REQUEST['childData'] : false;
$children_no = isset($_REQUEST['children_no']) ? $_REQUEST['children_no'] : false;
$child_age1 = isset($_REQUEST['child_age1']) ? $_REQUEST['child_age1'] : false;
$child_age2 = isset($_REQUEST['child_age2']) ? $_REQUEST['child_age2'] : false;
$child_age = $child_age1 . ',' . $child_age2;
$diot = isset($_GET['diot']) ? $_GET['diot'] : false;
$check_in = isset($_GET["check_in"]) ? $_GET["check_in"] : false;
$check_out = isset($_GET["check_out"]) ? $_GET["check_out"] : false;
$room_id = isset($_GET["room_id"]) ? $_GET["room_id"] : false;
$date_diff = floor(($check_out - $check_in) / (60 * 60 * 24));

$adults_noArr = "";
$children_noArr = "";
$child_age1Arr = "";
$child_age2Arr = "";

$adults_noArr = explode(",", $adults_no);
$children_noArr = explode(",", $children_no);
$child_age1Arr = explode(",", $child_age1);
$child_age2Arr = explode(",", $child_age2);

$hotelDataQry = mysqli_query($con, "SELECT * FROM met_hotels WHERE hotelCode='$hotelCode'");
// echo "SELECT * FROM met_hotels WHERE hotelCode='$hotelCode'";
$hotel_data = mysqli_fetch_array($hotelDataQry);


setlocale(LC_MONETARY, 'en_IN');
date_default_timezone_set('Asia/Kolkata');

$promoDiscount = 0;
$Discount = "";
$paxwithage = array();
$paxwithageArr = array("adultsData", "childData", "child_age1", "child_age2");
foreach ($paxwithageArr as $paxwithageVal) {
    $paxwithage[$paxwithageVal] = $_GET[$paxwithageVal];
}
$paxwithagestr = serialize(@$paxwithage);

$TotalAdults = 0;
$adultsLen = (string)$adults_no;
for ($eachAdult = 0; $eachAdult < strlen($adultsLen); $eachAdult++) {
    $TotalAdults += $adultsLen[$eachAdult];
}

$TotalChild = 0;
$childrenLen = (string)$children_no;
for ($eachchild = 0; $eachchild < strlen($childrenLen); $eachchild++) {
    $TotalChild += $childrenLen[$eachchild];
}

$diff_date = floor(($check_out - $check_in) / (60 * 60 * 24));

const MEAL_PLAN = [
    1 => 'Room with Breakfast',
    2 => 'Room with Breakfast, Lunch & Dinner',
    3 => 'Room with Breakfast, Lunch or Dinner',
    4 => 'Room only'
];
const ROOM_OCCUPANCY = [
    1 => 'single_bed',
    2 => 'double_bed',
    3 => 'extra_bed',
    4 => 'child_with_bed',
    5 => 'child_without_bed'
];

$meal_plan_id = isset($_REQUEST['mid']) ? $_REQUEST['mid'] : false;
$room_type = isset($_REQUEST['room_type']) ? $_REQUEST['room_type'] : false;
$room_type_id = isset($_REQUEST['room_type_id']) ? $_REQUEST['room_type_id'] : false;

$hotel = null;
$net_hotel_rate = null;
$display_hotel_rate = null;

$net_hotel_rate_qry = mysqli_query($conn, "SELECT * FROM hotel_rates WHERE hotel_id='$room_type_id' AND `room_type`='$room_type'  AND `rate_type`='net_rate' AND `active`='Y' AND `visibility`='Y' AND `deleted_at` IS NULL limit 1");
$net_hotel_rate = mysqli_fetch_array($net_hotel_rate_qry);

$display_single_bed = 0;
$display_double_bed = 0;
$display_extra_bed = 0;
$display_twin_bed = 0;
$display_quard_bed = 0;
$display_child_with_bed = 0;
$display_child_without_bed = 0;
$display_bb = 0;
$display_lunch = 0;
$display_dinner = 0;
$display_h_gst = 0;

$net_single_bed = 0;
$net_double_bed = 0;
$net_extra_bed = 0;
$net_twin_bed = 0;
$net_quard_bed = 0;
$net_child_with_bed = 0;
$net_child_without_bed = 0;
$net_bb = 0;
$net_lunch = 0;
$net_dinner = 0;
$net_h_gst = 0;

for ($each_day = 1; $each_day <= $diff_date; ++$each_day) {
    $each_date = date("Y-m-d", strtotime(date("Y-m-d", $check_in) . '+ ' . $each_day . ' day'));

    $net_rate_qry = mysqli_query($conn, "SELECT * FROM hotel_rates WHERE hotel_id='$room_type_id' AND `room_type`='$room_type'  AND `rate_type`='net_rate' AND `active`='Y' AND `visibility`='Y' AND `deleted_at` IS NULL AND `valid_from` <= '" . $each_date . "' AND `valid_to` >= '" . $each_date . "' limit 1");
    $net_rate = mysqli_fetch_array($net_rate_qry);


    $display_rate_qry = mysqli_query($conn, "SELECT * FROM hotel_rates WHERE hotel_id='$room_type_id' AND `room_type`='$room_type'  AND `rate_type`='display_rate' AND `active`='Y' AND `visibility`='Y' AND `deleted_at` IS NULL AND `valid_from` <= '" . $each_date . "' AND `valid_to` >= '" . $each_date . "' limit 1");
    $display_rate = mysqli_fetch_array($display_rate_qry);

    $net_single_bed += $net_rate['single_bed'];
    $net_double_bed += $net_rate['double_bed'];
    $net_extra_bed += $net_rate['extra_bed'];
    $net_twin_bed += $net_rate['twin_bed'];
    $net_quard_bed += $net_rate['quard_bed'];
    $net_child_with_bed += $net_rate['child_with_bed'];
    $net_child_without_bed += $net_rate['child_without_bed'];
    $net_bb += $net_rate['bb'];
    $net_lunch += $net_rate['lunch'];
    $net_dinner += $net_rate['dinner'];
    $net_h_gst += $net_rate['hgst'];

    $display_single_bed += $display_rate['single_bed'];
    $display_double_bed += $display_rate['double_bed'];
    $display_extra_bed += $display_rate['extra_bed'];
    $display_twin_bed += $display_rate['twin_bed'];
    $display_quard_bed += $display_rate['quard_bed'];
    $display_child_with_bed += $display_rate['child_with_bed'];
    $display_child_without_bed += $display_rate['child_without_bed'];
    $display_bb += $display_rate['bb'];
    $display_lunch += $display_rate['lunch'];
    $display_dinner += $display_rate['dinner'];
    $display_h_gst += $display_rate['hgst'];
}

$net_hotel_rate = [
    'room_type' => $net_hotel_rate['room_type'],
    'double_bed' => $net_double_bed / $diff_date,
    'single_bed' => $net_single_bed / $diff_date,
    'extra_bed' => $net_extra_bed / $diff_date,
    'twin_bed' => $net_twin_bed / $diff_date,
    'quard_bed' => $net_quard_bed / $diff_date,
    'child_with_bed' => $net_child_with_bed / $diff_date,
    'child_without_bed' => $net_child_without_bed / $diff_date,
    'bb' => $net_bb / $diff_date,
    'lunch' => $net_lunch / $diff_date,
    'dinner' => $net_dinner / $diff_date,
    'h_gst' => $net_h_gst / $diff_date,
    'meal_plan_id' => $meal_plan_id
];

$display_hotel_rate = [
    'double_bed' => $display_double_bed / $diff_date,
    'single_bed' => $display_single_bed / $diff_date,
    'extra_bed' => $display_extra_bed / $diff_date,
    'twin_bed' => $display_twin_bed / $diff_date,
    'quard_bed' => $display_quard_bed / $diff_date,
    'child_with_bed' => $display_child_with_bed / $diff_date,
    'child_without_bed' => $display_child_without_bed / $diff_date,
    'bb' => $display_bb / $diff_date,
    'lunch' => $display_lunch / $diff_date,
    'dinner' => $display_dinner / $diff_date,
    'h_gst' => $display_h_gst / $diff_date,
    'meal_plan_id' => $meal_plan_id
];

$hotel_final_rate = hotelPaxCalculation($child_age1Arr, $child_age2Arr, $noofrooms, $adults_noArr, $children_noArr, $net_hotel_rate, $display_hotel_rate, false, $meal_plan_id, $meal_plan_id, true, $diff_date, $parameters);

function hotelPaxCalculation($child_age1Arr, $child_age2Arr, $noofrooms, $adults_noArr, $children_noArr, $min_net_rate, $display_hotel_rate, $list = false, $net_meal_plan_id, $display_meal_plan_id, $is_final_rate = false, $diff_date, $parameters)
{
    $netCalculation = [];
    $displayCalculation = [];
    $net_total_rate = 0;
    $display_total_rate = 0;
    $h_gst = 0;
    $room_guests = explode('e', $parameters->room_guests);

    $meal_net_rate = mealCalculation($net_meal_plan_id, $min_net_rate);
    $meal_display_rate = mealCalculation($display_meal_plan_id, $display_hotel_rate);
    $night = $is_final_rate == true ? $diff_date : 0;

    if ($meal_net_rate > 0 || $is_final_rate == true) {
        for ($i = 0; $i < $noofrooms; ++$i) {
            $bed_adult_arr = [];
            $bed_child_arr = [];
            $adult = $adults_noArr[$i];
            $child = $children_noArr[$i];
            $age = $child_age1Arr[$i] . "," . $child_age2Arr[$i];

            if ($adult > 0) {
                array_push($bed_adult_arr, ROOM_OCCUPANCY[$adult]);
            }
            if ($child > 0) {
                array_push($bed_child_arr, ROOM_OCCUPANCY[$child]);
                $netCalculation[$i]['child'] = hotelChildCalculation($min_net_rate, $child, $adult, $age, $meal_net_rate) * $night;
                $netCalculation[$i]['child_count'] = $child;
                $netCalculation[$i]['night'] = $night;
                $displayCalculation[$i]['child'] = hotelChildCalculation($display_hotel_rate, $child, $adult, $age, $meal_display_rate) * $night;
                $displayCalculation[$i]['child_count'] = $child;
                $displayCalculation[$i]['night'] = $night;
                $net_total_rate += $netCalculation[$i]['child'];
                $display_total_rate += $displayCalculation[$i]['child'];
            }

            foreach ($bed_adult_arr as $bed) {
                if ($bed == 'extra_bed') {
                    $netCalculation[$i]['adult'] = hotelExtraAdultCalculation($min_net_rate, $meal_net_rate) * $night;
                    $netCalculation[$i]['adult_count'] = $adult;
                    $netCalculation[$i]['night'] = $night;
                    $displayCalculation[$i]['adult'] = hotelExtraAdultCalculation($display_hotel_rate, $meal_display_rate) * $night;
                    $displayCalculation[$i]['adult_count'] = $adult;
                    $displayCalculation[$i]['night'] = $night;
                } else {
                    $netCalculation[$i]['adult'] = hotelAdultCalculation($min_net_rate[$bed], $bed, $meal_net_rate) * $night;
                    $netCalculation[$i]['adult_count'] = $adult;
                    $netCalculation[$i]['night'] = $night;
                    $displayCalculation[$i]['adult'] = hotelAdultCalculation($display_hotel_rate[$bed], $bed, $meal_display_rate) * $night;
                    $displayCalculation[$i]['adult_count'] = $adult;
                    $displayCalculation[$i]['night'] = $night;
                }

                $net_total_rate += $netCalculation[$i]['adult'];
                $display_total_rate += $displayCalculation[$i]['adult'];
            }
        }
    }

    $discount = $display_total_rate - $net_total_rate;
    $percent_discount = $display_total_rate == 0 ? 0 :  round(100 * ($display_total_rate - $net_total_rate) / $display_total_rate);
    $h_gst = round(($display_total_rate * $min_net_rate['h_gst']) / 100);
    $gst = round((($net_total_rate + $h_gst) * 5) / 100);
    $service_tax = $h_gst + $gst;

    return [
        'net_rate' => $netCalculation,
        'display_rate' => $displayCalculation,
        'base_price' => $display_total_rate,
        'discount' => $discount,
        'service_tax' => $service_tax,
        'percent_discount' => round($percent_discount),
        'after_discount' => $net_total_rate,
        'grant_total' => $net_total_rate + $service_tax,
        'night' => $night
    ];
}

function hotelExtraAdultCalculation($hotel_rate, $meal_rate)
{
    // $markup = Markup::where('markup_type', 2)->first();
    global $con;
    $markup_qry = mysqli_query($con, "SELECT * FROM markup WHERE markup_type = 'avhotels'");
    $markup = mysqli_fetch_array($markup_qry);
    $rate = (($hotel_rate['double_bed'] + ($meal_rate * 2)) + ($hotel_rate['extra_bed'] + $meal_rate));
    return round(($rate *  $markup['mark']) + $rate);
}

function hotelAdultCalculation($rate, $bed, $meal_rate)
{
    global $con;
    $markup_qry = mysqli_query($con, "SELECT * FROM markup WHERE markup_type = 'avhotels'");
    $markup = mysqli_fetch_array($markup_qry);
    // $markup = Markup::where('markup_type', 2)->first();
    $rate = $bed == 'double_bed' ? $rate + ($meal_rate * 2) : $rate + $meal_rate;
    return round(($rate * $markup['mark']) + $rate);
}

function hotelChildCalculation($hotel_rate, $no_of_child, $adult, $age, $meal_rate)
{
    global $con;
    // $markup = Markup::where('markup_type', 2)->first();
    $markup_qry = mysqli_query($con, "SELECT * FROM markup WHERE markup_type = 'avhotels'");
    $markup = mysqli_fetch_array($markup_qry);
    $rate = 0;
    switch ($adult) {
        case 1:
            if ($no_of_child == 1) {
                //                    if($is_display_rate == false) {
                $age_arr = explode(',', $age);
                for ($i = 0; $i < $no_of_child; ++$i) {
                    if ($age_arr[$i] < 7 && $age_arr[$i] > 0) {
                        $rate += ($hotel_rate['child_without_bed'] + $meal_rate);
                    } elseif ($age_arr[$i] >= 7) {
                        $rate += ($hotel_rate['child_with_bed'] + $meal_rate);
                    }
                }
                //                    }
            } elseif ($no_of_child == 2) {
                //                    if($is_display_rate == false) {
                $age_arr = explode(',', $age);
                for ($i = 0; $i < $no_of_child; ++$i) {
                    if ($age_arr[$i] < 7 && $age_arr[$i] > 0) {
                        $rate += ($hotel_rate['child_without_bed'] + $meal_rate);
                    } elseif ($age_arr[$i] >= 7) {
                        $rate += ($hotel_rate['child_with_bed'] + $meal_rate);
                    }
                }
                //                    }
            } elseif ($no_of_child == 3) {
                //                    if($is_display_rate == false) {
                $age_arr = explode(',', $age);
                for ($i = 0; $i < $no_of_child; ++$i) {
                    if ($age_arr[$i] < 7 && $age_arr[$i] > 0) {
                        $rate += ($hotel_rate['child_without_bed'] + $meal_rate);
                    } elseif ($age_arr[$i] >= 7) {
                        $rate += ($hotel_rate['child_with_bed'] + $meal_rate);
                    }
                }
                //                    }
            }
            break;
        case 2:
            if ($no_of_child == 1) {
                //                    if($is_display_rate == false) {
                $age_arr = explode(',', $age);
                for ($i = 0; $i < $no_of_child; ++$i) {
                    if ($age_arr[$i] < 7 && $age_arr[$i] > 0) {
                        $rate += ($hotel_rate['child_without_bed'] + $meal_rate);
                    } elseif ($age_arr[$i] >= 7) {
                        $rate += ($hotel_rate['child_with_bed'] + $meal_rate);
                    }
                }
                //                    }
            } elseif ($no_of_child == 2) {
                //                    if($is_display_rate == false) {
                $age_arr = explode(',', $age);
                for ($i = 0; $i < $no_of_child; ++$i) {
                    if ($age_arr[$i] < 7 && $age_arr[$i] > 0) {
                        $rate += ($hotel_rate['child_without_bed'] + $meal_rate);
                    } elseif ($age_arr[$i] >= 7) {
                        $rate += ($hotel_rate['child_with_bed'] + $meal_rate);
                    }
                }
                //                    }
            }
            break;
        case 3:
            if ($no_of_child == 1) {
                //                    if($is_display_rate == false) {
                $age_arr = explode(',', $age);
                for ($i = 0; $i < $no_of_child; ++$i) {
                    if ($age_arr[$i] < 7 && $age_arr[$i] > 0) {
                        $rate += ($hotel_rate['child_without_bed'] + $meal_rate);
                    } elseif ($age_arr[$i] >= 7) {
                        $rate += ($hotel_rate['child_with_bed'] + $meal_rate);
                    }
                }
                //                    }
            }
            break;
    }

    //        if($is_display_rate == true){
    //            return $rate;
    //        }
    return round(($rate *  $markup['mark']) + $rate);
}

function mealCalculation($meal_plan_id, $hotel_rate)
{
    $rate = 0;
    switch ($meal_plan_id) {
        case 1: //CP
            $rate = $hotel_rate['bb'];
            break;
        case 2: //AP
            $rate = $hotel_rate['bb'] + $hotel_rate['lunch'] + $hotel_rate['dinner'];
            break;
        case 3: //MAP
            $rate = $hotel_rate['bb'] + $hotel_rate['dinner'];
            break;
        case 4: //EP
            $rate = 0;
            break;
    }
    return $rate;
}
$net_rate_total = 0;
$discount_total = 0;
$tax_total = 0;
$rates = 0;

$store_summary = [];
foreach ($hotel_final_rate["net_rate"] as $key => $net_rate) {
    $store_summary[$key]['adult'] = $net_rate['adult_count'];
    $store_summary[$key]['adult_display_rate'] = $hotel_final_rate['display_rate'][$key]['adult'];
    $store_summary[$key]['adult_net_rate'] = $net_rate['adult'];

    $store_summary[$key]['child'] = $net_rate['child_count'];
    $store_summary[$key]['child_display_rate'] = $hotel_final_rate['display_rate'][$key]['child'];
    $store_summary[$key]['child_net_rate'] = $net_rate['child'];
}
$reserveAmount = round($grand_total * 0.3);

$store_summary["sub_total"] = $hotel_final_rate["base_price"];
$store_summary["discount"] = $hotel_final_rate["discount"];
$store_summary["after_discount"] = $hotel_final_rate["after_discount"];
$store_summary["tax_service_fees"] = $hotel_final_rate["service_tax"];
$store_summary["grand_total"] = $hotel_final_rate["grant_total"];
$store_summary["nights"] = $date_diff;
$store_summary["reserve"] = (isset($_GET["resony"]) == "yes") ? round($hotel_final_rate['grant_total'] - ($hotel_final_rate['grant_total'] * 0.3)) : 0;
// print_r($store_summary['reserve']);
$store_summary["paid"] = $hotel_final_rate["grant_total"] - $store_summary["reserve"];
// echo "<pre>";
// print_r($store_summary);
// echo "</pre>";
$submitPayuForm = "submitPayuForm";


$formError = "";
$bookingPrefStr = "AVSH";
function checkRefNoExists($refNo)
{
    global $con;
    $checkRefQryRes = mysqli_query($con, "Select * from online_payment where REFERENCENO = '" . $refNo . "' ");
    if (mysqli_num_rows($checkRefQryRes) == 0) {
        return false; // ref no not found in bookings
    } else {
        return true; // ref no found in bookings
    }
}

function getRefNo()
{
    $bookingPrefStr = "AVSH";
    do {
        $refRandomDigit = str_pad(rand(0, 99999), 5, "0", STR_PAD_LEFT);
        $refNo = $bookingPrefStr . date("Y") . $refRandomDigit;
    } while (checkRefNoExists($refNo));
    return $refNo;
}
$refrenceNo = getRefNo();
$submitPayuForm = "submitPayuForm";
// $MERCHANT_KEY = "Z3HU9Y"; //C0Dr8m 
// $SALT = "PTjlj5x7"; // Merchant Salt as provided by Payu

// Merchant key here as provided by Payu
$MERCHANT_KEY = "Fkn2fx";
// Merchant Salt as provided by Payu
$SALT = "E0anGxB7hOTuXhc8SC5cnmHaYvqbXqFZ";

// End point - change to https://secure.payu.in for LIVE mode
//$PAYU_BASE_URL = "https://test.payu.in";
$PAYU_BASE_URL = "https://secure.payu.in";
$action = '';

$posted = [];
if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        $posted[$key] = htmlentities($value, ENT_QUOTES);
    }
}


if (empty($posted['txnid'])) {
    // Generate random transaction id
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
    $txnid = $posted['txnid'];
}

$hash = '';

// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
// print_r($hashSequence);

if (empty($posted['hash']) && sizeof($posted) > 0) {

    if (
        empty($posted['key'])
        || empty($posted['txnid'])
        || empty($posted['amount'])
        || empty($posted['firstname'])
        || empty($posted['email'])
        || empty($posted['phone'])
        || empty($posted['productinfo'])
        || empty($posted['surl'])
        || empty($posted['furl'])
    ) {
        $formError = "Please Fill Your Details(*)";
    } elseif (empty($posted['policy_terms'])) {
        $formError = "Please Accept Terms & Conditions";
    } else {

        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "";
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "";
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $phone = isset($_POST['phone']) ? $_POST['phone'] : "";
        $TotalAmt = isset($_POST['TotalAmt']) ? $_POST['TotalAmt'] : "";
        $amount = isset($_POST['amount']) ? $_POST['amount'] : "";
        $BalanceAmt = isset($_POST['BalAmt']) ? $_POST['BalAmt'] : "";
        $package_payment_package_name = isset($_POST['package_payment_package_name']) ? $_POST['package_payment_package_name'] : "";
        $package_payment_SELECT_duration = isset($_POST['package_payment_SELECT_duration']) ? $_POST['package_payment_SELECT_duration'] : "";
        $package_payment_type = isset($_POST['package_payment_type']) ? $_POST['package_payment_type'] : "";
        $package_payment_selected_date = isset($_POST['package_payment_selected_date']) ? $_POST['package_payment_selected_date'] : "";
        $package_payment_selected_date1 = isset($_POST['package_payment_selected_date1']) ? $_POST['package_payment_selected_date1'] : "";
        $Noofroom = isset($_POST['Noofroom']) ? $_POST['Noofroom'] : "";
        $adult = isset($_POST['adult']) ? $_POST['adult'] : "";
        $child = isset($_POST['child']) ? $_POST['child'] : "";
        $curTime = isset($_POST['curTime']) ? $_POST['curTime'] : "";
        $from_web = isset($_POST['from_web']) ? $_POST['from_web'] : "";
        $status = isset($_POST['status']) ? $_POST['status'] : "";
        $bkgCategory = isset($_POST['bkgCategory']) ? $_POST['bkgCategory'] : "";
        $bkgLoginName = isset($_POST['bkgLoginName']) ? $_POST['bkgLoginName'] : "";
        $bkgtype = isset($_POST['bkgtype']) ? $_POST['bkgtype'] : "";
        $hotelid = isset($_POST['hotelid']) ? $_POST['hotelid'] : "";
        $paysummery = isset($_POST['paysummery']) ? $_POST['paysummery'] : "";

        $onlinepaymentQry = mysqli_query($con, "INSERT INTO online_payment(REFERENCENO,firstname,lastname,email,phone,TotalAmt,amount,BalanceAmt,package_payment_package_name,package_payment_SELECT_duration,package_payment_type,package_payment_selected_date,package_payment_selected_date1,Noofroom,adult,child,ChildAge,curTime,from_web,bkgCategory,bkgLoginName,bkgtype,uniquqId,paxwithage,paysummery)
	VALUES('$refrenceNo','$firstname','$lastname','$email','$phone','$TotalAmt','$amount','$BalanceAmt','$package_payment_package_name','$package_payment_SELECT_duration','$package_payment_type','$package_payment_selected_date','$package_payment_selected_date1','$Noofroom','$adult','$child','$child_age','$curTime','$from_web','$bkgCategory','$email','$bkgtype','$hotelid','$paxwithagestr','$paysummery')");
        mysqli_query($con, $onlinepaymentQry);


        $hashVarsSeq = explode('|', $hashSequence);
        $hash_string = '';
        foreach ($hashVarsSeq as $hash_var) {
            $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
            $hash_string .= '|';
        }
        $hash_string .= $SALT;
        $hash = strtolower(hash('sha512', $hash_string));
        $action = $PAYU_BASE_URL . '/_payment';
    }
} elseif (!empty($posted['hash'])) {
    $hash = $posted['hash'];
    $action = $PAYU_BASE_URL . '/_payment';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title><?php echo $hotel_data["hotelName"] ?> - Andaman Vacations</title>
    <meta name="robots" content="noindex">
    <!-- Favicons-->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144.png">
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- COMMON CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/fontello/css/icon_set_1.css" rel="stylesheet">
    <link href="../css/fontello/css/icon_set_2.css" rel="stylesheet">
    <link href="../css/fontello/css/fontello.css" rel="stylesheet">
    <link href="../css/vendors.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet">
    <?php include '../gtag.php' ?>
    <style>
        main {
            background: #fff;
        }

        #hero_2 {
            height: 250px;
        }

        .bs-wizard {
            padding-top: 130px;
        }

        .progress {
            background-color: #cccccc;
        }

        .bs-wizard>.bs-wizard-step.disabled>.bs-wizard-dot {
            background-color: #cccccc;
        }

        #top_line {
            height: 40px;
            font-size: 12px;
            padding: 6px 0px;
            background: #0000007a;
        }

        .discount {
            background: var(--primary-light);
            color: var(--primary-color);
        }

        .discount td {
            padding: 10px !important;
        }

        .taxes .tax {
            color: var(--secondary-color);
        }

        .taxes {
            position: relative;
        }

        .taxes .tooltiptext {
            visibility: hidden;
            width: 200px;
            background-color: black;
            color: #fff;
            text-align: left;
            border-radius: 6px;
            padding: 5px 10px;
            position: absolute;
            z-index: 1;
            bottom: 35px;
            right: 5px;
        }

        .taxes .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: black transparent transparent transparent;
        }

        .taxes:hover .tooltiptext {
            visibility: visible;
            line-height: 20px;
        }

        textarea::placeholder {
            font-style: italic;
        }

        .alert {
            padding: 8px 16px;
            border-radius: 4px;
        }

        @media (max-width: 767px) {
            .mainHeader {
                height: 60px;
            }
        }
    </style>
    <script>
        var hash = '<?php echo $hash ?>';

        function submitPayuForm() {
            if (hash == '') {
                return;
            }
            var payuForm = document.forms.payuForm;
            payuForm.submit();
        }
    </script>
</head>

<body <?php echo (!empty($submitPayuForm) && $submitPayuForm == "submitPayuForm") ? 'onLoad="submitPayuForm();"' : ''; ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M37Q49VN"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php include '../header1.php' ?>

    <!-- End Header -->
    <section id="hero_2" class="background-image" data-background="url(../img/hotel-booking.jpg)">
        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="intro_title">
                <div class="bs-wizard row">
                    <div class="col-4 bs-wizard-step complete">
                        <div class="text-center bs-wizard-stepnum">Review Your Booking</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#" class="bs-wizard-dot"></a>
                    </div>
                    <div class="col-4 bs-wizard-step active">
                        <div class="text-center bs-wizard-stepnum">Traveller Information</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#" class="bs-wizard-dot"></a>
                    </div>
                    <div class="col-4 bs-wizard-step disabled">
                        <div class="text-center bs-wizard-stepnum">Booking Confirmed...</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#" class="bs-wizard-dot"></a>
                    </div>
                </div>
                <!-- End bs-wizard -->
            </div>
            <!-- End intro-title -->
        </div>
        <!-- End opacity-mask-->
    </section>
    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li class="fontS"><a href="https://www.andaman.vacations/">Home</a>
                    </li>
                    <li class="fontS"><a href="https://www.andaman.vacations/hotels/">Hotels</a>
                    </li>
                    <li class="fontS"><?php echo $hotel_data["hotelName"] ?></li>
                </ul>
            </div>
        </div>
        <!-- End position -->


        <div class="container padding_30">
            <div class="row">
                <div class="col-lg-8 add_bottom_15">
                    <div class="alert alert-primary mb-30">
                        <p class="mb-0">It's almost done! We just need a few more details to confirm your reservation.</p>
                    </div>
                    <div class="form_title">
                        <h3><strong>1</strong>Guest Details</h3>
                        <p>
                            Please share the below details for reservation
                        </p>
                        <?php echo (!empty($formError)) ? '<div class="text-danger">' . $formError . '</div>' : ''; ?>
                    </div>
                    <form method="post" name="payuForm" class="booking-form" action="<?php echo $action; ?>">
                        <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
                        <input type="hidden" name="hash" value="<?php echo $hash ?>" />
                        <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
                        <input type="hidden" name="curl" value="https://andaman.vacations/hotels/hotel-booking-unsuccessful.php?ref=<?php echo $refrenceNo; ?>&cancelled=true" />
                        <input type="hidden" name="productinfo" value="Tour Package" size="64" />
                        <input type="hidden" name="surl" value="https://andaman.vacations/hotels/hotel-booking-successful.php?ref=<?php echo $refrenceNo; ?>" />
                        <input type="hidden" name="furl" value="https://andaman.vacations/hotels/hotel-booking-unsuccessful.php?ref=<?php echo $refrenceNo; ?>" />
                        <input type="hidden" name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" />
                        <input type="hidden" name="udf2" value="<?php echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" />
                        <input type="hidden" name="udf3" value="<?php echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" />
                        <input type="hidden" name="udf4" value="<?php echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" />
                        <input type="hidden" name="udf5" value="<?php echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>" />
                        <input type="hidden" name="pg" value="<?php echo (empty($posted['pg'])) ? '' : $posted['pg']; ?>" />
                        <input type="hidden" name="codurl" value="<?php echo (empty($posted['codurl'])) ? '' : $posted['codurl']; ?>" />
                        <input type="hidden" name="touturl" value="<?php echo (empty($posted['touturl'])) ? '' : $posted['touturl']; ?>" />
                        <input type="hidden" name="drop_category" value="<?php echo (empty($posted['drop_category'])) ? '' : $posted['drop_category']; ?>" />
                        <input type="hidden" name="custom_note" value="<?php echo (empty($posted['custom_note'])) ? '' : $posted['custom_note']; ?>" />
                        <input type="hidden" name="BalAmt" value="<?php echo (isset($_GET["resony"]) == "yes") ? round($hotel_final_rate['grant_total'] - ($hotel_final_rate['grant_total'] * 0.3)) : 0; ?>">
                        <input type="hidden" name="TotalAmt" value="<?php echo $hotel_final_rate['grant_total']; ?>">
                        <input type="hidden" name="bkgCategory" value="hotel">
                        <input type="hidden" name="bkgLoginName" value="<?php echo $_SESSION['login_user']; ?>">
                        <input type="hidden" name="bkgtype" value="<?php echo $bt; ?>">
                        <input type="hidden" name="Noofroom" value="<?php echo $noofrooms; ?>">
                        <input type="hidden" name="package_payment_package_name" value="<?php echo $hotel_data["hotelName"]; ?>">
                        <input type="hidden" name="package_payment_type" value="<?php echo $net_hotel_rate['room_type']; ?>">
                        <input type="hidden" name="package_payment_selected_date" value="<?php echo date("Y-m-d", $check_in); ?>">
                        <input type="hidden" name="package_payment_selected_date1" value="<?php echo date("Y-m-d", $check_out); ?>" size="20" maxlength="20" />
                        <input type="hidden" name="curTime" value="<?php echo date('Y-m-d h:i:s'); ?>" size="20" maxlength="20" />
                        <input type="hidden" name="from_web" value="andaman.vacations" />
                        <input type="hidden" name="adult" value="<?php echo $TotalAdults; ?>" />
                        <input type="hidden" name="child" value="<?php echo $TotalChild; ?>" />
                        <input type="hidden" name="paysummery" value='<?php echo serialize($store_summary); ?>' />
                        <input type="hidden" name="hotelid" value="<?php echo $hotelCode . "," . $net_hotel_rate['meal_plan_id']; ?>" />
                        <input type="hidden" name="INDUSTRY_TYPE_ID" value="Retail" autocomplete="off">
                        <input type="hidden" name="CHANNEL_ID" value="WEB" autocomplete="off">
                        <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $refrenceNo; ?>">
                        <input type="hidden" name="CUST_ID" id="CUST_ID" value="<?php echo $refrenceNo; ?>" autocomplete="off">
                        <div class="step">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo (empty($posted['firstname'])) ? $_SESSION['login_user_fname'] : $posted['firstname']; ?>" <?php echo (empty($_SESSION['login_user_fname'])) ? "" : "readonly"; ?>>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? $_SESSION['login_user_lname'] : $posted['lastname']; ?>" <?php echo (empty($_SESSION['login_user_lname'])) ? "" : "readonly"; ?> />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" id="email" value="<?php echo (empty($posted['email'])) ? $_SESSION['login_user'] : $posted['email']; ?>" <?php echo (empty($_SESSION['login_user'])) ? "" : "readonly"; ?> />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone" value="<?php echo (empty($posted['phone'])) ? $_SESSION['login_user_phone'] : $posted['phone']; ?>" <?php echo (empty($_SESSION['login_user_phone'])) ? "" : "readonly"; ?> />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End step -->

                        <div class="form_title">
                            <h3><strong>2</strong>Payment Information</h3>
                            <p>
                                Click on Proceed to process the payment and confirm the booking.
                            </p>
                        </div>
                        <!--End step -->
                        <?php
                        $GrandTotalAmt = (isset($_GET["resony"]) == "yes") ? round($hotel_final_rate['grant_total'] * 0.3) : $hotel_final_rate['grant_total'];
                        $amount =  (isset($_GET["resony"]) == "yes") ? round($hotel_final_rate['grant_total'] * 0.3) : $hotel_final_rate['grant_total'];
                        $amount = number_format($amount);
                        // print_r($GrandTotalAmt);
                        ?>
                        <div id="policy">
                            <h4 class="fontS mb-20"><b>Total Cost : </b><span class="fontB"><i class="icon-rupee no-margin"></i><?php echo $amount; ?></span></h4>
                            <input type="hidden" class="form-control" name="amount" value="<?php echo round($GrandTotalAmt); ?>" placeholder="" readonly />
                            <div class="form-group">
                                <label class="container_check font-normal">
                                    By Clicking on Proceed Button You Agree with our <a href="#" data-toggle="modal" data-target="#t2a-booking-policy">Hotel Booking Policy</a>
                                    <input type="checkbox" name="policy_terms" id="policy_terms">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <?php if (!$hash) { ?>
                                <input type="submit" name="submit" value="PROCEED" class="btn_1 primaryBtn medium" />
                            <?php } ?>
                        </div>
                    </form>
                </div>

                <aside class="col-lg-4">
                    <div class="theiaStickySidebar">
                        <div class="box_style_1 expose" id="booking_box">
                            <h3 class="inner">- Booking Summary -</h3>
                            <img alt="Image" class="sp-image full-width pb-10" src="https://photoz.andaman.vacations/Hotelimage/<?php echo (!empty($hotel_data["thumbImg"])) ? $hotel_data["thumbImg"] : '../img/slider_single_tour/1_medium.jpg'; ?>">
                            <div class="row pb5">
                                <div class="col-12">
                                    <p class="font15 text-left font-bold no-margin">Room Charges</p>
                                </div>
                            </div>
                            <table class="table table_summary no-margin">
                                <tbody>

                                    <tr>
                                        <td class="font-bold">
                                            Sub Total
                                        </td>
                                        <td class="text-right font-bold">
                                            &#8377;<?php echo number_format($hotel_final_rate['base_price']); ?>
                                        </td>
                                    </tr>
                                    <tr class="discount">
                                        <td>
                                            Discount
                                        </td>
                                        <td class="text-right font-medium">
                                            &#8377; <?php echo number_format($hotel_final_rate['discount']); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Price after Discount
                                        </td>
                                        <td class="text-right font-medium">
                                            &#8377;
                                            <?php
                                            echo number_format($hotel_final_rate['after_discount']);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="taxes">
                                            Taxes
                                        </td>
                                        <td class="text-right font-medium">
                                            &#8377; <?php echo number_format($hotel_final_rate['service_tax']); ?>
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <td>
                                            Total cost
                                        </td>
                                        <td class="text-right">
                                            &#8377; <?php
                                                    echo number_format($hotel_final_rate['grant_total']);
                                                    ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/box_style_1 -->
                    </div>
                </aside>

            </div>
            <!--End row -->
        </div>
        <!--End container -->
    </main>
    <!-- End main -->

    <div class="modal fade" id="t2a-booking-policy" tabindex="-1" role="dialog" aria-labelledby="t2a-booking-policyLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header orange-bg">
                    <h5 class="modal-title fontM" id="t2a-booking-policyLabel">Hotel Booking, Cancellation & other Terms & Conditions at andaman.vacations</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h6>Hotel Booking and Check-in Policy :</h6>
                    <ul>
                        <li> The primary guest must be at least 18 years of age while booking and checking in to the hotel </li>
                        <li> It is mandatory to all the guests to present valid photo identification at the time of check-in at Hotel.</li>
                        <li> The identification proofs accepted while Check-in to the hotels is a driver's License, Voters Card, Adhar Card, and Passport. Some Hotels and other Authorities will not consider PAN Cards as a valid ID cards.</li>
                        <li> The Check-in and Check-out times are clearly mentioned in the voucher. Early check-in or late check-out is subject to availability at the hotel and the hotel might charge you extra for it.</li>
                        <li> The Tariff Shown while booking is inclusive of Breakfast other than specified.</li>
                        <li> The booking of an Extra Person / Child is facilitated with a folding cot or a mattress as an extra bed based on the Hotel facility. </li>
                        <li> The hotel may be sold out while processing your reservation. In that case, Our representative will offer similar property or refund 100% of the received amount based on your preference.</li>
                        <li>Booking cannot be canceled on or after the check-in date and time mentioned in the Hotel Confirmation Voucher. </li>
                        <li>The hotel reserves the right of admission. The reservation can be denied on doubtful relation/ identity if suitable proof of identification is not presented at check-in. Andaman Vacations will not be responsible if the reservation is canceled by the hotel for the above reasons.</li>
                        <li>Modifications / Cancellations and its charges on an existing booking will be at the discretion of the Hotel and Its Policy.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer -->
    <div id="toTop"></div><!-- Back to top button -->

    <!-- Common scripts -->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/common_scripts_min.js"></script>
    <script src="../js/functions.js"></script>

</body>

</html>