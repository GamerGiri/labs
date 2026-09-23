<?php
$pageTitle = "Student Workshop Registration";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <p class="eyebrow">CSE472 • LAB 07</p>
            <h1>Student Workshop Registration System</h1>
            <p>Register for a practical web development workshop.</p>
        </div>
    </header>

    <main class="container">
        <section class="card">
            <div class="section-title">
                <p class="eyebrow">REGISTRATION</p>
                <h2>Workshop Registration Form</h2>
                <p>
                    Complete the form below. Your information will be validated by PHP
                    and saved to the MySQL database.
                </p>
            </div>

            <form action="save_registration.php" method="POST">
                <div class="form-grid">
                    <div>
                        <label for="fullName">Full Name</label>
                        <input type="text" id="fullName" name="full_name"
                               placeholder="Enter your full name" required>
                    </div>

                    <div>
                        <label for="studentId">Student ID</label>
                        <input type="text" id="studentId" name="student_id"
                               placeholder="Enter your student ID" required>
                    </div>

                    <div>
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email"
                               placeholder="name@example.com" required>
                    </div>

                    <div>
                        <label for="department">Department</label>
                        <select id="department" name="department" required>
                            <option value="">Select Department</option>
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                            <option value="Textile Engineering">Textile Engineering</option>
                            <option value="English">English</option>
                        </select>
                    </div>
                </div>

                <label for="workshop">Workshop</label>
                <select id="workshop" name="workshop" required>
                    <option value="">Select Workshop</option>
                    <option value="HTML and CSS Foundations">HTML and CSS Foundations</option>
                    <option value="JavaScript Basics">JavaScript Basics</option>
                    <option value="PHP and MySQL Basics">PHP and MySQL Basics</option>
                    <option value="Database Foundations">Database Foundations</option>
                </select>

                <label for="expectation">What do you expect to learn?</label>
                <textarea id="expectation" name="expectation" rows="5"
                          placeholder="Write a short learning expectation"></textarea>

                <button type="submit">Submit Registration</button>
            </form>
        </section>

        <p class="center-link">
            <a href="registrations.php">View Saved Registrations →</a>
        </p>
    </main>

    <footer class="site-footer">
        <p>Prepared for CSE472 Web and Internet Programming Lab.</p>
    </footer>
</body>
</html>
