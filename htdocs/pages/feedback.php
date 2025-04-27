<?php include('../includes/header.php'); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $errors = [];

  $firstName = trim($_POST["firstName"]);
  $lastName = trim($_POST["lastName"]);
  $email = trim($_POST["email"]);
  $contact = trim($_POST["contact"]);
  $country = trim($_POST["country"]);
  $gender = $_POST["gender"] ?? '';
  $city = $_POST["city"];
  $hobbies = $_POST["hobbies"] ?? [];
  $feedback = trim($_POST["feedback"]);

  if ($firstName && $lastName && $email && $contact && $country && $gender && $city && $feedback && count($hobbies) > 0) {
    $conn = new mysqli("sql308.infinityfree.com", "if0_38801187", "3TdNsPMEx7rZ2", "if0_38801187_mohammedqadi");

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO feedback (first_name, last_name, email, contact_no, country, feedback) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $firstName, $lastName, $email, $contact, $country, $feedback);


    if ($stmt->execute()) {
      echo "<script>alert('Message sent successfully!');</script>";
    } else {
      echo "<script>alert('Something went wrong.');</script>";
    }

    $stmt->close();
    $conn->close();
  } else {
    echo "<script>alert('Please fill all required fields.');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  <link rel="stylesheet" href="../global/main.css">
  <style>
    .error { color: red; font-size: 14px; margin-top: 5px; }
    label { display: block; margin-top: 10px; }
  </style>
</head>
<body>

<div class="background">
  <div class="con-container">
  <form id="fb-form" method="POST" action="">
  <fieldset class="fb-fieldset">
    <legend class="fb-legend">Personal Information</legend>

    <label class="fb-label">First Name</label>
    <input type="text" name="firstName" class="fb-input">
    <span class="fb-error" id="firstNameError"></span>

    <label class="fb-label">Last Name</label>
    <input type="text" name="lastName" class="fb-input">
    <span class="fb-error" id="lastNameError"></span>

    <label class="fb-label">Email</label>
    <input type="email" name="email" class="fb-input">
    <span class="fb-error" id="emailError"></span>

    <label class="fb-label">Contact No</label>
    <input type="text" name="contact" class="fb-input">
    <span class="fb-error" id="contactError"></span>

    <label class="fb-label">Gender</label>
    <input type="radio" name="gender" value="Male" class="fb-radio"> Male
    <input type="radio" name="gender" value="Female" class="fb-radio"> Female
    <span class="fb-error" id="genderError"></span>

    <label class="fb-label">Country</label>
    <input type="text" name="country" class="fb-input">
    <span class="fb-error" id="countryError"></span>
  </fieldset>

  <fieldset class="fb-fieldset">
    <legend class="fb-legend">Feedback Details</legend>

    <label class="fb-label">City</label>
    <select name="city" class="fb-select">
      <option value="">-- Select City --</option>
      <option value="jeddah">Jeddah</option>
      <option value="Riyadh">Riyadh</option>
      <option value="Eastern Province">Eastern Province</option>
    </select>
    <span class="fb-error" id="cityError"></span>

    <label class="fb-label">Hobbies</label>
    <input type="checkbox" name="hobbies[]" value="Reading" class="fb-checkbox"> Reading
    <input type="checkbox" name="hobbies[]" value="Gaming" class="fb-checkbox"> Gaming
    <span class="fb-error" id="hobbiesError"></span>

    <label class="fb-label">Your Feedback</label>
    <textarea name="feedback" class="fb-textarea" rows="4"></textarea>
    <span class="fb-error" id="feedbackError"></span>
  </fieldset>

  <div>
    <button type="reset" class="fb-button">Cancel</button>
    <button type="submit" class="fb-button">Send</button>
  </div>
</form>

  </div>
</div>

<script src="js/validation.js"></script>
</body>
</html>

<?php include('../includes/footer.php'); ?>
