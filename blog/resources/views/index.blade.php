<html>
      <body>
        <table id="datatable" style="border: 1px solid">
            <h1>Quản lý cầu thủ</h1>
            <thead>
                <tr role="row">
                    <th>ID</th>
                    <th>Tên cầu thủ</th>
                    <th>Tuổi</th>
                    <th>Quốc tịch</th>
                    <th>Vị trí</th>
                    <th>Lương</th>
                    <th style="width: 7%;">Edit</th>
                    <th style="width: 10%;">>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr role="row">
                    <td>1</td>
                    <td>Lionel Messi</td>
                    <td>30</td>
                    <td>Argentina</td>
                    <td>Tiền Đạo</td>
                    <td>230000 $</td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#"> Delete</a></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="8">
                        <a href="add.php"><button id="button">Thêm cầu thủ</button></a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>