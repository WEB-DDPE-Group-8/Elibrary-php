<?php
session_start();
include '../config/dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>admin panel</title>

	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" href="../css/admin_style.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
	<!-- custom admin js file link  -->
	<script src="../js/admin_script.js"></script>
	<script src="../js/script.js" defer></script>

</head>

<?php include '../inc/admin-nav.php'; ?>
<!-- admin dashboard section starts  -->

<section class="dashboard">

	<h1 class="title">dashboard</h1>

	<div class="box-container">

		<div class="box">
			<?php 
            $select_users = mysqli_query($db, "SELECT * FROM user WHERE IsAdmin = 'user'") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
			<h3><?php echo $number_of_users; ?></h3>
			<p>normal users</p>
		</div>

		<div class="box">
			<?php 
            $select_users = mysqli_query($db, "SELECT * FROM user WHERE IsAdmin = 'ADMIN'") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
			<h3><?php echo $number_of_users; ?></h3>
			<p>Total Admins</p>
		</div>

		<div class="box">
			<?php 
            $select_users = mysqli_query($db, "SELECT * FROM user") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
			<h3><?php echo $number_of_users; ?></h3>
			<p>Total Accounts</p>
		</div>

		<div class="box">
			<?php 

            $sql = "SELECT COUNT(*) AS total from event";
            $result = $db->query($sql);
            $data =  $result->fetch_assoc();
           
         ?>
			<h3><?php  echo $data['total']; ?></h3>
			<p>Events</p>
		</div>

		<div class="box">
			<?php 

            $sql = "SELECT COUNT(*) AS total from books";
            $result = $db->query($sql);
            $data =  $result->fetch_assoc();
           
         ?>
			<h3><?php  echo $data['total']; ?></h3>
			<p>Books</p>
		</div>

	</div>

</section>

<!-- admin dashboard section ends -->

<!-- stats with chart -->
<div class="container-fluid">
	<div class="row">
		<!-- <div class="col-md-4">
					<div class="card mt-4">
						<div class="card-header">Pie Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="pie_chart"></canvas>
							</div>
						</div>
					</div>
				</div> -->
		<div class="col-md-4">
			<div class="card mt-4">
				<div class="card-header">books by Genre Doughnut_chart</div>
				<div class="card-body">
					<div class="chart-container pie-chart">
						<canvas id="doughnut_chart"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card mt-4 mb-4">
				<div class="card-header">books by Genre Bar Chart</div>
				<div class="card-body">
					<div class="chart-container pie-chart">
						<canvas id="bar_chart"></canvas>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card mt-4">
				<div class="card-header">users Doughnut Chart</div>
				<div class="card-body">
					<div class="chart-container pie-chart">
						<canvas id="doughnut_chart2"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card mt-4 mb-4">
				<div class="card-header">users Bar Chart</div>
				<div class="card-body">
					<div class="chart-container pie-chart">
						<canvas id="bar_chart2"></canvas>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card mt-4">
				<div class="card-header">events Doughnut Chart</div>
				<div class="card-body">
					<div class="chart-container pie-chart">
						<canvas id="doughnut_chart3"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card mt-4 mb-4">
				<div class="card-header">events Bar Chart</div>
				<div class="card-body">
					<div class="chart-container pie-chart">
						<canvas id="bar_chart3"></canvas>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>


<?php
include '../inc/footer.php';
?>

</body>

</html>

<!-- fetch function with ajax -->

