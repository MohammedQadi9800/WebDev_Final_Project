<?php
// Ensure the content type is XHTML compliant
header('Content-Type: application/xhtml+xml; charset=utf-8');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Page</title>
</head>
<body>
    <h1>Welcome to the Test Page</h1>
    <p>This is a basic XHTML compliant PHP page.</p>

    <?php include '../includes/footer.html'; ?>
</body>
</html>