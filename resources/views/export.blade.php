<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DOM to PDf</title>
	<!-- Styles -->
    

	<style>
		.container {
			padding-top: 20px;
		}
	</style>

</head>
<body>
	<div class="container">
			<div class="row">

			<div class="col-md-8 col-md-offset-2">
				<h1>Converting HTML to PDF</h1>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Developers</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
					</div>
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>{{ $data['name1'] }}</td>
								<td>Trout</td>
								<td>kilgore</td>
							</tr>
							<tr>
								<td>2</td>
								<td>{{ $data['name2'] }}</td>
								<td>Loblaw</td>
								<td>boblahblah</td>
							</tr>
							<tr>
								<td>3</td>
								<td>{{ $data['name3'] }}</td>
								<td>Caulfield</td>
								<td>penceyreject</td>
							</tr>
						</tbody>
					</table>
					
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>