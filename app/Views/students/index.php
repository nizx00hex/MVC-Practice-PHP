<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Students</title>
</head>

<body>

    <h1>Student List</h1>

    <a href="/students/create">Add Student</a>

    <br><br>

    <?php if (empty($students)): ?>

        <p>No students found.</p>

    <?php else: ?>

        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Created</th>
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
                            <?= htmlspecialchars($student['course']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($student['created_at']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php endif; ?>

</body>
</html>