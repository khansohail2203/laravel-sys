<h1>Member List</h1>
<table border="3">
    <tr>
        <td>s.no</td>
        <td>username</td>
        <td>description</td>
        <td>dt</td>
        
    </tr>
    @foreach($laras as $lara)
    <tr>
        <td>{{$lara['s.no']}}</td>
        <td>{{$lara['username']}}</td>
        <td>{{$lara['description']}}</td>
        <td>{{$lara['dt']}}</td>
        <td><a href="{{'delete/'.$lara['username']}}">Delete</a></td>
    </tr>
    @endforeach
</table>

<div>
    {{$laras->links()}}
</div>

<style>
.w-5 {

    display: none;

}
</style>