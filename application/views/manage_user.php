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
// echo '</pre>';

?>
 
 <title>รายชื่อผู้ใช้</title>
    <style>
        .card1 {
            background-color: white;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
    <html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <body>
        <br>
        <div class="container  wow fadeIn">

        <br>
        <table id="myTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

                <thead align="center">
                    <tr >
                        <th style="color: #323232; font-weight: bold;">ชื่อ-สกุล</th>
                        <th style="color: #323232; font-weight: bold;">ชื่อ-เพศ</th>
                        <th style="color: #323232; font-weight: bold;">วันเกิด</th>
                        <th style="color: #323232; font-weight: bold;">อีเมล</th>
                        <th style="color: #323232; font-weight: bold;">password</th>
                        <th style="color: #323232; font-weight: bold;">จัดการผู้ใช้</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($user as $u) {
                    ?>
                        <tr>
                            <td >
                                <?php
                                echo $u->fname.'&nbsp;&nbsp;'.$u->lname;
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $u->sex;
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $u->birthday;
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $u->email;
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $u->password;
                                ?>
                            </td>
                           
                            <td align="center">
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light " onclick="manage_edit('<?php echo $u->id ?>')">แก้ไข</button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light " onclick="delete_user('<?php echo $u->id ?>')">ลบ</button>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <br><br>
    </body>
    <script>
        // SideNav Initialization

        $('.datepicker').on('mousedown', function preventClosing(event) {
            event.preventDefault();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    </div>
    </html>
    <?php }else{
      redirect('find404');
    } ?>
