<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: left;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
       
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    


<?php
$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'track' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'track' => 'CMS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'track' => 'PHP'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'track' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'track' => 'PHP'],
];


?>
 <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Track</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $key => $student): ?>
                
                <tr style="background-color: <?= $student['track'] === 'CMS' ? 'purple' : 'white'; ?>;">
                    <td><?= $key ; ?></td>
                    <td><?= ($student['name']); ?></td>
                    <td><?= ($student['email']); ?></td>
                    <td><?= ($student['track']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>