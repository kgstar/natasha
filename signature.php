<!DOCTYPE html>
<html lang="en" ng-app="myApp">
	<head>
		<meta charset="utf-8">
		<title>People</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="libs/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>

	<body ng-controller="SignatureCtrl">
		<!--<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body"> -->
						<div class="container">
							<div class="col-sm-3">
								<ul class="nav nav-stacked">
									<li ng-repeat="d in data" ng-click="selectPackage(d.package_id);">
										<a href="#"><i class="glyphicon glyphicon-chevron-right"></i> {{d.package_name}}</a>
									</li>
								</ul>
								<button class="btn btn-info form-control" ng-click="getJSON()">Save</button>
							</div>
							<div class="col-sm-9">
								<div class="page-header">
									<h4>Package Settings</h4>
								</div>
								<div class="row-in-form">
									<span class="h4">Signature Method : </span>
									<label class="radio-inline"><input type="radio" ng-model="view.signature_method" value="digital" checked />Digital</label>
									<label class="radio-inline"><input type="radio" ng-model="view.signature_method" value="email"/>Email</label>
									<label class="radio-inline"><input type="radio" ng-model="view.signature_method" value="postal"/>Postal</label>
								</div>
								<div class="row-in-form" ng-if="view.signature_method=='digital'">
									<span class="h4">Signer Sequencing : </span>
									<label class="radio-inline"><input type="radio" ng-model="view.signer_sequencing" value="0"/>Yes</label>
									<label class="radio-inline"><input type="radio" ng-model="view.signer_sequencing" value="1"/>No</label>
								</div>
								<div class="row-in-form" ng-if="view.signature_method=='postal'">
									<div class="row">
										<div class="col-md-4"><h4>Delivery Tracking #:</h4></div>
										<div class="col-md-8"><input class="form-control" type="text" ng-model="view.delivery_tracking" /></div>
									</div>
								</div>
								<div class="row-in-form">
									<h4>Subject Line</h4>
									<input class="form-control" type="text" ng-model="view.subject_line" />
								</div>
								<div class="row-in-form">
									<h4>Message</h4>
									<textarea class="form-control" ng-model="view.message" rows="5"></textarea>
								</div>
								<div class="row-in-form">
									<h4>File</h4>
									{{view.package_file}}
								</div>
								<div class="row-in-form">
									<div class="row">
										<div class="col-md-4">
											<h4 class="inline">Package Participants</h4>
										</div>
										<div class="col-md-4">
											<select class="form-control">
												<option>aaa</option>
												<option>bbbb</option>
												<option>ccccc</option>
											</select>
										</div>
										<div class="col-md-4">
											<input class="btn btn-info inline" type="button" ng-click="addParticipant();" value="Add Participant"/>
										</div>
									</div>
								</div>
								<div class="row-in-form">
									<div class="alert alert-success fade in" ng-repeat="p in view.participants" aria-label="close" roll="alert"> 
										{{p.person_seq}} 
										<select ng-model="p.role">
											<option value="signer">Signer</option>
											<option value="cc">CC</option>
										</select>
										<input type="text" ng-model="p.certificate_name" />
										<input type="text" ng-model="p.email_address" />
										<span ng-click="view.participants.splice($index, 1);" class="close">&times;</span>
									</div>
								</div>
								<div>
									<input class="btn btn-info" type="button" value="Create Package" />
								</div>
							</div>
						</div>
					<!-- </div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>-->
	</body>
	
	<script src="libs/angular/angular.min.js"></script>
	<script src="libs/jquery-2.1.4.min.js"></script>
	<script src="libs/angular/angular-route.min.js"></script>
	<script src="libs/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="app/app.js"></script>
	<script src="controllers/MainCtrl.js"></script>
	<script src="controllers/SignatureCtrl.js"></script>
</html>

