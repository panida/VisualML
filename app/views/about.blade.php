<!doctype html>
<html>
	<head>
		<title> VisualML:about </title>
		<meta charset="utf-8"/>
		<link href='http://fonts.googleapis.com/css?family=Felipa' rel='stylesheet' type='text/css'> 
		<link rel="stylesheet" href="css/about_style.css"/> 
	</head>
	<body>
		<div class="allContent">
			<div class="banner">	
				<img src="img/VisualML.png"/>		
				<h1>Introducing VisualML</h1>
				<h2>Machine’s learning you; you’re learning too</h2>
			</div>
			<div class="icon greenFade">
				<a href="#overview">
					<div class="logo">
						<img src="img/overview-green.png"/>
						<span class="logoLabel">ภาพรวม</span>
					</div>
				</a>
				<a href="#function">
					<div class="logo">
						<img src="img/function-green.png"/>
						<span class="logoLabel">ความสามารถ</span>
					</div>
				</a>
				<a href="#algorithm">
					<div class="logo">
						<img src="img/algorithm-green.png"/>
						<span class="logoLabel">อัลกอริทึม</span>
					</div>
				</a>
				<a href="#gui">
					<div class="logo">
						<img src="img/ui-green.png"/>
						<span class="logoLabel">หน้าจอ</span>
					</div>
				</a>			
				
			</div>
			<div class="mainContent greenFade" id="overview">
				<img src="img/machine.png" id="overviewPic1"/>
				<h2>ภาพรวมของโครงการ</h2>					
				<p>
					Machine Learning เป็นศาสตร์หนึ่งทางคอมพิวเตอร์ที่กำลังเป็นที่สนใจมากในปัจจุบัน เนื่องจากเป็นศาสตร์ที่ทำให้คอมพิวเตอร์เปลี่ยนบทบาทจากลูกน้องผู้ไม่เคยเหน็ดเหนื่อยกลายเป็นที่ปรึกษาสุดชาญฉลาดของมนุษย์ ความสามารถของ Machine Learning ในการแบ่งประเภท จัดกลุ่ม ทำนาย หรือตรวจจับความผิดปกติ ล้วนเป็นประโยชน์ต่อการทำงานในสาขาต่างๆ ทั้งด้านวิทยาการ ด้านธุรกิจ และด้านมนุษยศาสตร์
				</p>
				<div id="overviewDiv1">
					<img src="img/science.png" id="overviewPic2"/>
					<img src="img/news.png" id="overviewPic3"/>
					<img src="img/business.png" id="overviewPic4"/>
				</div>
				<p>
					โครงการ VisualML (Visualization of Machine Learning) นี้มีจุดประสงค์ที่จะพัฒนา Web Application เพื่อให้ความรู้เกี่ยวกับเทคนิค Machine Learning แบบต่างๆ รวมถึงเป็นสื่อเสริมจากการเรียนในปัจจุบัน โดยมีจุดเด่นคือผู้ใช้สามารถทดลองกำหนดจุดข้อมูลที่จะให้ระบบเรียนรู้ได้เอง หลังจากนั้นหน้าเว็บจะแสดงขั้นตอนที่เครื่องใช้ในการเรียนรู้ชุดข้อมูลนั้นด้วยเทคนิคต่างๆออกมาให้ผู้ใช้ได้เห็นภาพทีละขั้น ซึ่งอาจอยู่ในรูปเส้นขอบเขตของการแบ่งประเภท หรือแสดงเป็นขั้นตอนการคำนวณก็ได้ ส่วนด้านข้างของหน้าจอ จะปรากฏเนื้อหาความรู้เกี่ยวกับเทคนิคที่กำลังสนใจ พร้อมกับแสดงผลและประสิทธิภาพการทำงานของโมเดลนั้นๆด้วย 
				</p>
