<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col">
         <form action ="students" method="POST">
             @csrf
            <div class="form-group">
                <label>CNE</label>
                <input type="text" class="form-control" name="cne"  placeholder="Enter cne">
            </div>
            <br>
        
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="firstNAme"  placeholder="Enter the first name">
            </div>
            <br>
            
            <div class="form-group">
                <label>Second Name</label>
                <input type="text" class="form-control" name="secondName"  placeholder="Enter the second name">
            </div>
            <br>
            <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" name="age"  placeholder="Enter the Age">
            </div>
            <br>
            <div class="form-group">
                <label>Speciality</label>
                <input type="text" class="form-control" name="speciality"  placeholder="Enter speciality">
            </div>
            <br>
            <input type="submit" class="btn btn-info" value="save">
            <input type="reset" class="btn btn-warning" value="Reset">

        </form>
        </section>
    <div>
</div>

</body>
</html>