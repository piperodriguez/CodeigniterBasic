<!DOCTYPE html>
<html>
<head>
	<title>usuarios</title>
</head>
<body>
  <h1><?=$titulo?></h1>

  <table>
  	<thead>
  		<tr>
  			<th>Username</th>
  		</tr>
  	</thead>
  	<tbody>
  	<?php foreach ($usuarios as $value) : ?>
  		<tr>
  			<td><?=$value['username']?></td>
  		</tr>
  	<?php endforeach ?>
  	</tbody>
  </table>
</body>
</html>
