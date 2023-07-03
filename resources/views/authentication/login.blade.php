<form action="loginsave" method="post">
    @csrf
    <label>email :</label>
    <input type="email" name="email" />
    <br>
    <label>password :</label>
    <input type="password" name="password" />
    <input type="submit" />

</form>