<!-- 					<p>
					ทางทีมพัฒนามุ่งหวังว่า โครงการนี้จะทำให้  Machine Learning เป็นเรื่องที่น่าสนุกมากขึ้น หลุดออกจากกรอบของการเรียนแบบเดิมๆที่มีแต่ตัวอักษรในกระดาษ เปิดโอกาสให้ผู้เรียนได้จำลองการทำงานกรณีต่างๆที่ตนเองมีความสนใจได้ เพื่อให้ได้ประโยชน์สูงสุดจากกระบวนการ “เรียนรู้ จับต้อง ทดลอง เข้าใจ”
				</p> -->				
			</div>
			<div class="mainContent greenFade" id="function">
				<h2>ความสามารถของเว็บไซต์ (Functionalities)</h2>
				<div>
					<h3>การกำหนดจุดข้อมูล</h3>
						<img src="img/function1.png" id="function1"/>
						<p>ผู้ใช้สามารถกำหนดจุดข้อมูลให้กับระบบ โดยการแต้มจุดไปบนกระดานทำงานที่หน้าเว็บ ซึ่งการกำหนดจุดลงไป 1 จุด จะหมายถึง 1 example ที่ประกอบไปด้วย 2 continuous features คือ ค่า x และ ค่า y และในกรณีที่เป็นโจทย์ Classification จะใช้สีของจุดแทน Class ของ Target Variable โดยลักษณะการแต้มจุดจะมี 3 วิธี ได้แก่</p>
						<ol>
							<li>ใช้เมาส์แต้มทีละจุด</li>
							<li>ใช้เมาส์กดค้างแล้วลากเป็นเส้น โดยจุดจะถูกปล่อยออกมาอย่างต่อเนื่องด้วยอัตราคงที่</li>
							<li>ใช้เมาส์แต้มเป็นหย่อมๆ โดยแต่ละหย่อมเป็นเซตของจุดที่กระจายอย่างสุ่มอยู่ในรัศมีวงกลมคงที่ค่าหนึ่ง และแต่ละหย่อมจะต้องมีค่า Target Variable เป็น Class เดียวกัน</li>
						</ol>
							
				</div>
				<div>
					<h3>การวิเคราะห์และแสดงผลการวิเคราะห์ </h3>
					<p>ระบบสามารถจำลองกระบวนการทำงานของ Machine Learning เพื่อตอบโจทย์ 3 ลักษณะด้วยกัน ได้แก่ โจทย์ Classification, Regression และ Clustering ซึ่งสำหรับโจทย์ประเภท Classification และ Regression นั้น ระบบจะแยกจุดข้อมูลที่ผู้ใช้กำหนดเป็น 2 ส่วนอย่างสุ่มก่อน คือ Training Data 75% และ Testing Data 25% (สามารถปรับสัดส่วนได้) และจะนำเฉพาะ Training Data มาสร้างโมเดล จากนั้นจึงแสดงผลการทำนาย Testing Data พร้อมประสิทธิภาพของโมเดลนั้น เมื่อผู้ใช้กดปุ่ม Show Testing Data</p>					
					
				</div>
				<div>
					<h3>การปรับค่าพารามิเตอร์</h3>
					<p>ระบบอนุญาตให้ผู้ใช้สามารถปรับ Parameters ของอัลกอริทึมต่างๆ แต่หากผู้ใช้ไม่ปรับแต่ละอัลกอริทึมจะมีค่าเริ่มต้น (Default) กำหนดให้โดยระบบอยู่แล้ว</p> 
					<img src="img/function3.png" id="function3"/>
				</div>
				<div>						
					<h3>การอธิบายหลักการ</h3> 
					<p>ด้านขวาของกระดานทำงาน จะมีคำอธิบายเกี่ยวกับเทคนิค Machine Learning ที่กำลังใช้อยู่ในปัจจุบันแสดงไว้ เพื่อผู้อ่านสามารถทำความเข้าใจหลักการทำงานของอัลกอริทึมนั้นๆได้ดียิ่งขึ้น รวมถึงมี link ไปยังเว็บไซต์อื่นๆที่น่าสนใจและเกี่ยวข้องกับหัวข้อนั้นๆอีกด้วย </p>
					<img src="img/function4.png" id="function4"/>
				</div>
				
	
				<div id = "killer">
					<p>
						Killing Feature : ฟังก์ชันในข้อ 2 และ 4 เนื่องจากเป็นแนวคิดหลักที่ทำให้เห็นภาพการทำงานของ Machine Learning มากขึ้น ซึ่งปัจจุบันยังไม่มีผู้ใดจัดทำเป็น Web Application ออกมาให้ใช้งาน จุดเด่นของ Feature นี้ คือ อัลกอริทึมที่มีให้เลือกใช้หลากหลาย ทำให้สามารถเปรียบเทียบได้ชัดเจนมากขึ้น รวมถึงความสามารถในการปรับค่า Parameters ของอัลกอริทึมต่างๆ ทำให้ผู้ใช้สามารถทำการทดลองในประเด็นที่สนใจได้หลากหลาย
					</p>	
				</div>
				
			</div>
			<div class="mainContent greenFade" id="algorithm">
				<h2>อัลกอริทึมการเรียนรู้</h2>
				<div class="radioMenu">
					<input type="radio" name="radio" id="radio1" class="radioHide" checked/>	
					<label for="radio1">Classification</label>	
					<div class="problemDescription" id="desRadio1">
						<!-- <h3>Classification</h3> -->
						<p>
							โจทย์ Classification : มุ่งที่จะสร้างโมเดลเพื่อจัดประเภทตัวอย่างที่เข้ามาใหม่ โดยอาศัยชุดข้อมูลตัวอย่างที่ผู้ใช้กำหนดมา อัลกอริทึมที่ใช้ในโจทย์ประเภทนี้ ได้แก่
						</p>
						<img src="img/classification.png"/>
						<!-- <ul>
							<li>Decision Tree *</li>
							<li>Neural Network *</li>
							<li>Naive Bayes</li>
							<li>Support Vector Machine</li>
							<li>K-Nearest Neighbors (KNN)</li>
						</ul> -->	
						<p>
							สำหรับบางอัลกอริทึม ระบบจะสามารถแสดงขั้นตอนการทำงานทีละขั้นโดยการวาด Classification Boundary ได้ เช่น Decision Tree แต่สำหรับบางอัลกอริทึม ระบบจะแสดงขั้นตอนการคำนวณแทน เนื่องจากไม่มี Boundary ที่ชัดเจน เช่น Naive Bayes 
						</p>
						<p>
							อย่างไรก็ตาม ด้วยข้อจำกัดของเวลา จึงจำเป็นต้องจำกัดขอบเขตของโครงการให้ทำเฉพาะอัลกอริทึมที่มีเครื่องหมาย * ก่อน หากดำเนินงานได้เร็วกว่าที่วางแผนไว้ จะดำเนินการอัลกอริทึมที่เหลือต่อไป
						</p>									
					</div>				
					<input type="radio" name="radio" id="radio2" class="radioHide" />	
					<label for="radio2">Regression</label>
					<div class="problemDescription" id="desRadio2">
						<!-- <h3>Regression</h3> -->
						<p>
							โจทย์ Regression : หารูปแบบความสัมพันธ์ของค่า x และ y เพื่อที่ในอนาคตจะตอบค่า y ได้ เมื่อได้รับ Input เป็นค่า x ใดๆ สำหรับระบบนี้ จะมีเพียง 2 ตัวแปร คือ x และ y เนื่องจากเว็บไซต์สามารถแสดงผลได้เพียง 2 มิติเท่านั้น ระบบจะแสดงผลการวิเคราะห์เป็นเส้นที่ Fit กับชุดข้อมูลที่สุด อัลกอริทึมที่ใช้ ได้แก่ 
						</p>
						<img src="img/regression.png"/>
						<!-- <ul>
							<li>Linear Regression *</li>
							<li>Polynomial Regression</li>
							<li>Regression Tree *</li>
							<li>Neural Network</li>
						</ul> -->
						<p>
							อย่างไรก็ตาม ด้วยข้อจำกัดของเวลา จึงจำเป็นต้องจำกัดขอบเขตของโครงการให้ทำเฉพาะอัลกอริทึมที่มีเครื่องหมาย * ก่อน หากดำเนินงานได้เร็วกว่าที่วางแผนไว้ จะดำเนินการอัลกอริทึมที่เหลือต่อไป
						</p>
					</div>												
					<input type="radio" name="radio" id="radio3" class="radioHide" />	
					<label for="radio3">Clustering</label>
					<div class="problemDescription" id="desRadio3">
						<!-- <h3>Clustering</h3> -->
						<p>
							โจทย์ Clustering : แบ่งกลุ่มของ Example ที่ผู้ใช้กำหนดจุดไว้ ตามค่า Attribute ซึ่งในที่นี้คือค่า x และ y โดย Example ในกลุ่มเดียวกันจะอยู่ในตำแหน่งที่ใกล้เคียงกัน โดยจะใช้การแต้มสีจุดเพื่อแสดงกลุ่มที่แต่ละจุดอยู่ อัลกอริทึมที่ใช้ ได้แก่
						</p>
						<img src="img/clustering.png"/>
						<!-- <ul>
							<li>K-means Clustering *</li>
							<li>DBSCAN *</li>
						</ul> -->
					</div>	
				</div>
			</div>	
				
			<div class="mainContent greenFade" id="gui">
				<h2>Graphics User Interface (GUI)</h2>
				<div id = "layoutblock">
					<p>
						รูปภาพด้านล่างนี้ เป็นตัวอย่างหน้าเว็บ โดยมีส่วนประกอบหลัก 3 ส่วนได้แก่
					</p>
					<div id = "layoutImgBlock">
						<img src="img/sample2.png" id="sample2"/>
						<span>ตัวอย่างหน้าจอแสดงการกำหนดจุดข้อมูลก่อนกด Classify All</span>
					</div>
					<ol>
						<li>
							กระดานทำงาน (Board) อยู่ส่วนกลางของหน้าจอ สำหรับให้ผู้ใช้กำหนดจุดข้อมูล และแสดงผลขั้นตอนการทำงานรวมถึงการวิเคราะห์โดยระบบ 
						</li>
						<li>
							แถบเครื่องมือ (Toolbar) อยู่ด้านล่างของหน้าจอ ใช้สำหรับเลือกวิธีการกำหนดจุดข้อมูล รวมทั้งมีฟังก์ชัน Undo และลบข้อมูลทั้งหมดด้วย ถัดจากนั้นจะมีปุ่มสำหรับกดดำเนินการวิเคราะห์ รวมถึงปรับค่าพารามิเตอร์ต่างๆด้วย
						</li>
						<li>
							แถบข้อมูล (Sidebar) ใช้สำหรับเลือกประเภทของโจทย์และอัลกอริทึมที่ต้องการใช้วิเคราะห์ข้อมูล โดยจะอธิบายวิธีการทำงานของอัลกอริทึมไว้ที่นี่ 
						</li>
					</ol>	
				</div>
				<div id = "sampleblock">
					<h3>ตัวอย่างหน้าจอ</h3>
					<div id = "sampleImgMainblock">
						<div class = "sampleImgBlock">
							<img src="img/sample3.png"/>
							<span>ตัวอย่างหน้าจอ Pop-up หลังจากกดปุ่ม Adjust Parameters</span>
						</div>
						<div class = "sampleImgBlock">
							<img src="img/sample4.png"/>
							<span>ตัวอย่างหน้าจอแสดงผลการวิเคราะห์หลังจากกด Classify All แล้ว</span>
						</div>
					</div>
					
				</div> 
			</div>
		</div>
		<footer>
			กลุ่ม CU.Tweet<br/>
			นายปิยวัฒน์ เลิศวิทยากำจร (5431022721)<br/>
			นางสาวพนิดา นิ่มนวล (5431025621)<br/>
		</footer>
	</body>
</html>