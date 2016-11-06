app.controller('SignatureCtrl', function ($scope, $rootScope) {
	$scope.view = {}; //$scope.json.signatures;
	$scope.data = [{
		package_id				: 'package_1',
		package_name			: 'Signature Package1',
		signature_method	: 'digital', 
		delivery_tracking	: 'delivery_tracking1', 
		signer_sequencing	: 0, 
		subject_line			: 'subject line 1', 
		message						: 'message1', 
		package_file			: 'file1', 
		participants			: [{
			person_seq			: 'person1', 
			role						: 'signer', 
			certificate_name: 'AA', 
			email_address		: 'aaa@aa.aa'
		}, {
			person_seq			: 'person2', 
			role						: 'cc', 
			certificate_name: 'BBB', 
			email_address		: 'bbb@bb.bb'
		}]
	},{
		package_id				: 'package_2',
		package_name			: 'Signature Package2',
		signature_method	: 'postal', 
		delivery_tracking	: 'delivery_tracking2', 
		signer_sequencing	: 1, 
		subject_line			: 'subject line 3', 
		message						: 'message3', 
		package_file			: 'file3', 
		participants			: [{
			person_seq			: 'person3', 
			role						: 'signer', 
			certificate_name: 'AA', 
			email_address		: 'ccccc@aa.aa'
		}, {
			person_seq			: 'person4', 
			role						: 'cc', 
			certificate_name: 'DDDeeddd', 
			email_address		: 'dddddd@bb.bb'
		}]
	}];

	$scope.elem = {
		flag: 'digital'
	};
	
	$scope.selectPackage = function (packageId) {
		for (d in $scope.data) {
			if ($scope.data[d].package_id == packageId) {
				$scope.view = $scope.data[d];
				$scope.view.data_ind = d;
				break;
			}
		}
	};
	$scope.selectPackage('package_1');
	
	$scope.addParticipant = function () {
		if (!$scope.view.data_ind) return;
		$scope.data[$scope.view.data_ind].participants[$scope.data[$scope.view.data_ind].participants.length] = {
			person_seq			: 'seq', 
			role						: 'signer', 
			certificate_name: '', 
			email_address		: ''
		};
	};
	
	$scope.getJSON = function () {
		console.log($scope.data);
	};
});