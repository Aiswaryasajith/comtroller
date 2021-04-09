@extends("theme")

@section("content")
<div class="container">
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
 @endsection