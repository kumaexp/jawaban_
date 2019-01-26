<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Tes Arkademy</title>
  </head>
  <body>
    <!-- Image and text -->
	<nav class="navbar navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	    <img src="/docs/4.2/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
	    Hasil Query
	  </a>
	</nav>

	<?php
		$conn = mysqli_connect("localhost", "root", "", "ark_1");
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT 
					product_categories.nama, 
					COUNT(products.category_id) AS jumlah_produk
				FROM 
					product_categories 
				LEFT JOIN 
					products 
					ON (products.category_id=product_categories.id)
				GROUP BY 
					product_categories.id, product_categories.nama
				ORDER BY 
					product_categories.id
				";

		$result = $conn->query($sql);

		if (mysqli_num_rows($result) > 0) {
			$n = 1;
			echo "
				<table class='table'>
				  <thead>
				    <tr>
				      <th scope='col'>ID</th>
				      <th scope='col'>Nama</th>
				      <th scope='col'>Jumlah Prooduk</th>
				    </tr>
				  </thead>
				  <tbody>
			";
		    while($row = mysqli_fetch_assoc($result)) {
		        echo "<tr><th scope='row'>" . $n++ . "</th><td>" . $row["nama"]. "</td><td>" . $row["jumlah_produk"]. "</td></tr>";
		    }
		    echo "
		    	  </tbody>
		    	</table>
		    ";
		} else {
		    echo "0 results";
		}
	?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
