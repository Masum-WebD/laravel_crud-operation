<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>{{ $blog->title}} </title>
  </head>
  <body>
      <div class="text-center">
        <h1>Title: {{ $blog->title}}</h1>
        <p>blog Details</p>
        <br>
      </div>
      <div class="container">
        <table class="table table-striped">
            <tbody>
              <tr>
                <td>Short description:  </td>
                <td>{{ $blog->short_description}}</td>
              </tr>
              <tr>
                <td>description:  </td>
                <td>{{ $blog->description}}</td>
              </tr>
            </tbody>
          </table>

      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
