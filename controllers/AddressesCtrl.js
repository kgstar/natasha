app.controller('AddressesCtrl', function ($scope, $rootScope) {
	$scope.data = $scope.json.addresses;
	$scope.elem = { person_select: [] };
	
	$scope.addAccordion = function () {
		errs = [];
		if (!$scope.addresses_form.address_prefix.$valid) errs[errs.length] = 'address_prefix';
		if (!$scope.addresses_form.street.$valid) errs[errs.length] = 'street';
		if (!$scope.addresses_form.street_name.$valid) errs[errs.length] = 'street_name';
		if (!$scope.addresses_form.suburb.$valid) errs[errs.length] = 'suburb';
		if (!$scope.addresses_form.post_code.$valid) errs[errs.length] = 'post_code';
		if ($('select[name=state_territory]').val() == '') {
			errs[errs.length] = 'state_territory';
			$('select[name=state_territory]').addClass('err').on('change', function () { $(this).removeClass('err'); });
		}
		if (errs.length) {
			for (err in errs) {
				$('input[name='+errs[err]+']').addClass('err').on('keydown', function () { $(this).removeClass('err'); });
			}
			return;
		}
		
		if ($scope.elem.address_prefix == '' || !$scope.elem.address_prefix) return;
		$scope.data[$scope.data.length] = {
			id 							: $scope.data.length,
			address_prefix 	: $scope.elem.address_prefix, 
			street 					: $scope.elem.street, 
			street_name 		: $scope.elem.street_name, 
			suburb 					: $scope.elem.suburb, 
			post_code 			: $scope.elem.post_code, 
			state_territory : $scope.elem.state_territory, 
			addresses				: []
		};
		$scope.elem.address_prefix = '';
		$scope.elem.street = '';
		$scope.elem.street_name = '';
		$scope.elem.suburb = '';
		$scope.elem.post_code = '';
		$scope.elem.state_territory = '';
	};
	
	$scope.addLinkAddress = function (ind) {
		$scope.data[ind].addresses[$scope.data[ind].addresses.length] = {
			person					: $scope.elem.person_select[ind],
			link_address 		: 1,
			default_address	: 0
		};
	};
});