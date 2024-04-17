<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel - Form</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="post">
        @csrf
        <label for="first_name">First name:</label>
        <br>
        <br>
        <input type="text" name="first_name" id="first_name" required />
        <br />
        <br />
        <label for="last_name">Last name:</label>
        <br>
        <br>
        <input type="text" name="last_name" id="last_name" required />
        <br />
        <br />
        <label>Gender:
            <br />
            <br />
            <label for="male">
                <input type="radio" name="gender" id="male" value="male" required />
                Male
            </label>
            <br />
            <label for="female">
                <input type="radio" name="gender" id="female" value="female" required />
                Female
            </label>
        </label>
        <br />
        <br />
        <label for="nationality">Nationality:</label>
        <br />
        <br />
        <select name="nationality" id="nationality" required>
            <option value="">Choose one</option>
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Singaporean">Singaporean</option>
        </select>
        <br />
        <br />
        <label for="language">Language Spoken:
            <br />
            <br />
            <label for="checkbox1">
                <input type="checkbox" name="language" id="checkbox1" value="Bahasa Indonesia" required />
                Bahasa Indonesia
            </label>
            <br />
            <label for="checkbox2">
                <input type="checkbox" name="language" id="checkbox2" value="English" />
                English
            </label>
            <br />
            <label for="checkbox3">
                <input type="checkbox" name="language" id="checkbox3" value="Other" />
                Other
            </label>
        </label>
        <br />
        <br />
        <label for="bio">Bio:</label>
        <br />
        <br />
        <textarea name="bio" id="bio" cols="30" rows="10" minlength="4" required></textarea>
        <br />
        <input type="submit" value="Sign Up" />
    </form>
</body>

</html>
