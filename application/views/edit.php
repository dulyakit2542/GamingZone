<!DOCTYPE html>
<html lang="en">
<?php
$permission_admin = false;
if (count($_SESSION) > 1) {
    $per = $_SESSION['user_info']->permission;
    if ($per == 'admin') {
        $permission_admin = true;
    }
}

if($permission_admin){?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>แก้ไขเกม</title>
  <!-- Font Awesome -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Your custom styles (optional) -->

  <style>
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (min-width: 851px) and (max-width: 1440px) {

      html,
      body,
      header,
      .view {
        height: 850px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 451px) and (max-width: 740px) {

      html,
      body,
      header,
      .view {
        height: 1200px;
      }
    }

    @media (max-width: 450px) {

      html,
      body,
      header,
      .view {
        height: 1400px;
      }
    }
  </style>
</head>
<script>
  var group = '<?php echo $game[0]->name_group; ?>';
  var group_val = '<?php echo $game[0]->no_group; ?>';
  var company = '<?php echo $game[0]->company; ?>';
  var company_val = '<?php echo $game[0]->no_company; ?>';
  var system = '<?php echo $game[0]->cpu; ?>';
  var system_val = '<?php echo $game[0]->no_system; ?>';
</script>
<body class="register" style="background-color: #F7F7F7;">
  <section class="view intro-2">
    <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
      <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="row pt-5">
          <div class="col-md-12">
            <div class="card">
						<form action=""enctype="multipart/form-data">
              <div class="card-body">
                <h4 class="text-center mb-5 ">
                  <strong>แก้ไขเกม</strong>
                </h4>
                <hr>
                <div class="col-md-4">
                </div>
              </div>
              <div class="row mt-15">
                <div class="col-md-6 ml-lg-5 ml-md-3">
                  <div class="row pb-4">
                    <div class="col-2 col-lg-8">
                      <div class="md-form">
                        <div>ชื่อเกม
                          <input id="name" type="text" class="form-control pass-swap indigo-text" value="<?php echo $game[0]->name; ?>">
                        </div>
                      </div>

                      <div class="md-form">
                        <div>หมวดหมู่</div>

                        <div class="form-group">
                          <select class="form-control" id="group_game">
                            <option value="">...</option>
                            <?php
                            foreach ($group as $row) {
                            ?>
                              <option value="<?php echo $row->no_group; ?>"><?php echo $row->name_group; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="md-form">
                        <div>บริษัทผู้พัฒนา</div>
                        <div class="form-group">
                          <select class="form-control" id="company_game">
                            <option value="">...</option>
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

                      <div class="md-form">
                        <div>วันที่วางจำหน่าย</div>
                        <input id="date" type="text" data-provide="datepicker" data-date-language="th-th" class="form-control pass-swap indigo-text" value="<?php echo $game[0]->date; ?>">
                      </div>

                      <div class="md-form">
                        <div>อายุขั้นต่ำของผู้เล่น</div>
                        <input id="age" type="text" class="form-control pass-swap indigo-text" value="<?php echo $game[0]->age; ?>">
                      </div>
                      <div class="md-form">
                        <div>ราคา</div>
                        <input id="price" type="text" class="form-control pass-swap indigo-text" value="<?php echo $game[0]->price; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
								<label  for="image"><img src="<?php echo base_url() . 'files/images/' . $game[0]->image; ?>" width="100%" alt="" /></label>&nbsp;
                <input type="file" name="image" id="image" accept="image/*">
                  <!-- <img class="card card-image" style="width: 100%;"  alt="Card image cap"> -->
                  <div class="md-form"><br>
                    <div>รายละเอียด</div>
                    <textarea id="detail" value=" <?php echo $game[0]->detail; ?>" class="form-control indigo-text" rows="5" id="comment"><?php echo $game[0]->detail; ?></textarea>
                  </div>
                  <div class="md-form">
                    <div>ความนิยม</div>
                    <input id="rating" type="text" class="form-control pass-swap indigo-text" value="<?php echo $game[0]->rating; ?>">
                  </div>
                  <div class="md-form">
                    <div>ระบบคอมพิวเตอร์ขั้นต่ำ</div>
                    <div class="form-group">
                      <select class="form-control" id="system_game">
                        <option value="">...</option>
                        <?php
                        foreach ($system as $row) {
                        ?>
                          <option value="<?php echo $row->no_system; ?>"><?php echo $row->cpu; ?></option>
                        <?php
                        }
                        ?>
                      </select>
											<tr>

                </tr>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light " onclick="update('<?php echo $game[0]->id ?>')">บันทึก</button>
                    <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light" onclick="del_game('<?php echo $game[0]->id ?>')">ลบเกม </button>
                  </div>
                  <br>
                </div>
              </div>
            </div>
						</form>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <!-- Main Navigation -->
    <script type="text/javascript" src="<?php echo base_url() . 'theme/MDB' ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/MDB' ?>/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/MDB' ?>/js/mdb.min.js"></script>
    <script src="<?php echo base_url() . 'theme/js' ?>/java.js"></script>
    <script>
      // Material Select Initialization
      $(document).ready(function() {
        $('.mdb-select').materialSelect();
      });
    </script>
    <!--  SCRIPTS  -->
</body>
</html>
    <?php }else{
      redirect('find404');
    } ?>
