<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>KWSP KalKulator Akaun 3</title>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="shortcut icon" href="../../themes/public/images/favicon.svg">
		<style>
			body {
			font-family: "Poppins", sans-serif!important;
			font-weight: 400!important;
			font-style: normal!important;
			}
		</style>
	</head>
	<body class="bg-light">
		<div class="container-sm col-lg-6">
			<main>
				<div class="py-5 text-center">
					<img class="d-block mx-auto mb-4" src="https://vectorlogo4u.com/wp-content/uploads/2018/08/logo-baru-kwsp-vector.png" alt="" width="272">
					<h2>Calculator - KWSP</h2>
					<p class="lead">Pengiraan Pembahagian menurut KWSP!.</p>
					<p>Total Visitor : <b><span id="visitorCount"></span></b></p>
				</div>
				<form id="kalkulatorkwspakaunfleksibel" class="mb-3">
					<div class="input-group">
						<input type="number" class="form-control" id="amount" inputmode="numeric" placeholder="Masukkan baki Akaun 2">
						<button type="button" class="btn btn-primary" onclick="calculate()">Kira</button>
					</div>
				</form>
				<div class="input-group mb-0 bg-primary p-3" style="color:#ffffff;">
					<span style="margin-right:10px;">AKAUN 1 : </span><span id="akaunPersaraan"></span>
				</div>
				<div class="input-group mb-0 bg-secondary p-3" style="color:#ffffff;">
					<span style="margin-right:10px;">AKAUN 2 : </span><span id="akaunLestari"></span>
				</div>
				<div class="input-group mb-0 bg-info p-3" style="color:#ffffff;">
					<span style="margin-right:10px;">AKAUN 3 : </span><span id="akaunFleksibel"></span>
				</div>
			</main>
			<footer class="text-center mt-5">
				<p>&copy; <?php echo date("Y"); ?> By Doty The Cat. All rights reserved.</p>
			</footer>
		</div>
		<script>
			fetch('/kwsp/count.php')
			    .then(response => response.text())
			    .then(data => {
			        document.getElementById('visitorCount').textContent = data;
			    })
			    .catch(error => console.error('Error fetching visitor count:', error));
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
		<script>
			function calculate() {
			    var amount = parseFloat(document.getElementById('amount').value);
			    var akaunPersaraan = 0;
			    var akaunLestari = 0;
			    var akaunFleksibel = 0;
			
			    if (amount >= 3000) {
			        akaunPersaraan = (5 / 30) * amount;
			        akaunLestari = (15 / 30) * amount;
			        akaunFleksibel = (10 / 30) * amount;
			    } else if (amount > 1000 && amount < 3000) {
			        akaunLestari = (amount - 1000);
			        akaunFleksibel = (1000);
			    } else {
			        akaunFleksibel = amount;
			    }
			
			    document.getElementById('akaunPersaraan').textContent = 'RM ' + akaunPersaraan.toFixed(2);
			    document.getElementById('akaunLestari').textContent = 'RM ' + akaunLestari.toFixed(2);
			    document.getElementById('akaunFleksibel').textContent = 'RM ' + akaunFleksibel.toFixed(2);
			}
		</script>
	</body>
</html>