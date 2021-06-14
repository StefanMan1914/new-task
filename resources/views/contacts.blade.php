<h1> Contacts List </h1>

<table border="2">
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
    </tr>
    @foreach($contact as $contacts)
    <tr>
        <td>{{$contacts['first_name']}}</td>
        <td>{{$contacts['last_name']}}</td>
        <td>{{$contacts['email']}}</td>
    </tr>
    @endforeach
</table>