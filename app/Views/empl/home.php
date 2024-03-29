<!DOCTYPE html>
<html lang="en">

<head>
  <title>home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
        <a class="nav-link active" aria-current="page" href="/">
          <font color="blue"><b>Danh sách</b></font>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create">
          <font color="blue"><b>Thêm nhân viên</b> </font>
        </a>
    </ul>
  </nav>
  <br>
  <h>
    <center><b>
        <font color="orange" size="+2" face="Verdana"> QUẢN LÍ NHÂN VIÊN </font>
      </b></center>
  </h></br>
  <div class="container mt-5">
    <select class="search form-control" name="search"></select>
  </div>
  <table cellspacing="0" cellpadding="7" align="center">
    <tr align="center">
      <th width="100">ID</th>
      <th width="200">Tên</th>
      <th width="100">Ngày sinh</th>
      <th width="150">Số điện thoại</th>
      <th width="120">Chức danh</th>
      <th width="120"></th>
      <th width="120"></th>
    </tr>
    <tbody>
      <?php
      foreach ($if_employee as $if_employee) { ?>
        <tr align="center">
          <td><?= $if_employee->id ?></td>
          <td><?= $if_employee->name ?></td>
          <td><?= $if_employee->birth ?></td>
          <td><?= $if_employee->phonenumber ?></td>
          <td><?= $if_employee->position ?></td>
          <td><a href="<?= base_url('show/' . $if_employee->id) ?>" class="btn btn-outline-info" tabindex="-1" role="button" aria-disabled="true">chi tiết</a></td>
          <td>
            <a href="<?= base_url('delete/' . $if_employee->id) ?>" class="btn btn-outline-dark" tabindex="-1" role="button" aria-disabled="true">xóa</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>