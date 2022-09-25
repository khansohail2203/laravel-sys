<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container"> 
    <h1>Edit Id</h1>
    <form action="/edit" method="POST">
    @csrf
    <input type="hidden" name=id value="{{$data['id']}}">
  <div class="mb-3">
    <label  class="form-label">FirstName</label>
    <input type="text" class="form-control" name='firstName' value="{{$data['firstName']}}" >
</div>

  <div class="mb-3">
    <label  class="form-label">SecondName</label>
    <input type="text" class="form-control" name='secondName' value="{{$data['secondName']}}" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Age</label>
    <input type="text" class="form-control" name='age' value="{{$data['age']}}" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Speciality</label>
    <input type="text" class="form-control" name='speciality' value="{{$data['speciality']}}" >
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" >
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
    
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  </body>
</html>