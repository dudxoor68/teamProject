<?php
$fname = $_POST['fname'];
$ftitle = $_POST['ftitle'];
$fwrite = $_POST['fwrite'];
$id = $_POST['id'];
$pw = $_POST['pw'];

$connect = mysqli_connect('localhost','root','','project3');
if(mysqli_connect_error()) {
    echo "데이터베이스 연결에 실패하였습니다.";
}

/* --- 글쓰기 폼에서 입력사항이 누락되었을 경우 메시지 출력 --- */
if($fname == "" || $ftitle == "" || $fwrite == "") {
	echo "<script>
		    alert('입력하지 않은 빈칸이 존재합니다.');
		    history.back();
		  </script>";
}
$insert_date = date("Y-m-d");         //글을 DB에 등록일자
$user_ip = $_SERVER['REMOTE_ADDR'];   //접속자의 IP 주소

$sql = "insert into freeboard_tbl(name,title_board,write_board,insert_day,count_board, user_ip ) 
		       values('$fname','$ftitle','$fwrite','$insert_date',0,'$user_ip')";
$res = mysqli_query($connect,$sql);
mysqli_close($connect);
if($res){
	echo " <script>
	         location.replace('board.php?id=$id&pw=$pw');
	       </script> ";
}else{
	echo " <script>
	         alert('[DB 등록 실패] 글쓰기 화면으로 이동합니다.');
	         history.back();
	       </script> ";
}
?>