$(document).ready(function() {
    // console.log(window.group);
    $('#group_game option:selected').text(window.group);
    $('#group_game').val(window.group_val);
    // console.log(window);
    console.log(window.company);
    console.log(window.company_val);
    $('#company_game option:selected').text(window.company);
    $('#company_game').val(window.company_val);
    $('#system_game option:selected').text(window.system);
    $('#system_game').val(window.system_val);
});
function manage_edit(id) {
    window.location.href = base_url+'/dashboard/manage_user_edit/' + id;
}
function edit(id) {
    window.location.href = base_url+'/dashboard/dashboard_view/' + id;
}
function insertdata(id) {
    window.location.href = base_url+'/dashboard/dashboard_insert/'+id;
}

function update(id) {
    var data = {
        name: $('#name').val(),
        group_game: $('#group_game').val(),
        company: $('#company_game').val(),
        age: $('#age').val(),
        image: $('#image').val(),
        detail: $('#detail').val(),
        price: $('#price').val(),
        system: $('#system_game').val(),
        date: $('#date').val(),
        rating: $('#rating').val(),
    }
    console.log(data);
    // return
    var url = base_url+'/api/game/edit_game/' + id;
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        contentType: "json",
        error: function () {
            {
                swal("มีเกมนี้อยู่ในระบบอยู่แล้ว", {
                    icon: "warning",
                })
            }
        },
        success: function() {
            swal("สำเร็จ!", "แก้ไขเกมส์สำเร็จ!", "success");
            setTimeout(function() {
                window.location = base_url+'/dashboard/dashboard_view/' + id;
            }, 500);

        }
    });

    // console.log(data);
}
function save_user(id) {
    var data = {
        fname: $('#fname').val(),
        lname: $('#lname').val(),
        email: $('#email').val(),
        password: $('#password').val(),
        birthday: $('#birthday').val(),
        sex: $('#sex').val(),
    }
    console.log(data);
    // return
    var url = base_url+'/api/user/edit_user/' + id;
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        contentType: "json",
        error: function () {
            {
                swal("มีอีเมลนี้อยู่แล้ว", {
                    icon: "warning",
                })
            }
        },
        success: function() {
            // alert('success');
            swal("สำเร็จ!", "แก้ไขบัญชีผู้ใช้สำเร็จ!", "success");
            setTimeout(function() {
                window.location = base_url+'/dashboard/manage_user/';
            }, 500);

        }
    });

    // console.log(data);
}
function edit_user(id) {
    var data = {
        fname: $('#fname').val(),
        lname: $('#lname').val(),
        email: $('#email').val(),
        password: $('#password').val(),
        birthday: $('#birthday').val(),
        sex: $('#sex').val(),
    }
    console.log(data);
    // return
    var url = base_url+'/api/user/edit_user/' + id;
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        contentType: "json",
        error: function () {
            {
                swal("มีอีเมลนี้อยู่แล้ว", {
                    icon: "warning",
                })
            }
        },
        success: function() {
            // alert('success');
            swal("สำเร็จ!", "แก้ไขบัญชีผู้ใช้สำเร็จ!", "success");
            setTimeout(function() {
                window.location = base_url+'/userc/';
            }, 500);

        }
    });

    // console.log(data);
}
function delete_user(id) {
    //    console.log(data);
    // return
	swal({
        title: "คำเตือน!",
        text: "คุณต้องการลบข้อมูลผู้ใช้?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
				var url = base_url+'/api/user/del_user/' + id;
				$.ajax({
					type: 'DELETE',
					url: url,
					contentType: "json",
                    success: function () {
                        swal("ลบข้อมูลสำเร็จ", {
                            icon: "success",
                        })
                        setTimeout(function () {
                            location.reload();
                        }, 500);;
                    }
                })
            } 
        })

//   console.log(data);
}
function del_game(id) {
	
    //    console.log(data);
    // return
    var url = base_url+'/api/game/del_game/' + id;
    $.ajax({
        type: 'DELETE',
        url: url,
        contentType: "json",
        success: function() {
            // alert('success');
            swal("สำเร็จ!", "ลบเกมสำเร็จ!", "success");
            setTimeout(function() {
                window.location = base_url+'/dashboard/';
            }, 500);

        }
    });

//   console.log(data);
}

function showModal() {
    $('#modalGame').modal('show')
}

function new_game() {
    var data = {
        name: $('#nameGame').val(),
        group_game: $('#group_game').val(),
        company: $('#company_game').val(),
        age: $('#age').val(),
        // image: $('#image').val(),
        detail: $('#detail').val(),
        price: $('#price').val(),
        system: $('#system').val(),
        date: $('#date').val(),
        rating: $('#rating').val(),
    }
    // console.log(data);
    // return
    var url = base_url+'/api/game/new_game/';
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        contentType: "json",
        error: function () {
            {
                swal("มีเกมนี้อยู่ในระบบอยู่แล้ว", {
                    icon: "warning",
                })
            }
        },
        success: function() {
            // alert('success');
            swal("สำเร็จ!", "เพิ่มเกมส์สำเร็จ!", "success");
            setTimeout(function() {
                window.location = base_url+'/dashboard/';
            }, 500);

        }
    });
}
