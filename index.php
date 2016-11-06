<!DOCTYPE html>
<html lang="en" ng-app="myApp">
	<head>
		<meta charset="utf-8">
		<title>People</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="libs/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="libs/bootstrap-datepicker/datepicker.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		
		<!-- <link href="css/css1/fonts.css" rel="stylesheet">
		<link href="css/css1/hosted.css" rel="stylesheet">
		<link href="css/css1/jquery.fancybox-1.3.4.css" rel="stylesheet">
		<link href="css/css1/renderer.css" rel="stylesheet">
		<link href="css/css1/shared.css" rel="stylesheet">
		<link href="css/css1/theme-flat.css" rel="stylesheet"> -->
	</head>

	<body ng-controller="MainCtrl">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar" ng-repeat="i in [1,2,3]"></span> 
					</button>
					<a class="navbar-brand" href="#">ISG</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#">ISG Securities Platform</a></li>
						<li><a href="#">Database</a></li>
						<li><a href="#">Backups</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Log out</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container-lg">
			<div class="row">
				<div class="col-md-2">
					<div id="MainMenu">
						<div class="list-group panel">
							<a href="#processes" class="list-group-item list-group-item-menu" data-toggle="collapse" data-parent="#MainMenu">Processes</a>
							<div class="collapse" id="processes">
								<a href="#" class="list-group-item list-group-item-menu2" data-toggle="modal" data-target="#myModal" data-backdrop="static"><i class="glyphicon glyphicon-chevron-right"></i> Add New Client</a>
								<a href="#" class="list-group-item list-group-item-menu2"><i class="glyphicon glyphicon-chevron-right"></i> New Offer To Commit</a>
								<a href="#" class="list-group-item list-group-item-menu2"><i class="glyphicon glyphicon-chevron-right"></i> New Inv.Document Set</a>
							</div>
							<a href="#people" class="list-group-item list-group-item-menu" data-toggle="collapse" data-parent="#MainMenu">People</a>
							<div class="collapse" id="people">
								<a href="#" class="list-group-item list-group-item-menu2"><i class="glyphicon glyphicon-chevron-right"></i> People 1</a>
								<a href="#" class="list-group-item list-group-item-menu2"><i class="glyphicon glyphicon-chevron-right"></i> People 2</a>
								<a href="#" class="list-group-item list-group-item-menu2"><i class="glyphicon glyphicon-chevron-right"></i> People 3</a>
							</div>
							<a href="#people" class="list-group-item list-group-item-menu" data-toggle="collapse" data-parent="#MainMenu">Trusts</a>
							<a href="#companies" class="list-group-item list-group-item-menu" data-toggle="collapse" data-parent="#MainMenu">Companies</a>
							<a href="#investment_cases" class="list-group-item list-group-item-menu" data-toggle="collapse" data-parent="#MainMenu">Investment Cases</a>
							<a href="#investment_document_sets" class="list-group-item list-group-item-menu" data-toggle="collapse" data-parent="#MainMenu">Investment Document Sets</a>
							<a href="#individual_applicants" class="list-group-item list-group-item-menu" data-toggle="collapse" data-parent="#MainMenu">Individual Applicants</a>
							<a href="#offers_to_commit" class="list-group-item list-group-item-menu" data-toggle="collapse" data-parent="#MainMenu">Offers To Commit</a>
						</div>
					</div>
				</div>
				<div class="col-md-10">
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" data-backdrop="static">Add Person</button>
					<h3> People </h3>
					<div class="row">
						<div class="col-md-3">
							<input class="form-control col-md-4" type="text" placeholder="search by keyword"/>
						</div>
						<div class="col-md-3">
							<input class="btn btn-info col-md-3" value="Search" />
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="text-right" colspan="3">
										<ul class="pagination">
											<li ng-class="{disabled: currentPage == 0}"> <a href="javascript:;" ng-click="prevPage()">« Prev</a> </li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li ng-class="{disabled: currentPage == pagedItems.length - 1}"> <a href="javascript:;" ng-click="nextPage()">Next »</a> </li>
										</ul>
									</th>
								</tr>
								<tr>
									<th class="col-md-4">Certificate Name</th>
									<th class="col-md-4">Preferred Name</th>
									<th class="col-md-3">Person Details</th>
								</tr>
							</thead>
							<tbody>
								<tr ng-repeat="row in view.rows">
									<td>{{row.a}}</td>
									<td>{{row.b}}</td>
									<td><a href="#">view</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<div id="myModal" class="modal fade" role="dialog" draggable="">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Add New Client</h4>
					</div>
					<div class="modal-body">
						<div class="container">
							<div class="col-sm-3">
								<ul class="nav nav-stacked">
									<li><a href="#/person"><i class="glyphicon glyphicon-chevron-right"></i> Person</a></li>
									<li><a href="#/companies"><i class="glyphicon glyphicon-chevron-right"></i> Companies</a></li>
									<li><a href="#/trusts"><i class="glyphicon glyphicon-chevron-right"></i> Trusts</a></li>
									<li><a href="#/partnerships"><i class="glyphicon glyphicon-chevron-right"></i> Partnerships</a></li>
									<li><a href="#/addresses"><i class="glyphicon glyphicon-chevron-right"></i> Addresses</a></li>
								</ul>
								<button class="btn btn-info form-control" ng-click="getJSON()">Save and Close</button>
							</div>
							<div class="col-sm-9" ng-view></div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</body>
	
	<script src="libs/angular/angular.min.js"></script>
	<script src="libs/jquery-2.1.4.min.js"></script>
	<script src="libs/angular/angular-route.min.js"></script>
	<script src="libs/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
	
	<script src="app/app.js"></script>
	<script src="controllers/MainCtrl.js"></script>
	<script src="controllers/PersonCtrl.js"></script>
	<script src="controllers/CompaniesCtrl.js"></script>
	<script src="controllers/PartnershipsCtrl.js"></script>
	<script src="controllers/TrustsCtrl.js"></script>
	<script src="controllers/AddressesCtrl.js"></script>
</html>

