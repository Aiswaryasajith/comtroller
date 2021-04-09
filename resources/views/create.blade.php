<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty App</title>
</head>
<body>
<dv class="container">
<div class="row">
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<form action="/facultyread" method="post">
{{ csrf_field() }}
<table class="table">
<tr>
    <td>NAME</td>
    <td><input name="fname" type="text" class="form-control"></td>
</tr>
<tr>
    <td>DESIGNATION</td>
    <td><input name="fdes" type="text" class="form-control"></td>
</tr>
<tr>
    <td>COLLEGE NAME</td>
    <td><input name="cname" type="text" class="form-control"></td>
</tr>
<tr>
    <td>CONTACT NO</td>
    <td><input name="cno" type="text" class="form-control"></td>
</tr>
<tr>
    <td><button class="btn btn-secondary">SUBMIT</button></td>
</tr>
</table>
</form>
</div>
</div>
</dv>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>  
</body>
</html>