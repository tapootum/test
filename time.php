<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body onLoad="begintimer()">
	<script language="">
		var limit="0:20"
			if (document.images){
		var parselimit=limit.split(":")
			parselimit=parselimit[0]*60+parselimit[1]*1
			}
function begintimer(){
	if (!document.images)
		return
	if (parselimit==1)
// เหตุการณ์ที่ต้องการให้เกิดขึ้น
    window.location='page.php'; //ถ้าต้องการให้กระโดดไปยัง Page อื่น
//	echo "<input type="submit" name="submit" value="submit">";
		frmTest.submit();
	else{
		parselimit-=1
		curmin=Math.floor(parselimit/60)
		cursec=parselimit%60
	if (curmin!=0)
		curtime="เวลาที่เหลือ <font color=red> "+curmin+" </font>นาที กับ <font color=red>"+cursec+" </font>วินาที "
	else
	if(cursec==0)
	{
		alert('หมดเวลาแล้วจ้า');
	}
	else
	{
	curtime="เวลาที่เหลือ <font color=red>"+cursec+" </font>วินาที "
	}
	document.getElementById('dplay').innerHTML = curtime;
	setTimeout("begintimer()",1000)
	}
}
//-->
</script>
<div id=dplay ></div>
	<form action="result.php" method="post">
			Test1<br>
			<input type="radio" name="ch1" value="1"><br>
			<input type="radio" name="ch1" value="2"><br>
			<input type="radio" name="ch1" value="3"><br>
			<input type="radio" name="ch1" value="4"><br>

			Test2<br>
			<input type="radio" name="ch2" value="1"><br>
			<input type="radio" name="ch2" value="2"><br>
			<input type="radio" name="ch2" value="3"><br>
			<input type="radio" name="ch2" value="4"><br>

			Test3<br>
			<input type="radio" name="ch3" value="1"><br>
			<input type="radio" name="ch3" value="2"><br>
			<input type="radio" name="ch3" value="3"><br>
			<input type="radio" name="ch3" value="4"><br>
			<input type="submit" name="submit" value="submit">
	</form>

</html>