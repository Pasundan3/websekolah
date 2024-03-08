<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Form</title>
</head>
<body>

    <h2>Contact Us</h2>

    <form action="{{route('student.store')}}" method="post">
        @csrf
        <!-- Text Input -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <br>

        <!-- Email Input -->
        <label for="nisn">NISN:</label>
        <input type="text" id="nisn" name="nisn" required>

        <br>

        <!-- Password Input -->
        <label for="nik">nik</label>
        <input type="text" id="nik" name="nik" required>

        <br>

        <!-- Radio Buttons -->
        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>

        <br>

        <label>Religion:</label>
        <input type="radio" id="islam" name="religion" value="islam" required>
        <label for="islam">islam</label>
        <input type="radio" id="islamkristen" name="religion" value="kristen" required>
        <label for="kristen">kristen</label>


        <br>

        <!-- Textarea -->
        <label for="address">address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>

        <br>

        <label for="last_education">last_education</label>
        <input type="text" id="last_education" name="last_education" required>

        <label for="phone_number">phone_number</label>
        <input type="text" id="phone_number" name="phone_number" required>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>

</body>
</html>
