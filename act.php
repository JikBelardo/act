<?php require_once 'C:\xampp\htdocs\BELARDO\dbConfig.php'; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>
<?php  
	 
     // SQL code
     $query = "DELETE FROM registration_system
                WHERE id = 2";
     // prepare the query
      $stmt = $pdo->prepare($query);
     // Console
        $executeQuery = $stmt ->execute();
     if ($executeQuery) {
        echo "success";
     } else {
        echo "error";
     }
     ?>

    <!-- <table> 
         <tr>
			<th>id</th>
			<th>Fist Name</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>Age</th>
            <th>Target Company</th>
            <th>Expected Salary</th>
            <th>Dream Profession</th>
		</tr>
        <?php
			foreach ($query as $row) { ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['first_name']; ?></td>
			<td><?php echo $row['last_name']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['age']; ?></td>
            <td><?php echo $row['target_company']; ?></td>
            <td><?php echo $row['expected_salary']; ?></td>\
            <td><?php echo $row['dream_profession']; ?></td>
		</tr>
		<?php	} ?>
		?>
        
    </table> -->
    
</body>
</html>