<script>
	$(document).ready(function () {

		// $('#submit_data').click(function(){

		// 	var language = $('input[name=programming_language]:checked').val();

		// 	$.ajax({
		// 		url:"data.php",
		// 		method:"POST",
		// 		data:{action:'insert', language:language},
		// 		beforeSend:function()
		// 		{
		// 			$('#submit_data').attr('disabled', 'disabled');
		// 		},
		// 		success:function(data)
		// 		{
		// 			$('#submit_data').attr('disabled', false);

		// 			$('#programming_language_1').prop('checked', 'checked');

		// 			$('#programming_language_2').prop('checked', false);

		// 			$('#programming_language_3').prop('checked', false);

		// 			alert("Your Feedback has been send...");

		// 			makechart();
		// 		}
		// 	})

		// });

		makechart();
		userchart();
		eventschart()

		function eventschart() {
			$.ajax({
				url: "data.php",
				method: "POST",
				data: {
					action: 'fetchevent'
				},
				dataType: "JSON",
				success: function (data_e) {
					var language = [];
					var total = [];
					var color = [];

					for (var count = 0; count < data_e.length; count++) {
						language.push(data_e[count].language);
						total.push(data_e[count].total);
						color.push(data_e[count].color);
					}

					var chart_data = {
						labels: language,
						datasets: [{
							label: 'Event',
							backgroundColor: color,
							color: '#fff',
							data: total
						}]
					};

					var options = {
						responsive: true,
						scales: {
							yAxes: [{
								ticks: {
									min: 0
								}
							}]
						}
					};

					// var group_chart1 = $('#pie_chart2');

					// var graph1 = new Chart(group_chart1, {
					// 	type:"pie",
					// 	data:chart_data
					// });

					var group_chart2 = $('#doughnut_chart3');

					var graph2 = new Chart(group_chart2, {
						type: "doughnut",
						data: chart_data
					});

					var group_chart3 = $('#bar_chart3');

					var graph3 = new Chart(group_chart3, {
						type: 'bar',
						data: chart_data,
						options: options
					});
				}
			})
		}

		function userchart() {
			$.ajax({
				url: "data.php",
				method: "POST",
				data: {
					action: 'fetch1'
				},
				dataType: "JSON",
				success: function (data1) {
					var language = [];
					var total = [];
					var color = [];

					for (var count = 0; count < data1.length; count++) {
						language.push(data1[count].language);
						total.push(data1[count].total);
						color.push(data1[count].color);
					}

					var chart_data = {
						labels: language,
						datasets: [{
							label: 'User',
							backgroundColor: color,
							color: '#fff',
							data: total
						}]
					};

					var options = {
						responsive: true,
						scales: {
							yAxes: [{
								ticks: {
									min: 0
								}
							}]
						}
					};

					// var group_chart1 = $('#pie_chart2');

					// var graph1 = new Chart(group_chart1, {
					// 	type:"pie",
					// 	data:chart_data
					// });

					var group_chart2 = $('#doughnut_chart2');

					var graph2 = new Chart(group_chart2, {
						type: "doughnut",
						data: chart_data
					});

					var group_chart3 = $('#bar_chart2');

					var graph3 = new Chart(group_chart3, {
						type: 'bar',
						data: chart_data,
						options: options
					});
				}
			})
		}

		function makechart() {
			$.ajax({
				url: "data.php",
				method: "POST",
				data: {
					action: 'fetch'
				},
				dataType: "JSON",
				success: function (data) {
					var language = [];
					var total = [];
					var color = [];

					for (var count = 0; count < data.length; count++) {
						language.push(data[count].language);
						total.push(data[count].total);
						color.push(data[count].color);
					}

					var chart_data = {
						labels: language,
						options: {
							legend: {
								display: false
							}
						},
						datasets: [{
							label: 'Genre',
							backgroundColor: color,
							color: '#fff',
							data: total
						}]
					};

					var options = {
						responsive: true,
						scales: {
							yAxes: [{
								ticks: {
									min: 0
								}
							}]
						}
					};

					// var group_chart1 = $('#pie_chart');

					// var graph1 = new Chart(group_chart1, {
					// 	type:"pie",
					// 	data:chart_data
					// });

					var group_chart2 = $('#doughnut_chart');

					var graph2 = new Chart(group_chart2, {
						type: "doughnut",
						data: chart_data
					});

					var group_chart3 = $('#bar_chart');

					var graph3 = new Chart(group_chart3, {
						type: 'bar',
						data: chart_data,
						options: options
					});
				}
			})
		}

	});
</script>