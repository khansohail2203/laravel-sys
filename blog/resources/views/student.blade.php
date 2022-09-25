<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    @if($layout == 'index');
     <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>
     </div>
   
    @elseif(@layout == 'show')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>
     </div>


     @elseif($layout == 'create')
     <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col">
        
         <form action ="student" method="POST">
             <!-- @csrf -->
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
    </div>
</div>

   
    @elseif(@layout == 'edit')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>
     </div>
    @endif
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  </body>
</html>