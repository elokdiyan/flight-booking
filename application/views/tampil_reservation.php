<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
<table>
<thead>
	<tr>
                  <th>No</th>
				  <th>Reservation Code</th>
				  <th>Reservation At</th>
				  <th>Reservation Date</th>
				  <th>Seat Code</th>
				  <th>Customer Id</th>
				  <th>Rute Id</th>
				  <th>Depart At</th>
				  <th>Price</th>
				  <th>User Id</th>
                </tr>
                </thead>
                <tbody>
                <?php
					$nomor = 1;
					foreach ($reservation as $row) {
				?>
                <tr>
                  <td><?php echo $nomor++; ?></td>
				  <td><?php echo $row->reservation_code ?></td>
				  <td><?php echo $row->reservation_at ?></td>
				  <td><?php echo $row->reservation_date ?></td>
				  <td><?php echo $row->seat_code ?></td>
				  <td><?php echo $row->customer_id ?></td>
				  <td><?php echo $row->rute_id ?></td>
				  <td><?php echo $row->depart_at ?></td>
				  <td><?php echo $row->price ?></td>
				  <td><?php echo $row->user_id ?></td>
				  <td><a class="btn btn-danger" href="<?php echo base_url('reservation/hapusreservation/'.$row->id); ?>"> Hapus </a> | <a class="btn btn-warning" href="<?php echo base_url('reservation/editdata/'.$row->id); ?>"> Edit</a></td>
                </tr>
                <?php
					}
				?>
                </tbody>
</table>

</body>
</html>