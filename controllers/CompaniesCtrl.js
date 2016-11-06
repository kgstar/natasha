app.controller('CompaniesCtrl', function ($scope, $rootScope) {
	$scope.data = $scope.json.companies;
	$scope.elem = {
		
	};
	
	$scope.addAccordion = function () {
		if (!$scope.companies_form.company_name.$valid) {
			$('input[name=company_name]').addClass('err').on('keydown', function () { $(this).removeClass('err'); });
			return;
		}
		$scope.data[$scope.data.length] = {
			id 						: $scope.data.length,
			name 					: $scope.elem.name,
			acn 					: $scope.elem.acn,
			abn 					: $scope.elem.abn,
			office_holders: [], 
			phone_numbers	: [], 
			emails				: []
		};
		$scope.elem.name = $scope.elem.acn = $scope.elem.abn = '';
	};
	
	$scope.addOfficeHolder = function (ind) {
		$scope.data[ind].office_holders[$scope.data[ind].office_holders.length] = {
			person		: 0, 
			type			: 0, 
			signatory	: false
		};
	};
	
	$scope.addPhoneNumber = function (ind) {
		$scope.data[ind].phone_numbers[$scope.data[ind].phone_numbers.length] = {
			phone_number	: '', 
			description		: '',
			phone_default	: false
		};
	};
	
	$scope.addEmailAddress = function (ind) {
		$scope.data[ind].emails[$scope.data[ind].emails.length] = {
			email_address	: '', 
			email_default	: false
		};
	};
});