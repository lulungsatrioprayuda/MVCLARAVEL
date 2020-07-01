<!DOCTYPE html>
<html>
<head>
    <title>Halaman Form</title>
</head>
<body>
    <h1>Buat akun baru</h1><br>
    <h3>Sign Up Form</h3>

    <form action="/test" method="post">
    @csrf
    <label for="first_name">First Name :</label><br><br>
    <input type="text" id="first_name" required><br><br>
    
    <label for="last_name">Last Name :</label><br><br>
    <input type="text" id="last_name" required><br><br>

    <label>Gender :</label><br><br>
    <input type="radio" name="jk" value="0"> Male <br><br>
    <input type="radio" name="jk" value="1"> Female <br><br>
    <input type="radio" name="jk" value="2"> Other <br><br> 
    
    <label>Language Spoken :</label><br><br>
    <input type="checkbox" name="spokeen" id="spoken"> Bahasa Indonesia <br><br>
    <input type="checkbox" name="spokeen" id="spoken"> English <br><br>
    <input type="checkbox" name="spokeen" id="spoken"> Other <br><br>

    <label>Bio :</label> <br><br>
    <textarea name="bio" id="bio_id" cols="30" rows="10"></textarea><br>

    <button type="submit">Sign Up</button>
    </form>

</body>
</html>