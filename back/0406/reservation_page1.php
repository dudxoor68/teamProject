<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <!--<meta http-equiv="refresh" content="2;url=localhost/reservation.php"/>-->
  <title>DB 등록</title>
</head>
<body>
<?php
	$a="Y";
	$b="Y";
	$c="Y";
	$d="Y";
	$e="Y";
	$f="Y";
	$g="Y";
	$h="Y";
	
	$YY = (int)date("Y");
	$MM = date("m");
	$DD = date("d");
	$AA = $MM.$DD;
	$calc = (int)$AA;
	
	$reservation_status_date = "2023-04-01";

	$connect = mysqli_connect('localhost','root','','project3');
    if(mysqli_connect_error()) {
        echo "데이터베이스 연결에 실패하였습니다.";
    }
	
	$sql = "select reservation_status_date, booking_possibility_1, booking_possibility_2, booking_possibility_3, booking_possibility_4, booking_possibility_5, booking_possibility_6, booking_possibility_7, booking_possibility_8 from p_reservation_status where reservation_status_date='$reservation_status_date'";

	$result = mysqli_query($connect,$sql);

    while($rows = mysqli_fetch_row($result)){
		$reservation_status_date=$rows[0];
		$a=$rows[1];
		$b=$rows[2];
		$c=$rows[3];
		$d=$rows[4];
		$e=$rows[5];
		$f=$rows[6];
		$g=$rows[7];
		$h=$rows[8];
    }
	echo $reservation_status_date;
	$str1 = (int)substr($reservation_status_date, 0, 4); 
	$str2 = substr($reservation_status_date, 5, 2); 
	$str3 = substr($reservation_status_date, 8, 2); 
	$str4 = $str2.$str3;
	$str5 = (int)$str4;
	
	$box1="09";
	$box2="11";
	$box3="13";
	$box4="15";
	$box5="17";
	$box6="19";
	$box7="21";
	$box8="23";
	$no="예약불가";
	$yes="예약가능";
	
	if($str5<$calc){
		$HH="24";
	}else if($str5>$calc){
		$HH="08";
	}else if($str5==$calc){
		$HH=date("H");
	}

	if($HH<$box1 && $a=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=09'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}

	if($HH<$box2 && $b=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=11'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}

	if($HH<$box3 && $c=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=13'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}
	
	if($HH<$box4 && $d=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=15'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}
	
	if($HH<$box5 && $e=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=17'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}
	
	if($HH<$box6 && $f=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=19'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}
	
	if($HH<$box7 && $g=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=21'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}
	
	if($HH<$box8 && $h=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=23'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}
	
	mysqli_close($connect);
?>
 
</body>
</html>