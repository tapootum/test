<!DOCTYPE html>
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8 />
<html>
<head>
<script src="countdown.js" type="text/javascript"></script>

</head>
	<body>
	<center>
		<script type="application/javascript">
			var myCountdown2 = new Countdown({
									time: 1, 
									width:200, 
									height:80, 
									rangeHi:"minute",	// <- no comma on last item!
									onComplete	:  coCo//countdownComplete

									});
			function coCo(){
					test1.submit();
			}
			function countdownComplete(){
					//alert('ttt');
					document.forms["test1"].submit();
			}

		
		</script>
		
		<script type="text/javascript"> test1.submit();</script>
		<?php
				echo $_POST["lname"];
			?>
		กำลังทำข้อสอบ <br>
		</center>
		<form action="result.php" method="post" id="test1" name="test1">
			
			<br>
			<center>การทดสอบความรู้เพื่อคัดเลือกเป็นครูนายสิบ และครูทหารใหม่ (ผลัด ๒ ปี ๕๖)</center><br>
			ข้อสอบชุดที่ ๑ ( วิชาอาวุธ ) ข้อ ๑ - ๑๕ <br> 
			<br>๑. ประเทศใดเป็นผู้ผลิต ปลย.๑๑<br>
			<input type="radio" name="ch1" value="1">ไทย,อเมริกา<br>
			<input type="radio" name="ch1" value="2">ไทย,เยอรมัน<br>
			<input type="radio" name="ch1" value="3">ไทย,สวีเดน<br>
			<input type="radio" name="ch1" value="4">ไทย,อิสราเอล<br>

			<br>๒. ปลย.๑๑ มีขนาดกว้างปากลำกล้องเท่าใด<br>
			<input type="radio" name="ch2" value="1">๕.๖๕ มม.<br>
			<input type="radio" name="ch2" value="2">๕.๕๖ มม.<br>
			<input type="radio" name="ch2" value="3">๗.๖๒ มม.<br>
			<input type="radio" name="ch2" value="4">๗.๗๒ มม.<br>

			<br>๓. ปลย.๑๑ มีระยะยิงไกลสุดเท่าใด<br>
			<input type="radio" name="ch3" value="1">๒,๖๕๓ ม.<br>
			<input type="radio" name="ch3" value="2">๓,๐๐๐ ม.<br>
			<input type="radio" name="ch3" value="3">๓,๕๓๔ ม.<br>
			<input type="radio" name="ch3" value="4">๓,๐๐๐ ม.<br>

			<br>๔. ปลย.๑๑ มีระยะยิงหวังผลสูงสุดเท่าใด<br>
			<input type="radio" name="ch4" value="1">๔๖๐ ม.<br>
			<input type="radio" name="ch4" value="2">๔๕๐ ม.<br>
			<input type="radio" name="ch4" value="3">๔๐๐ ม.<br>
			<input type="radio" name="ch4" value="4">๓๕๐ ม.<br>
			
			<br>๕. ปลย.๑๑ มีอัตราการยิงกี่นัดต่อนาที<br>
			<input type="radio" name="ch5" value="1">๗๐๐ - ๘๐๐ นัด/นาที<br>
			<input type="radio" name="ch5" value="2">๖๕๐ - ๗๕๐ นัด/นาที<br>
			<input type="radio" name="ch5" value="3">๖๐๐ - ๖๕๐ นัด/นาที<br>
			<input type="radio" name="ch5" value="4">๔๐๐ - ๕๕๐ นัด/นาที<br>

			<br>๖. ปลย.๑๑ มีอัตรากระสุนมูลฐานเท่าใด<br>
			<input type="radio" name="ch6" value="1">๑๘๐ นัด<br>
			<input type="radio" name="ch6" value="2">๒๘๐ นัด<br>
			<input type="radio" name="ch6" value="3">๓๘๐ นัด<br>
			<input type="radio" name="ch6" value="4">๔๘๐ นัด<br>
			
			<br>๗. ปลย.๑๑ มีน้ำหนักปืนทั้งกระบอกเท่าใด (ไม่รวมซองกระสุน)<br>
			<input type="radio" name="ch7" value="1">๔.๑๕ กก.<br>
			<input type="radio" name="ch7" value="2">๓.๔๕ กก.<br>
			<input type="radio" name="ch7" value="3">๓.๓๕ กก.<br>
			<input type="radio" name="ch7" value="4">๓.๒๕ กก.<br>

			<br>๘. ประเทศใดเป็นผปู้ผลิต ปลย.ขนาด ๕.๕๖ มม. แบบทาโวร์<br>
			<input type="radio" name="ch8" value="1">อเมริกา<br>
			<input type="radio" name="ch8" value="2">เยอรมัน<br>
			<input type="radio" name="ch8" value="3">สวีเดน<br>
			<input type="radio" name="ch8" value="4">อิสราเอล<br>

			<br>๙. ปลย.ขนาด ๕.๕๖ มม. แบบทรโวร์ มีขนาดกว้างปากลำกล้อง<br>
			<input type="radio" name="ch9" value="1">๗.๗๒ มม.<br>
			<input type="radio" name="ch9" value="2">๗.๖๒ มม.<br>
			<input type="radio" name="ch9" value="3">๕.๖๕ มม.<br>
			<input type="radio" name="ch9" value="4">๕.๕๖ มม.<br>

			<br>๑๐. ปลย.ขนาด ๕.๕๖ มม. แบบ ทาโวร์ มีน้ำหนักทั้งกระบอกเท่าใด (ไม่รวมซองกระสุน)<br>
			<input type="radio" name="ch10" value="1">๓.๕๗ กก.<br>
			<input type="radio" name="ch10" value="2">๓.๔๗ กก.<br>
			<input type="radio" name="ch10" value="3">๓.๓๗ กก.<br>
			<input type="radio" name="ch10" value="4">๓.๒๗ กก.<br>

			<br>๑๑. ปลย.ขนาด ๕.๕๖ มม. แบบทาโวร์ มีระยะยิงหวังผลสููงสุดเท่าใด<br>
			<input type="radio" name="ch11" value="1">๕๐๐ ม.<br>
			<input type="radio" name="ch11" value="2">๔๕๐ ม.<br>
			<input type="radio" name="ch11" value="3">๔๐๐ ม.<br>
			<input type="radio" name="ch11" value="4">๓๕๐ ม.<br>

			<br>๑๒. ปลย.ขนาด ๕.๕๖ มม. แบบ ทาโวร์ มีอัตราการยิงกี่นัดต่อนาที<br>
			<input type="radio" name="ch12" value="1">๗๐๐ - ๑,๐๐๐ นัด/นาที<br>
			<input type="radio" name="ch12" value="2">๖๕๐ - ๗๕๐ นัด/นาที<br>
			<input type="radio" name="ch12" value="3">๖๐๐ - ๖๕๐ นัด/นาที<br>
			<input type="radio" name="ch12" value="4">๔๐๐ - ๔๕๐ นัด/นาที<br>

			<br>๑๓. ปลย.ขนาด ๕.๕๖ มม. แบบ ทาโวร์ มีแบบการทำงานอย่างไร<br>
			<input type="radio" name="ch13" value="1">ทำงานด้วยแก๊สดันต่อหัวลูกสูบโดยตรง<br>
			<input type="radio" name="ch13" value="2">ทำงานด้วยแก๊ส<br>
			<input type="radio" name="ch13" value="3">ทำงานด้วยแก๊สดันหน้าลูกเลื่อน<br>
			<input type="radio" name="ch13" value="4">ทำงานด้วยแรงสะท้อนถอยหลังของลำกล้อง<br>

			<br>๑๔. ลูกระเบิดขว้างประกอบด้วยส่วนสำคัญกี่ส่วนอะไรบ้าง<br>
			<input type="radio" name="ch14" value="1">ตัวเปลือก<br>
			<input type="radio" name="ch14" value="2">วัดถุระเบิดที่บรรจุภายใน<br>
			<input type="radio" name="ch14" value="3">เครื่องจุดชนวน<br>
			<input type="radio" name="ch14" value="4">ถูกทุกข้อ<br>

			<br>๑๕. ลูกระเบิดขว้างมีการถ่วงเวลานานเท่าใด<br>
			<input type="radio" name="ch15" value="1">๓ - ๕ วินาที<br>
			<input type="radio" name="ch15" value="2">๒ - ๓ วินาที<br>
			<input type="radio" name="ch15" value="3">๕ - ๖ วินาที<br>
			<input type="radio" name="ch15" value="4">๔ - ๕ วินาที<br>

			<br><br>ข้อสอบชุดที่ ๒ ( วิชาทั่วไป และยุทธวิธี ) ข้อ ๑๖ - ๓๐ <br> 
			<br>๑๖. วิธีการสื่อสารของทหารม้า แบ่งออกเป็นกี่ประเภท<br>
			<input type="radio" name="ch16" value="1">๓ ประเภท<br>
			<input type="radio" name="ch16" value="2">๔ ประเภท<br>
			<input type="radio" name="ch16" value="3">๕ ประเภท<br>
			<input type="radio" name="ch16" value="4">๖ ประเภท<br>

			<br>๑๗. ข้อใดเป็นแบบของกระดาษเขียนข่าว<br>
			<input type="radio" name="ch17" value="1">สส.๖<br>
			<input type="radio" name="ch17" value="2">สส.๗<br>
			<input type="radio" name="ch17" value="3">ข้อ ๑ และ ๒<br>
			<input type="radio" name="ch17" value="4">ไม่มีข้อถูก<br>

			<br>๑๘. ข้อในเป็นการอ่านพิกัดกริดบนแผนที่ ที่ถูกต้อง<br>
			<input type="radio" name="ch18" value="1">บนลงล่าง - ซ้ายไปขวา<br>
			<input type="radio" name="ch18" value="2">บนลงล่าง - ขวาไปซ้าย<br>
			<input type="radio" name="ch18" value="3">ล่างขึ้นบน - ซ้ายไปขวา<br>
			<input type="radio" name="ch18" value="4">ล่างขึ้นบน - ขวาไปซ้าย<br>

			<br>๑๙. ข้อใดเป็นส่วนประกอบที่สำคัญของเข็มทิศเลนซ์เซติก<br>
			<input type="radio" name="ch19" value="1">ฝาตลับเข็มทิศ<br>
			<input type="radio" name="ch19" value="2">เรือนเข็มทิศ<br>
			<input type="radio" name="ch19" value="3">ก้านเล็ง<br>
			<input type="radio" name="ch19" value="4">ถูกทุกข้อ<br>

			<br>๒๐. ข้อใดเป็นความหมายของการปฐมพยาบาล<br>
			<input type="radio" name="ch20" value="1">เพื่อให้ผู้บาดเจ็บมีกำลังใจดีขึ้น<br>
			<input type="radio" name="ch20" value="2">เพื่อให้ผู้บาดเจ็บมีสุขภาพแข็งแรง<br>
			<input type="radio" name="ch20" value="3">เพื่อบรรเทาให้ผู้บาดเจ็บมีอาการทุเลาลง<br>
			<input type="radio" name="ch20" value="4">ไม่มีข้อถูก<br>

			<br>๒๑. ข้อใดเป็นวิธีการรายงานข่าว<br>
			<input type="radio" name="ch21" value="1">การรายงานด้วยวาจา และการรายงานเป็นลายลักษณ์อักษร<br>
			<input type="radio" name="ch21" value="2">การเขียนข่าว, การวาดแผนที่สังเขป<br>
			<input type="radio" name="ch21" value="3">การใช้โทรศัพท์ และวิทยุ<br>
			<input type="radio" name="ch21" value="4">ถูกทุกข้อ<br>

			<br>๒๒. การสะกดรอยมีกี่ประเภท<br>
			<input type="radio" name="ch22" value="1">๓ ประเภท<br>
			<input type="radio" name="ch22" value="2">๔ ประเภท<br>
			<input type="radio" name="ch22" value="3">๕ ประเภท<br>
			<input type="radio" name="ch22" value="4">๖ ประเภท<br>

			<br>๒๓. ผลอัตรายจากการระเบิดของอาวุธนิวเคลียร์ มีอะไรบ้าง<br>
			<input type="radio" name="ch23" value="1">เกิดแรงระเบิด<br>
			<input type="radio" name="ch23" value="2">เกิดรังสีความร้อน<br>
			<input type="radio" name="ch23" value="3">เกิดรังสีนิวเคลียร์<br>
			<input type="radio" name="ch23" value="4">ถูกทุกข้อ<br>

			<br>๒๔. ข้อใดคือที่กำบังตามธรรมชาติ<br>
			<input type="radio" name="ch24" value="1">พุ่มไม้<br>
			<input type="radio" name="ch24" value="2">ก้อนหินใหญ่<br>
			<input type="radio" name="ch24" value="3">พงหญ้า<br>
			<input type="radio" name="ch24" value="4">ไม่มีข้อถูก<br>

			<br>๒๕. ข้อใดเป็นข้อควรปฏิบัติในการซ่อนพราง<br>
			<input type="radio" name="ch25" value="1">มีวินัยการใช้เสียง, มีวินัยการใช้แสง<br>
			<input type="radio" name="ch25" value="2">เคลื่อนที่โดนเคร่งครัด<br>
			<input type="radio" name="ch25" value="3">ถูกเฉพาะข้อ ๑ <br>
			<input type="radio" name="ch25" value="4">ถูกทั้งข้อ ๑ และ ๒<br>

			<br>๒๖. ข้อใดเป็นข้อควรปฏิบัติต่อพลุส่องสว่างบนพื้นดิน<br>
			<input type="radio" name="ch26" value="1">ให้รีบหมอบ<br>
			<input type="radio" name="ch26" value="2">หลับตาเพื่อรักษาการมองเห็นในที่มืด<br>
			<input type="radio" name="ch26" value="3">ถูกทั้งข้อ ๑ และ ๒<br>
			<input type="radio" name="ch26" value="4">ยิงตอบโต้<br>

			<br>๒๗. วิธีใดเป็นการปฏิบัติการห้ามไอ<br>
			<input type="radio" name="ch27" value="1">กลั้นลมหายใจ<br>
			<input type="radio" name="ch27" value="2">บีบลูกกระเดือกเบาๆ<br>
			<input type="radio" name="ch27" value="3">ถูกเฉพาะข้อ ๑<br>
			<input type="radio" name="ch27" value="4">ถูกทั้งข้อ ๑ และ ๒<br>

			<br>๒๘. วิธีใดเป็นการปฏิบัติการห้ามจาม<br>
			<input type="radio" name="ch28" value="1">กลั้นลมหายใจ<br>
			<input type="radio" name="ch28" value="2">ใช้นิ้วดันจมูกขึ้น<br>
			<input type="radio" name="ch28" value="3">บีบลูกกระเดือกเบาๆ<br>
			<input type="radio" name="ch28" value="4">ถูกทุกข้อ<br>

			<br>๒๙. อาวุธยุทโธปกรณ์ใด ที่หน่วยลาดตะเวนมักจะมีความจพเป็นต้องมีและนำไปใช้ในขณะลาดตระเวน<br>
			<input type="radio" name="ch29" value="1">อาวุธประจำกาย, กล้องส่องสองตา<br>
			<input type="radio" name="ch29" value="2">แผนที่, เข็มทิศ<br>
			<input type="radio" name="ch29" value="3">วิทยุ,เชื่อก,ลูกระเบิดขว้าง,อาวุธเงียบ<br>
			<input type="radio" name="ch29" value="4">ถูกทุกข้อ<br>

			<br>๓๐. ทหารควรเดินได้เท่าไร บนถนน<br>
			<input type="radio" name="ch30" value="1">๗ กม./ชม.<br>
			<input type="radio" name="ch30" value="2">๖ กม./ชม.<br>
			<input type="radio" name="ch30" value="3">๕ กม./ชม.<br>
			<input type="radio" name="ch30" value="4">๔ กม./ชม.<br>

			<br><input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>