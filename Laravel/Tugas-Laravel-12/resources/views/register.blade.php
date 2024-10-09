<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Form Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3><br>

    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <!-- Input nama -->
        <div>
            <label for="">First name:</label><br><br>
            <input type="text" name="firstname" required><br><br>
            <label for="">Last name:</label><br><br>
            <input type="text" name="lastname" required>
        </div><br>

        <!-- Pilih Jenis Kelamin -->
        <div>
            <label for="">Gender: </label><br><br>
            <input type="radio" name="gender" value="Male" required>Male<br>
            <input type="radio" name="gender" value="Female">Female<br>
            <input type="radio" name="gender" value="Other">Other
        </div><br>

        <!-- Pilih Kewarganegaraan -->
        <div>
            <label for="">Nationality:</label><br><br>
            <select name="nationality" required>
                <option value="Indonesian">Indonesian</option>
                <option value="United States">United States</option>
                <option value="India">India</option>
            </select>
        </div><br>

        <!-- Pilih Bahasa yang dikuasai -->
        <div>
            <label for="">Language Spoken:</label><br><br>
            <input type="checkbox" name="language[]" value="indonesia"> Bahasa Indonesia<br>
            <input type="checkbox" name="language[]" value="english"> English<br>
            <input type="checkbox" name="language[]" value="other"> Other
        </div><br>

        <!-- Isi Biografi-->
        <div>
            <label for="">Bio:</label><br><br>
            <textarea name="bio" cols="30" rows="10" required></textarea>
        </div><br>

        <!-- Button Sign Up -->
        <div>
            <button type="submit">Sign Up</button>
        </div>
    </form>
</body>
</html>