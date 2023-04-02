<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, {{ $student->firstname }} {{ $student->lastname }}</title>
  </head>
  <body>
      <div class="text-center">
        <h1>Hello,  {{ $student->firstname }} {{ $student->lastname }}</h1>
        <p>Student Details</p>
        <br>
      </div>
      <div class="container">
        <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name:  </td>
                <td>{{ $student->firstname }} {{ $student->lastname }} </td>
              </tr>
              <tr>
                <td>Email:  </td>
                <td>{{ $student->email }}</td>
              </tr>
            </tbody>
          </table>
          
      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
