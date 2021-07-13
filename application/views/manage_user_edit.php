<?php
$permission_admin = false;
if (count($_SESSION) > 1) {
    $per = $_SESSION['user_info']->permission;
    if ($per == 'admin') {
        $permission_admin = true;
    }
}

if($permission_admin){?>
<?php
// echo '<pre>';
// var_dump($user);
// echo $user[0]->id;
// echo '</pre>';

?>
<title>แก้ไขผู้ใช้</title>
<style>
    .card1 {
        background-color: white;
        width: 100%;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>
<html>
<!-- CSS only -->
<link href="<?php echo base_url() . 'theme/bootstrap-datepicker-thai-thai' ?>/css/datepicker.css" rel="stylesheet" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<br>

<body>
    <center>
        <div class="container  wow fadeIn">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <br>
                    <div>
                        <h5 style="color:#505050 ; font-size:20px" class="modal-title h2 ">แก้ไขผู้ใช้</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <hr>
                    <div class="container" align="left">
                        <div class="row mt-1 ">
                            <div class="col-md-12"><br>
                                <div class="row" style="margin:auto">
                                    <div class="form-group col-md-6">
                                        <label for="inputtext">ชื่อ</label>
                                        <input name="fname" type="text" class="form-control" id="fname" placeholder="" value="<?php echo $user[0]->fname; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputText">นามสกุล</label>
                                        <input name="lname" type="text" class="form-control" id="lname" placeholder="" value="<?php echo $user[0]->lname; ?>">
                                    </div>
                                </div>
                            </div><br>
                            <div class="col-md-12"><br>
                                <div class="row" style="margin:auto">
                                    <div class="form-group col-md-8">
                                        <label for="inputtext">อีเมล</label>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="" value="<?php echo $user[0]->email; ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputText">รหัสผ่าน</label>
                                        <input name="password" type="text" class="form-control" id="password" placeholder="" value="<?php echo $user[0]->password; ?>">
                                    </div>
                                </div>
                            </div><br>
                            <div class="col-md-12"><br>
                                <div class="row" style="margin:auto">
                                    <div class="form-group col-md-4">
                                        <label for="inputtext">เพศ</label>
                                        <select name=sex id="sex" class="custom-select d-block w-100">
                                            <option value="<?php echo $user[0]->sex; ?>"><?php echo $user[0]->sex; ?></option>
                                            <option>ชาย</option>
                                            <option>หญิง</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputText">วันเดือนปีเกิด <?php echo $user[0]->birthday; ?></label>
                                        <input value="<?php echo $user[0]->birthday; ?>" type="date" class="datepicker" id="birthday" data-date-language="th-th">
                                    </div>
                                </div>
                            </div><br>
                            <div class="modal-footer" style="margin:auto;"><br><br>
                                <a href="<?php echo base_url() . 'dashboard/manage_user' ?>"><button type="button" class="btn btn-secondary">กลับ</button></a>
                                <button type="button" class="btn btn-primary" onclick="save_user(<?php echo $user[0]->id; ?>)">บันทึกการเปลี่ยนแปลง</button>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </center>
    </div>
</body><br><br>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>

<script src="https://getbootstrap.com/2.3.2/assets/js/jquery.js"></script>
<script src="https://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>
<script src="<?php echo base_url() . 'theme/bootstrap-datepicker-thai-thai' ?>/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() . 'theme/bootstrap-datepicker-thai-thai' ?>/js/bootstrap-datepicker-thai.js"></script>
<script src="<?php echo base_url() . 'theme/bootstrap-datepicker-thai-thai' ?>/js/locales/bootstrap-datepicker.th.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script id="example_script" type="text/javascript">
    function demo() {
        $('.datepicker').datepicker();
    }
</script>
<script>
    // function demo() {
    //     $('.datepicker').datepicker();
    // }
    // // SideNav Initialization
    // $('.datepicker').datepicker({
    //     format: 'dd/mm/yyyy',
    //     startDate: '-3d'
    // });
</script>

<script type="text/javascript">
    $(function() {
        $('pre[data-source]').each(function() {
            var $this = $(this),
                $source = $($this.data('source'));

            var text = [];
            $source.each(function() {
                var $s = $(this);
                if ($s.attr('type') == 'text/javascript') {
                    text.push($s.html().replace(/(\n)*/, ''));
                } else {
                    text.push($s.clone().wrap('<div>').parent().html()
                        .replace(/(\"(?=[[{]))/g, '\'')
                        .replace(/\]\"/g, ']\'').replace(/\}\"/g, '\'') // javascript not support lookbehind
                        .replace(/\&quot\;/g, '"'));
                }
            });

            $this.text(text.join('\n\n').replace(/\t/g, '    '));
        });

        prettyPrint();
        demo();
    });
</script>

</html>
<?php }else{
      redirect('find404');
    } ?>
