<?php include('../includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Class Schedule</title>
  <link rel="stylesheet" href="../global/main.css">
  <link rel="stylesheet" href="../global/print.css" media="print">
  <style>
    .print-button {
      margin: 20px 0;
      padding: 10px 20px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    @media print {
      .print-button,
      h1, h2, h3 {
        display: none !important;
      }
    }
  </style>
</head>
<body>

<div class="table-content">
  <button class="print-button" onclick="window.print()">Print Table</button>
  <h1>Weekly Class Schedule</h1>

  <table class="schedule">
    <caption>Computer Science Semester Schedule</caption>
    <thead>
      <tr>
        <th>Day</th>
        <th>9:30 - 10:50 AM</th>
        <th>11:00 - 12:20 PM</th>
        <th>12:30 - 2:20 PM</th>
        <th>2:30 – 3:20 PM</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Sunday</td>
        <td colspan="4" style="text-align:center;">----</td>
      </tr>
      <tr>
        <td>Monday</td>
        <td>CPCS403 Web Dev</td>
        <td>CPCS494 Game Dev</td>
        <td>Break</td>
        <td>CPIS428 Ethics</td>
      </tr>
      <tr>
        <td>Tuesday</td>
        <td colspan="4" style="text-align:center;">----</td>
      </tr>
      <tr>
        <td>Wednesday</td>
        <td>CPCS403 Web Dev</td>
        <td>CPCS494 Game Dev</td>
        <td>Break</td>
        <td>CPIS428 Ethics</td>
      </tr>
      <tr>
        <td>Thursday</td>
        <td colspan="4" style="text-align:center;">----</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>

<?php include('../includes/footer.php'); ?>
