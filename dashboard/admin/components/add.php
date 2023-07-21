<?php //$conn = mysqli_connect("localhost", "root", "", "cutm_tracker"); ?>

<?php
	if (isset($_POST["import"])) {
		$fileName = $_FILES["excel"]["name"];
		$fileExtension = explode('.', $fileName);
		$fileExtension = strtolower(end($fileExtension));
		$newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "_students." . $fileExtension;

		$targetDirectory = "C:\apache\studentdata/" . $newFileName;
		move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

		error_reporting(0);
		ini_set('display_errors', 0);

		require 'excelReader/excel_reader2.php';
		require 'excelReader/SpreadsheetReader.php';
		echo "<table border = 1>";
		$reader = new SpreadsheetReader($targetDirectory);
		foreach ($reader as $key => $data) {
			// $name = $row[0];
			// $age = $row[1];
			// $country = $row[2];
			$reg = $data[0];
			$student_name = $data[1];
			$admission_year = $data[2];
			$dob =$data[3];
			$mobile = $data[4];
			$gender = $data[5];
			$branch_code = substr($reg, 5, 3);
			$email = $reg . "@cutm.ac.in";
			?>
			<tr>
				<td>
					<?php echo $reg; ?>
				</td>
				<td>
					<?php echo $student_name; ?>
				</td>
				<td>
					<?php echo $admission_year; ?>
				</td>
				<td>
					<?php echo $dob; ?>
				</td>
				<td>
					<?php echo $mobile; ?>
				</td>
				<td>
					<?php echo $gender; ?>
				</td>
				<td>
					<?php echo $branch_code; ?>
				</td>
				<td>
					<?php echo $email; ?>
				</td>
			</tr>

			<?php
		}
		echo "</table>";
	}
	?>