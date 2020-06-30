<html>

<head>
    <title>Sign Up</title>
</head>

<body>

    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action='/registerpost' method="post">
        @csrf
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <form action="welcome.html">
            <label for="firstname">First Name :</label><br>
            <input type="text" name="firstname" id=""><br>
            <label for="lastname">Last Name :</label> <br>
            <input type="text" name="lastname" id=""><br>

            <label for="gender">Gender:</label><br><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br><br>

            <label for="nationality">Nationality:</label><br><br>
            <select name="nationality" id="nationality">
                <option value="indonesian">Indonesian</option>
                <option value="singaporian">Singaporian</option>
                <option value="malaysian">Malaysian</option>
                <option value="australian">Australian</option>
            </select>
            <br><br>

            <label for="language">Language Spoken:</label><br><br>
            <input type="checkbox" name="language1" value="bahasa">
            <label for="language1">Bahasa Indonesia</label><br>
            <input type="checkbox" name="language2" value="english">
            <label for="language2">English</label><br>
            <input type="checkbox" name="language3" value="other">
            <label for="language3">Other</label>
            <br><br>

            <label for="bio">Bio:</label><br><br>
            <textarea rows="10" cols="40" name="comment" form="usrform">

        </textarea>
            <br><br>

            <input type="submit" value="Sign Up">


        </form>


</body>

</html>