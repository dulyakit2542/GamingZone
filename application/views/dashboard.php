<?php
$permission_admin = false;
if (count($_SESSION) > 1) {
    $per = $_SESSION['user_info']->permission;
    if ($per == 'admin') {
        $permission_admin = true;
    }
}

if($permission_admin){?>
<html>
<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<title>ข้อมูลเกมในระบบ</title>
</head>

<body class="register">
  <div class="container">
    <br>
  <button type="button" class="btn btn-success" onclick="showModal()">เพิ่มเกม</button>
    <div class="row mt-5">
      <div class="col-md-12">
        <!-- <button type="button" class="btn-floating btn-blue waves-effect waves-light" onclick="insertdata('<?php echo $game[0]->id ?>')">+</button> -->
        <table id="myTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

          <thead>

            <tr align="center">
              <th>Name</th>
              <th>Category</th>
              <th>Company</th>
              <th>Age</th>
              <th>Detail</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($game as $g) {
            ?>
              <tr>
                <td>
                  <?php echo $g->name;
                  ?>
                </td>
                <td>
                  <a><?php echo $g->name_group; ?></a>
                </td>
                <td>
                  <a><?php echo $g->company; ?></a>
                </td>
                <td>
                  <a><?php echo $g->age; ?></a>
                </td>
                <td>
                  <?php $g->detail;
                  $an = substr($g->detail, 0, 80);
                  echo $an; ?>
                </td>
                <td>
                  <button type="button" class="btn btn-success" onclick="edit('<?php echo $g->id ?>')">แก้ไข</button>
                </td>
              </tr>
            <?php } ?>
          </tbody>

        </table>

      </div>
    </div>
  </div>
  <br>
  <!-- Large modal -->
  <div class="modal fade bd-example-modal-lg" id="modalGame" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New game</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="container">
          <div class="row mt-2">
            <div class="col-md-12">
              <label>ชื่อเกม</label>
              <input name="company" id="nameGame" type="text" class="form-control pass-swap">
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-6">
              <label>หมวดหมู่</label>
              <select class="form-control" id="group_game">
                <option value="">กรุณาเลือก</option>
                <?php
                foreach ($group as $row) {
                ?>
                  <option value="<?php echo $row->no_group; ?>"><?php echo $row->name_group; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="col-md-6">
              <label>บริษัทผู้พัฒนา</label>
              <select class="form-control" id="company_game">
                <option value="">กรุณาเลือก</option>
                <?php
                foreach ($company as $row) {
                ?>
                  <option value="<?php echo $row->no_company; ?>"><?php echo $row->company; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="row mt-2 mb-3">
            <div class="col-md-4">
              <label>วันที่วางจำหน่าย</label>
              <input name="date" id="date" type="text" class="form-control pass-swap" data-provide="datepicker" data-date-language="th-th">
            </div>
            <div class="col-md-4">
              <label>อายุขั้นต่ำ</label>
              <input name="age" id="age" type="text" class="form-control pass-swap">
            </div>
            <div class="col-md-4">
              <label>ราคา</label>
              <input name="price" id="price" type="text" class="form-control pass-swap">
            </div>
          </div>
          <div class="row mt-2 mb-3">
            <div class="col-md-6">
              <label>ความนิยม</label>
              <input name="rating" id="rating" type="text" class="form-control pass-swap">
            </div>
            <div class="col-md-6">
              <label>สเปคขั้นต่ำ</label>
              <select class="form-control" id="system">
                <option value="">กรุณาเลือก</option>
                <?php
                foreach ($system as $row) {
                ?>
                  <option value="<?php echo $row->no_system; ?>"><?php echo $row->cpu; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="row mt-2 mb-3">
            <div class="col-md-12">
              <label>รายละเอียด</label>
              <textarea class="form-control" id="detail" rows="3"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
          <button type="button" class="btn btn-primary" onclick="new_game()">สร้างเกม</button>
					
        </div>
      </div>
    </div>
  </div>
  <br>
</body>
</div>
</div>
</div>  
</div>

<!-- jQuery and JS bundle w/ Popper.js -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="theme/js/java.js"></script>



<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
    $('.dataTables_length').addClass('bs-select');
  });
</script>

</html>
<?php }else{
      redirect('find404');
    } ?>
