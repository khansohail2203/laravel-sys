<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SYM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
</head>

<body>
    <div class="container">
        <h1>Student Management System</h1>
        <br>
        <table class="table">
            <tbody>
                <tr>
                    <td>Id</td>
                    <td>FirstName</td>
                    <td>SecondName</td>
                    <td>Age</td>
                    <td>Speciality</td>
                    <td>Operations</td>
                    <td><a class="btn btn-primary" href="create" target="_blank">Create</a></td>

                    @foreach($students as $student)
                <tr>
                    <td>{{$student['id']}}</td>
                    <td>{{$student['firstName']}}</td>
                    <td>{{$student['secondName']}}</td>
                    <td>{{$student['age']}}</td>
                    <td>{{$student['speciality']}}</td>
                    <td><a class="btn btn-danger" href="{{'delete/'.$student['id']}}">Delete</a>
                    <a class="btn btn-warning" href="{{'edit/'.$student['id']}}">Edit</a></td>

                </tr>
                @endforeach

                </tr>
            </tbody>
        </table>
    </div>

    <style>
    .container {
        display: auto;
        background: gray;
        /* border:4px solid; */
        width: 1500px;
        padding: 23px;
        color: red;
    }

    .container h1 {
        text-align: center;
        color: black;
        font: bold;
    }
    </style>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>


</body>

</html>