<!DOCTYPE html>
<html lang="en">

<head>
    <title>home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">
                    <font color="blue"><b>Danh sách</b></font>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/create">
                    <font color="blue"><b>Thêm nhân viên</b> </font>
                </a>
        </ul>
    </nav>
    <br>
    <h>
        <center><b>
                <font color="orange" size="+2" face="Verdana"> THÊM NHÂN VIÊN MỚI </font>
            </b></center>
    </h></br>
    <form action="<?= base_url('save') ?>" method="POST">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">ID</span>
            <input type="text" class="form-control" placeholder="nhập id" name="id" aria-label="id" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tên</span>
            <input type="text" class="form-control" placeholder="Nhập họ và tên" name="name" aria-label="name" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Ngày tháng năm sinh</span>
            <input type="date" class="form-control" placeholder="birth" name="birth" aria-label="birth" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Quê quán</span>
            <input type="text" class="form-control" placeholder="Nhập quê quán" name="hometown" aria-label="hometown" aria-describedby="basic-addon1">
            <span class="input-group-text" id="basic-addon1">Điện thoại</span>
            <input type="number" class="form-control" placeholder="Nhập số điện thoại" name="phonenumber" aria-label="phonenumber" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Chức danh</span>
            <input type="text" class="form-control" placeholder="Nhập chức danh" name="position" aria-label="position" aria-describedby="basic-addon1">
            <span class="input-group-text" id="basic-addon1">Phòng ban</span>
            <input type="text" class="form-control" placeholder="Nhập phòng ban" name="department" aria-label="department" aria-describedby="basic-addon1">
        </div>
        <br>
        <h5> Chứng minh nhân dân </h5>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Số CMND/CCCD</span>
            <input type="number" class="form-control" placeholder="Nhập 9 số / 12 số" name="identification_card" aria-label="identification_card" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Ngày cấp</span>
            <input type="date" class="form-control" placeholder="issued_on" name="issued_on" aria-label="issued_on" aria-describedby="basic-addon1">
            <span class="input-group-text" id="basic-addon1">Nơi cấp</span>
            <input type="text" class="form-control" placeholder="Nhập nơi cấp" name="placed_on" aria-label="placed_on" aria-describedby="basic-addon1">
        </div>
        <button type="submit" class="btn btn-success">Thành công</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>