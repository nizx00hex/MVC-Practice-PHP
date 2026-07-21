<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Management System</title>
</head>

<body>

    <h1>Student Management System</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td>
                        <?= htmlspecialchars((string) $student['id']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($student['name']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($student['passion']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>