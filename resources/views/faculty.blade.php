@extends("theme")
@section("content")
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
    </div>

@endsection
    