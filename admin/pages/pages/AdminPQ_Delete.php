<?php include '../templates/nav_admin1.php' ?>

<div class="detail_admin">
    <h1 class="Title_Admin_create_form">Bạn có muốn xóa tài khoản này ?</h1>
    <form action="" method="POST">
        <div class="detai_admin_form">
            <div class="detail_admin_right">
                <table class="Table_Details_Admin">
                    <tr>
                        <td>Mã phân quyền: </td>
                        <td>@Model.MAPQ</td>
                    </tr>
                    <tr>
                        <td>Chức năng:</td>
                        <td>@Model.CHUCNANG_QUYEN.TENCN</td>
                    </tr>
                    <tr>
                        <td>Tên quản trị:</td>
                        <td>@Model.ADMIN.HOTEN</td>
                    </tr>
                </table>
            </div>

        </div>
        <div class="button">
            <input type="submit" value="Xóa" class="button_add_admin delete_display_alert" />
            <a href="@Url.Action(" Index","AdminPQ")"><input type="button" value="Quay lại"
                    class="button_add_admin" /></a>
        </div>
        <div class="alert_delete">
            <div class="notification">
                <h1 class="notification_title">Xác nhận xóa tài khoản!</h1>
                <input type="submit" value="Xóa" class="alert_delete_btn delete_conform" />
                <input type="button" value="Không" class="alert_delete_btn delete_cancel" />
            </div>
        </div>
    </form>
</div>
<?php include '../templates/nav_admin2.php' ?>