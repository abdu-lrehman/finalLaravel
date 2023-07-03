<form action="registersave" method="post">
    @csrf
    <label>Name :</label>
    <input type="text" name="name" />
    <br>
    <label>email :</label>
    <input type="email" name="email" />
    <br>
    <label>password :</label>
    <input type="password" name="password" /><br>

    <input type="submit" />

</form>
