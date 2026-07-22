<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
</head>

<body>

    <h1>Create Student</h1>

    <form method="POST" action="/students/store">

        <div>
            <label for="name">Student Name</label>

            <input
                type="text"
                id="name"
                name="name"
                required
            >
        </div>

        <br>

        <div>
            <label for="course">Course</label>

            <input
                type="text"
                id="course"
                name="course"
                required
            >
        </div>

        <br>

        <button type="submit">Save Student</button>

    </form>

    <br>

    <a href="/students">Back to Students</a>

</body>
</html>