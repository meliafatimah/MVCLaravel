<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Sign Up!</title>
    </head>

    <body>
        
        <!-- Header -->
        <h1> Buat Account Baru! </h1>

        <h3> Sign Up Form </h3>

        <form action="/welcome" method="POST"></form>
            <!-- Masukkan nama pertama pengguna -->
            <label for="firstname">First name:</label><br><br>
                <input type="text" id="firstname" name="firstname"><br><br>

            <!-- Masukkan nama akhir pengguna -->
            <label for="lastname">Last name:</label><br><br>
                <input type="text" id="lastname" name="lastname"><br><br>

            <!-- Masukkan jenis kelamin pengguna -->
            <p> Gender: </p>
                <input type = "radio" name = "gender" value = "Male" id = "male"> <label for="male">Male</label><br>
                <input type = "radio" name = "gender" value = "Female" id = "female"> <label for="female">Female</label><br>
                <input type = "radio" name = "gender" value = "Other" id = "other"> <label for="other">Other</label><br><br>

            <!-- Masukkan kebangsaan pengguna -->
            <label for="nationality">Nationality:</label><br><br>
            <select name="nationality" id = "nationality">
                <option>Indonesian</option>
                <option>Singapore</option>
                <option>Malaysian</option>
                <option>Australian</option>
            </select><br>

            <!-- Masukkan bahasa pengguna -->
            <p> Language Spoken: </p>
                <input type = "checkbox" name = "Language" value = "Bahasa Indonesia" id="indo"> <label for="indo">Bahasa Indonesia</label><br>
                <input type = "checkbox" name = "Language" value = "English" id="english"> <label for="english">English</label><br>
                <input type = "checkbox" name = "Language" value = "Other" id="other"> <label for="other">Other</label><br><br>

            <!-- Masukkan bio pengguna -->
            <label for="bio">Bio</label><br><br>
                <textarea name="bio" cols="40" rows="10"></textarea><br><br>

            <!-- Tombol untuk sign up -->
            <input type="submit" value="Sign Up">
        </form>
        
    </body>
    
</html>