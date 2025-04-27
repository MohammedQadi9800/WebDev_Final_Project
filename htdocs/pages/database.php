<?php include('../includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../styles/database.css">
  <title>Client Projects Overview</title>
</head>
<body>
  <div class="db-title">
    <h2>Client Projects Overview</h2>
    <p>Linked Contact & Projects Table</p>
  </div>

  <div class="data-wrapper">
    <?php

    $conn = new mysqli("sql308.infinityfree.com", "if0_38801187", "3TdNsPMEx7rZ2", "if0_38801187_mohammedqadi");

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $query = "
  SELECT contact_messages.name AS client_name, contact_messages.email_address AS email, 
         projects.title, projects.description, projects.status, projects.created_at
  FROM projects
  JOIN contact_messages ON contact_messages.id = projects.contact_id
  ORDER BY projects.created_at DESC
";


    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0): ?>
      <table>
        <thead>
          <tr>
            <th>Client Name</th>
            <th>Email</th>
            <th>Project Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Created</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
              <td><?= htmlspecialchars($row['client_name']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= htmlspecialchars($row['title']) ?></td>
              <td><?= htmlspecialchars($row['description']) ?></td>
              <td><?= htmlspecialchars($row['status']) ?></td>
              <td><?= date('M d, Y', strtotime($row['created_at'])) ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p>No projects found.</p>
    <?php endif; ?>
  </div>
</body>
</html>

<?php include('../includes/footer.php'); ?>
<?php include('../includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../styles/database.css">
  <title>Client Projects Overview</title>
</head>
<body>
  <div class="db-title">
    <h2>Client Projects Overview</h2>
    <p>Linked Contact & Projects Table</p>
  </div>

  <div class="data-wrapper">
    <?php

    $conn = new mysqli("localhost", "root", "", "mohammedqadi");

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $query = "
  SELECT contact_messages.name AS client_name, contact_messages.email, projects.title, projects.description, projects.status, projects.created_at
  FROM projects
  JOIN contact_messages ON contact_messages.id = projects.contact_id
  ORDER BY projects.created_at DESC
";


    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0): ?>
      <table>
        <thead>
          <tr>
            <th>Client Name</th>
            <th>Email</th>
            <th>Project Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Created</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
              <td><?= htmlspecialchars($row['client_name']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= htmlspecialchars($row['title']) ?></td>
              <td><?= htmlspecialchars($row['description']) ?></td>
              <td><?= htmlspecialchars($row['status']) ?></td>
              <td><?= date('M d, Y', strtotime($row['created_at'])) ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p>No projects found.</p>
    <?php endif; ?>
  </div>
</body>
</html>

<?php include('../includes/footer.php'); ?>
<?php include('../includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../styles/database.css">
  <title>Client Projects Overview</title>
</head>
<body>
  <div class="db-title">
    <h2>Client Projects Overview</h2>
    <p>Linked Contact & Projects Table</p>
  </div>

  <div class="data-wrapper">
    <?php

    $conn = new mysqli("localhost", "root", "", "mohammedqadi");

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $query = "
  SELECT contact_messages.name AS client_name, contact_messages.email, projects.title, projects.description, projects.status, projects.created_at
  FROM projects
  JOIN contact_messages ON contact_messages.id = projects.contact_id
  ORDER BY projects.created_at DESC
";


    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0): ?>
      <table>
        <thead>
          <tr>
            <th>Client Name</th>
            <th>Email</th>
            <th>Project Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Created</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
              <td><?= htmlspecialchars($row['client_name']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= htmlspecialchars($row['title']) ?></td>
              <td><?= htmlspecialchars($row['description']) ?></td>
              <td><?= htmlspecialchars($row['status']) ?></td>
              <td><?= date('M d, Y', strtotime($row['created_at'])) ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p>No projects found.</p>
    <?php endif; ?>
  </div>
</body>
</html>

<?php include('../includes/footer.php'); ?>
