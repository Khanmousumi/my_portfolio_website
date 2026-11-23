
<?php
$success = "";
$error = "";

$name = "";
$email = "";
$subject = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $subject = trim($_POST["subject"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if (
        empty($name) ||
        empty($email) ||
        empty($subject) ||
        empty($message)
    ) {
        $error = "Please fill in all fields. / সব ঘর পূরণ করুন।";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address. / সঠিক ইমেইল দিন।";
    } else {
        $success = "Thank you! Your message has been submitted. / ধন্যবাদ! আপনার বার্তা জমা হয়েছে।";

        $name = "";
        $email = "";
        $subject = "";
        $message = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact | My Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6ff;
            color: #222;
        }

        header {
            background: linear-gradient(135deg, #4f46e5, #9333ea);
            padding: 20px 8%;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        header h2 {
            font-size: 25px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 18px;
            font-weight: bold;
        }

        nav a:hover,
        nav a.active {
            color: #ffe082;
        }

        .contact-section {
            max-width: 1100px;
            margin: 60px auto;
            padding: 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 35px;
        }

        .section-title h1 {
            font-size: 36px;
            color: #4f46e5;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #666;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1.3fr;
            gap: 30px;
        }

        .contact-info,
        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.07);
        }

        .contact-info h2,
        .contact-form h2 {
            color: #4f46e5;
            margin-bottom: 20px;
        }

        .info-item {
            margin-bottom: 22px;
            line-height: 1.7;
        }

        .info-item strong {
            display: block;
            color: #333;
        }

        .social-links {
            margin-top: 25px;
        }

        .social-links a {
            display: inline-block;
            background: #4f46e5;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 8px;
            margin: 5px 5px 0 0;
        }

        .social-links a:hover {
            background: #9333ea;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 13px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            outline: none;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #4f46e5;
        }

        .form-group textarea {
            height: 140px;
            resize: vertical;
        }

        button {
            background: linear-gradient(135deg, #4f46e5, #9333ea);
            color: white;
            border: none;
            padding: 14px 25px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 18px;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 18px;
        }

        footer {
            text-align: center;
            padding: 22px;
            background: #222;
            color: white;
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            header {
                justify-content: center;
                text-align: center;
            }

            nav a {
                margin: 5px 8px;
                display: inline-block;
            }

            .contact-container {
                grid-template-columns: 1fr;
            }

            .section-title h1 {
                font-size: 29px;
            }
        }
    </style>
</head>

<body>

<header>
    <h2>My Portfolio</h2>

    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="projects.php">Projects</a>
        <a href="contact.php" class="active">Contact</a>
    </nav>
</header>

<section class="contact-section">

    <div class="section-title">
        <h1>Contact Me / যোগাযোগ করুন</h1>
        <p>Have a question or project? Feel free to contact me.</p>
        <p>কোনো প্রশ্ন বা কাজের জন্য নির্দ্বিধায় যোগাযোগ করুন।</p>
    </div>

    <div class="contact-container">

        <div class="contact-info">
            <h2>Get In Touch / যোগাযোগের তথ্য</h2>

            <div class="info-item">
                <strong>📧 Email / ইমেইল</strong>
                your-email@example.com
            </div>

            <div class="info-item">
                <strong>📍 Location / ঠিকানা</strong>
                Bangladesh
            </div>

            <div class="info-item">
                <strong>💼 Availability / কাজের সুযোগ</strong>
                Available for projects
                <br>
                নতুন প্রজেক্টের জন্য আগ্রহী
            </div>

            <div class="social-links">
                <h3>Follow Me / আমাকে অনুসরণ করুন</h3>

                <a href="#" target="_blank">Facebook</a>
                <a href="#" target="_blank">GitHub</a>
                <a href="#" target="_blank">LinkedIn</a>
            </div>
        </div>

        <div class="contact-form">
            <h2>Send Message / বার্তা পাঠান</h2>

            <?php if ($success != ""): ?>
                <div class="success">
                    <?php echo htmlspecialchars($success); ?>
                </div>
            <?php endif; ?>

            <?php if ($error != ""): ?>
                <div class="error">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="">

                <div class="form-group">
                    <label>Full Name / পূর্ণ নাম</label>
                    <input type="text" name="name"
                           value="<?php echo htmlspecialchars($name); ?>"
                           placeholder="Enter your name" required>
                </div>

                <div class="form-group">
                    <label>Email Address / ইমেইল</label>
                    <input type="email" name="email"
                           value="<?php echo htmlspecialchars($email); ?>"
                           placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label>Subject / বিষয়</label>
                    <input type="text" name="subject"
                           value="<?php echo htmlspecialchars($subject); ?>"
                           placeholder="Enter subject" required>
                </div>

                <div class="form-group">
                    <label>Message / বার্তা</label>
                    <textarea name="message"
                              placeholder="Write your message..."
                              required><?php echo htmlspecialchars($message); ?></textarea>
                </div>

                <button type="submit">
                    Send Message / পাঠান
                </button>

            </form>
        </div>

    </div>

</section>

<footer>
    <p>© <?php echo date("Y"); ?> My Portfolio. All Rights Reserved.</p>
    <p>আমার পোর্টফোলিও — সর্বস্বত্ব সংরক্ষিত।</p>
</footer>

</body>
</html>
