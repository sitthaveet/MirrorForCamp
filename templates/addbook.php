<?php
  include(__DIR__."/../includes/config.php");
?>
<html>
  <head>
    <?php
      include("../includes/bootstrap.php");
    ?>
  </head>
  <body>

    <!-- HTML start from here -->
   
    <div class="card font"> 
      <div class="card-header">
        <div>
            <a href="dashboard.php"><p>x</p></a> </div> <!-- ต้องทำให้มันกลับไป dashboard แบบเก็บ camp_code อันเก่าไว้ด้วย -->
        <div class="bold" align="center">
          <h1>เพิ่มสมุดกระจกเงา</h1>
        </div>
        </div>


      <div class="card-body">
        <form action="templates/dashboard.php" method="POST"> <!-- ต้องทำให้มันกลับไป dashboard แบบเก็บ camp_code อันเก่าไว้ด้วย -->

                <div class="form-group col-12 col-md-9 mb-2 mb-md-0">
                <label>ชื่อเล่น</label>
                <input type="text" name="display_name" class="form-control form-control-lg font">
                </div>
                  <br>
                <div class="form-group col-12 col-md-9 mb-2 mb-md-0">
                <label>คำอธิบาย</label>
                <input type="text" name="caption" class="form-control form-control-lg font">
                <small class="form-text text-muted">คำอธิบายเพิ่มเติมในกรณีที่ชื่อของคุณซ้ำกับคนอื่น เช่น โบสถ์สะพานเหลือง หรือ ม.เชียงใหม่</small>
                </div>
                <br>
                <div class="form-group col-12 col-md-9 mb-2 mb-md-0">
                <label>รหัสเปิดสมุด</label>
                <input type="password" name="password" class="form-control form-control-lg font">
                <small class="form-text text-muted">รหัสนี้มีไว้สำหรับเปิดสมุดกระจกส่วนตัวของคุณ เพื่อป้องกันไม่ให้เพื่อนคนอื่นเข้ามาดูข้อความส่วนตัวในสมุดกระจกของคุณ</small>
                </div>
              <button type="submit" class="btn button font">เพิ่มสมุดกระจกเงา</button>

        </form>  
      </div>

<!-- บันทึกข้อมูล แต่ยังไม่รู้วิธีในการบันทึกให้ตรงกับ camp_code ที่เขาเข้ามา -->

<?php 

$connect = new Connect();

$display_name = $_POST["display_name"];
$caption = $_POST["caption"];
$password = $_POST["password"];




  </body>
</html>
