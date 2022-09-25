<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Management</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Teacher_id</td>
            <td>Subject</td>
            <td>Operations</td>
            <td><a href="/createtech" class="btn btn.primary">Create</a></td>

        </tr>
        @foreach ($teachers as $teacher)
        <tr>
            <td>{{$teacher['id']}}</td>
            <td>{{$teacher['Name']}}</td>
            <td>{{$teacher['Teacher_id']}}</td>
            <td>{{$teacher['Subject']}}</td>
            <td><a class="btn btn-danger" href="{{'delete/'.$teacher['id']}}">Delete</a>
                <a class="btn btn-warning" href="{{'edit/'.$teacher['id']}}">Edit</a>
            </td>

        </tr>
        @endforeach
    </table>
</body>

</html>