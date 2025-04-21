<?php
// Ensure the content type is XHTML compliant
header('Content-Type: application/xhtml+xml; charset=utf-8');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($pageTitle) ? $pageTitle : 'CPCS403 Final Project'; ?></title>
    <link rel="stylesheet" type="text/css" href="/global/main.css" />
    <?php if(isset($additionalCSS)) { echo $additionalCSS; } ?>
</head>
<body>
    <header>
        <div class="logo">
            <h1>CPCS403 Final Project</h1>
        </div>
        <?php include 'links.php'; ?>
    </header>
    <main>
