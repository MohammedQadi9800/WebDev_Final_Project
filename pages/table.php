<?php
// Set page title
$pageTitle = "Table";

// Add print CSS
$additionalCSS = '<link rel="stylesheet" type="text/css" href="/global/print.css" media="print" />';

// Include header
include '../includes/header.php';
?>

<div class="container">
    <h1>Course Schedule</h1>
    
    <p>This page demonstrates a table implementation with multiple columns and rows using colspan and rowspan attributes. The table displays a sample course schedule for a semester.</p>
    
    <div class="table-controls">
        <button onclick="window.print();" class="print-button">Print Table</button>
    </div>
    
    <div class="table-container">
        <table class="schedule-table">
            <thead>
                <tr>
                    <th>Time / Day</th>
                    <th>Sunday</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>8:00 - 9:00</td>
                    <td rowspan="2">CPCS 403<br>Internet Application Programming</td>
                    <td>CPCS 361<br>Database Systems</td>
                    <td rowspan="2">CPCS 403<br>Internet Application Programming</td>
                    <td>CPCS 361<br>Database Systems</td>
                    <td rowspan="3" class="free-time">Free Time</td>
                </tr>
                <tr>
                    <td>9:00 - 10:00</td>
                    <td rowspan="2">CPCS 351<br>System Analysis</td>
                    <td rowspan="2">CPCS 351<br>System Analysis</td>
                </tr>
                <tr>
                    <td>10:00 - 11:00</td>
                    <td>CPCS 331<br>Artificial Intelligence</td>
                    <td>CPCS 331<br>Artificial Intelligence</td>
                </tr>
                <tr>
                    <td>11:00 - 12:00</td>
                    <td colspan="5" class="lunch-break">Lunch Break</td>
                </tr>
                <tr>
                    <td>12:00 - 1:00</td>
                    <td>ARAB 101<br>Arabic Language</td>
                    <td rowspan="2">CPCS 371<br>Computer Networks</td>
                    <td>ARAB 101<br>Arabic Language</td>
                    <td rowspan="2">CPCS 371<br>Computer Networks</td>
                    <td rowspan="3" class="lab-session">Lab Session<br>CPCS 403</td>
                </tr>
                <tr>
                    <td>1:00 - 2:00</td>
                    <td rowspan="2">ISLS 101<br>Islamic Studies</td>
                    <td rowspan="2">ISLS 101<br>Islamic Studies</td>
                </tr>
                <tr>
                    <td>2:00 - 3:00</td>
                    <td>STAT 110<br>Statistics</td>
                    <td>STAT 110<br>Statistics</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="table-info">
        <h2>Table Information</h2>
        <p>This table demonstrates the following features:</p>
        <ul>
            <li>Multiple columns and rows with proper structure</li>
            <li>Use of colspan and rowspan attributes</li>
            <li>CSS styling for better readability</li>
            <li>Print functionality with a dedicated print stylesheet</li>
            <li>Responsive design that adapts to different screen sizes</li>
        </ul>
        <p>The table is styled using CSS and can be printed using the print button above or your browser's print function.</p>
    </div>
</div>

<style>
/* Additional styles specific to the table page */
.table-controls {
    margin: 1rem 0;
    text-align: right;
}

.print-button {
    background-color: #005a87;
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 3px;
    cursor: pointer;
}

.print-button:hover {
    background-color: #003d5c;
}

.table-container {
    overflow-x: auto;
    margin-bottom: 2rem;
}

.schedule-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 1rem;
}

.schedule-table th,
.schedule-table td {
    padding: 0.75rem;
    text-align: center;
    border: 1px solid #ddd;
    vertical-align: middle;
}

.schedule-table th {
    background-color: #005a87;
    color: white;
    font-weight: bold;
}

.schedule-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.lunch-break {
    background-color: #ffecb3;
    font-weight: bold;
}

.free-time {
    background-color: #e8f5e9;
}

.lab-session {
    background-color: #e3f2fd;
}

.table-info {
    background-color: #f9f9f9;
    padding: 1.5rem;
    border-radius: 5px;
    margin-top: 2rem;
}

@media screen and (max-width: 768px) {
    .schedule-table {
        font-size: 0.9rem;
    }
    
    .schedule-table th,
    .schedule-table td {
        padding: 0.5rem;
    }
}
</style>

<?php
// Include footer
include '../includes/footer.php';
?>
