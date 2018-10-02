
<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
</head>
<body>
	<form name="" action="show.php" method="post" >
		<table border="1px" align="center" style="border: 1px solid black; width:600px;">
			<tr>
				<td colspan="3" align="center" style="height:20px;text-align: center;">
					<h1 style="color: red">PERSON PROFILE</h1>
				</td>
			</tr>

			<tr>
				<td width="30%" style="border: 1px solid black;">
					<label>Name</label>
				</td>
				<td width="60%" style="border: 1px solid black;">
					<input type="text" name="name"/>
				</td>
				<td width="10%" style="border: 1px solid black;">
				</td>
			</tr>
			<tr>
				<td width="30%" style="border: 1px solid black;">
					<label>Email</label>
				</td>
				<td width="60%" style="border: 1px solid black;">
					<input type="text" name="email"/>
				</td>
				<td width="10%" style="border: 1px solid black;">
				</td>
			</tr>

			<tr>
				<td width="30%" style="border: 1px solid black;">
					<label>Gender</label>
				</td>
				<td width="60%" style="border: 1px solid black;">
					<input type="radio" name="gender" value="Male"/>Male
					<input type="radio" name="gender" value="Female"/>Female
					<input type="radio" name="gender" value="Other"/>Other
				</td>
				<td width="10%" style="border: 1px solid black;">
				</td>
			</tr>

			<tr>
				<td width="30%" style="border: 1px solid black;">
					<label>Date of Birth</label>
				</td>
				<td width="60%" style="border: 1px solid black;">
					<input type="text" name="date"  style="width: 40px">/
					<input type="text" name="month"  style="width: 40px">/
					<input type="text" name="year"  style="width: 60px"> &nbsp <b><i>(dd/mm/yyyy)</i><b>
					
				</td>
				<td width="10%" style="border: 1px solid black;">
				</td>
			</tr>

			<tr>
				<td width="30%" style="border: 1px solid black;">
					<label>Blood Group</label>
				</td>
				<td width="60%" style="border: 1px solid black;">
					<select name="blood">
							<option>B +ve</option>
							<option>B -ve</option>
							<option>A +ve</option>
							<option>A -ve</option>
							<option>AB +ve</option>
							<option>AB -ve</option>
							<option>O +ve</option>
							<option>O -ve</option>
					</select>
				</td>
				<td width="10%" style="border: 1px solid black;">
				</td>
			</tr>

			<tr>
				<td width="30%" style="border: 1px solid black;">
					<label>Education</label>
				</td>
				<td width="60%" style="border: 1px solid black;">
					<input type="checkbox" name="education[]" value="SSC">SSC

					<input type="checkbox" name="education[]" value="HSC">HSC

					<input type="checkbox" name="education[]" value="BSC">BSc.

					<input type="checkbox" name="education[]" value="MSC">MSc.
				</td>
				<td width="10%" style="border: 1px solid black;">
				</td>
			</tr>

			<tr>
				<td width="30%" style="border: 1px solid black;">
					<label>Photo</label>
				</td>
				<td width="60%" style="border: 1px solid black;">
					<input type="file" name="Photo"/>
				</td>
				<td width="10%" style="border: 1px solid black;">
				</td>
			</tr>


			<tr>
				<td colspan="3" style="border: 1px solid black; height: 20px">
					
				</td>
			</tr>
			<tr>
				<td colspan="3" align="right" style="border: 1px solid black;">
					<input type="submit" name="submit" value="Submit" />
					<input type="reset" name="reset" value="Reset" >
				</td>
			</tr>
		</table>
	</form>

</body>
</html>