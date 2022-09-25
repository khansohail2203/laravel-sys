<table class="table">
  <thead>
    <tr>
      
      <th scope="col">CNE</th>
      <th scope="col">First name</th>
      <th scope="col">Second name</th>
      <th scope="col">age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>
      <th>
        <a href='create'><button>Create</button></a>
      </th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
        <td>{{$student->cne}}</td>
        <td>{{$student->firstName}}</td>
        <td>{{$student->secondName}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->speciality}}</td>
        <td>
            <a href="#" class="btn-sm btn-Info">Show</a>
            <a href="{{url('/edit/'.$student->id)}}" class="btn-sm btn-Warning">Edit</a>
            <a href="#" class="btn-sm btn-Danger">Delete</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>