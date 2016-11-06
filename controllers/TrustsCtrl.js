app.controller('TrustsCtrl', function ($scope, $rootScope) {
	$scope.data = $scope.json.trusts;
	$scope.elem = {
		
	};
	
	$scope.addAccordion = function () {
		errs = [];
		if (!$scope.trusts_form.trust_name.$valid) {
			errs[errs.length] = 'trust_name'; 
			$('input[name=' + errs[err] + ']').addClass('err').on('keydown', function () { $(this).removeClass('err'); });
		}
		if ($('select[name=trust_type]').val() == '') {
			errs[errs.length] = 'trust_type'; 
			$('select[name=trust_type]').addClass('err').on('change', function () { $(this).removeClass('err'); });
		}
		if (errs.length) return;
		
		$scope.data[$scope.data.length] = {
			id 					: $scope.data.length,
			name 				: $scope.elem.trust_name, 
			trustees 		: [], 
			corporates 	: []
		};
		$scope.elem.trust_name = '';
	};
	
	$scope.addTrustee = function (ind) {
		$scope.data[ind].trustees[$scope.data[ind].trustees.length] = {
			trustee : 1
		};
	};
	
	$scope.addCorporate = function (ind) {
		$scope.data[ind].corporates[$scope.data[ind].corporates.length] = {
			type			: '1', 
			identifier: ''
		};
	};
});