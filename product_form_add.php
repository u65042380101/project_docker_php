<?php
//1. เชื่อมต่อ database:
include('condb.php');  // ไฟล์เชื่อมต่อกับ database

//2. Query ข้อมูลจากตาราง tb_type:
$query = "SELECT * FROM tbl_type ORDER BY type_id ASC";
$result = mysqli_query($con, $query);

if (!$result) {
    die("Error in query: " . mysqli_error($con));
}
?>
<div class="container">
  <div class="row">
      <form name="addproduct" action="add_product_db.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-9">
            <p> ชื่อสินค้า</p>
            <input type="text" name="p_name" class="form-control" required placeholder="ชื่อสินค้า" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8">
            <p> ประเภทสินค้า </p>
            <select name="type_id" class="form-control" required>
              <option value="">เลือกประเภทสินค้า</option>
              <?php
              if ($result) {
                  foreach ($result as $results) {
                      echo "<option value='{$results['type_id']}'>{$results['type_name']}</option>";
                  }
              } else {
                  echo "<option value=''>ไม่มีประเภทสินค้า</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> รายละเอียดสินค้า </p>
            <textarea name="p_detail" rows="5" cols="60" class="form-control"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> ภาพสินค้า </p>
            <input type="file" name="p_img" id="p_img" class="form-control" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" name="btnadd"> บันทึก </button>
          </div>
        </div>
      </form>
    </div>
  </div>
