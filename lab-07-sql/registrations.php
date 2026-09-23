<?php
require "db.php";

$stmt = $pdo->query(
    "SELECT id, full_name, student_id, email, department, workshop, created_at
     FROM registrations
     ORDER BY id DESC"
);

$registrations = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Registrations</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="container"
        <section class="card">
            <div class="section-title">
                <p class="eyebrow">DATABASE RECORDS</p>
                <h1>Saved Registrations</h1>
                <p>Registration records retrieved from the MySQL database.</p>
            </div>

            <?php if (count($registrations) === 0): ?>
                <p class="empty">No registration has been saved yet.</p>
            <?php else: ?>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Student ID</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Workshop</th>
                                <th>Submitted</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($registrations as $row): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row["id"]); ?></td>
                                    <td><?php echo htmlspecialchars($row["full_name"]); ?></td>
                                    <td><?php echo htmlspecialchars($row["student_id"]); ?></td>
                                    <td><?php echo htmlspecialchars($row["email"]); ?></td>
                                    <td><?php echo htmlspecialchars($row["department"]); ?></td>
                                    <td><?php echo htmlspecialchars($row["workshop"]); ?></td>
                                    <td><?php echo htmlspecialchars($row["created_at"]); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>

            <p class="center-link">
                <a href="index.php">← Back to Registration Form</a>
            </p>
        </section>
    </main>
</body>
</html>
