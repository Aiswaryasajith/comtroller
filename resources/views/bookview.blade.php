<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
      <table>
        <tr>
            <td>Name</td>
            <td>Designation</td>
            <td>College</td>
            <td> contact</td>
        </tr>

        @foreach($faculty as $faculty)
        
        <tr>
            <td>{{ $faculty->fname }} </td>
            <td>{{ $faculty->designation }}</td>
            <td>{{ $faculty->Collegename }}</td>
            <td>{{ $faculty->contactno }}</td>
        </tr>
        @endforeach
        </table>
    </div>
    </div>
</body>
</html>