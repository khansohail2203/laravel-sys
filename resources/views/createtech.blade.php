<h1>Create teacher'd Id</h1>
<form action="/createtech" method='POST'>
    @csrf
    <input type="text" name="Name" placeholder="enter the name">
    <input type="text" name="Teacher_id" placeholder="enter id">
    <input type="text" name="Subject" placeholder="enter the subject">
    <button class="submit">Submit</button>

</form>