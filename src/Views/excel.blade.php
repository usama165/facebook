<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Excel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div
        style=" background-color: lightgray; margin-left:250px; margin-top:50px;  width: 800px; height: 500px; border-style: solid; border-color: black">
        <center>
            <h1 style="padding-top: 40px;">Mail Sender</h1>
        </center>
        <form style="margin-left: 300px; margin-top: 40px" action="{{url('/import')}}" method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}

            @if(session('errors'))
            @foreach($errors as $error)
            <li>{{$error}}</li>
            @endforeach
            @endif
            @if(session('success'))
            {{session('success')}}
            @endif
            <br><br>





            Select Excel File To Upload
            <br><br>

            <input type="file" name="file" id="file">
            <br><br>

            <button class="btn btn-primary" type="submit">Upload File</button>
            <br><br>

            <a href="{{url('/sample/student.xlsx')}}">Download Sample File</a>


        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>