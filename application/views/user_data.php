<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
	<table border="1" >
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Fullname</th>
			<th>Level</th>
			<th>Aksi</th>
		</tr>

		<?php
			$nomor = 1;
			foreach ($tbuser as $row) {
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $row->username ?></td>
			<td><?php echo $row->password ?></td>
			<td><?php echo $row->fullname ?></td>
			<td><?php echo $row->level ?></td>
			<td><a href="<?php echo base_url('Users/del/'.$row->id); ?>"> Hapus </a> |<a href="<?php echo base_url('edituser/index/'.$row->id); ?>"> Edit</a></td>
		</tr>
		<?php
			}
		?>
	</table>
</body>
</html>