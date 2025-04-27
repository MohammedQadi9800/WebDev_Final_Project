<?php include('../includes/header.php'); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $contact = trim($_POST["contact"]);
  $country = trim($_POST["country"]);
  $message = trim($_POST["message"]);

  if ($name && $email && $contact && $country && $message) {
    $conn = new mysqli("sql308.infinityfree.com", "if0_38801187", "3TdNsPMEx7rZ2", "if0_38801187_mohammedqadi");

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email_address, contact_no, country, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $contact, $country, $message);

    if ($stmt->execute()) {
      echo "<script>alert('Message sent successfully!');</script>";
    } else {
      echo "<script>alert('Something went wrong.');</script>";
    }

    $stmt->close();
    $conn->close();
  } else {
    echo "<script>alert('Please fill all fields.');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="../global/main.css">
</head>
<body>

<div class="background">
  <div class="con-container">
    <div class="screen">
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div>
          <div class="app-contact" style="color: white">
            CONTACT INFO: <span id="emailInfo"></span>
          </div>
        </div>
        <div class="screen-body-item">
        <form id="contactForm" method="POST" action="">
  <div class="app-form">
    <div class="app-form-group">
      <input class="app-form-control" id="name" name="name" placeholder="NAME">
    </div>
    <div class="app-form-group">
      <input class="app-form-control" id="email" name="email" placeholder="EMAIL">
    </div>
    <div class="app-form-group">
      <input class="app-form-control" id="contact" name="contact" placeholder="CONTACT NO">
    </div>
    <div class="app-form-group">
      <input class="app-form-control" id="country" name="country" placeholder="Country">
    </div>
    <div class="app-form-group message">
      <textarea class="app-form-control" id="message" name="message" placeholder="MESSAGE" rows="5"></textarea>
    </div>
    <div class="app-form-group buttons">
      <button class="app-form-button" type="reset">CANCEL</button>
      <button class="app-form-button" type="submit">SEND</button>
    </div>
  </div>
</form>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript to Scramble and Display Email -->
<script>
  const user = "m7mdqadi9800";
  const domain = "gmail.com"; // don't forget the ".com"
  const email = user + "@" + domain;
  document.getElementById("emailInfo").innerHTML = `<a href="mailto:${email}" style="color: white;">${email}</a>`;
</script>


<!-- Link to JavaScript Validation File -->
<script src="js/contact.js"></script>

</body>
</html>

<?php include('../includes/footer.php'); ?>
