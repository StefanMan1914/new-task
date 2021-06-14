<h1>Add Contact</h1>
<form action='submit' method=   'POST'>
    @csrf
    <input type='text' name='first_name' placeholder='First Name'> <br>
    <input type='text' name='last_name' placeholder='Last Name'> <br>
    <input type='text' name='email' placeholder='Email'> <br>

    <button type='submit' >Add Contact</button>
</form>
