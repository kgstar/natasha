app.controller('PersonCtrl', function ($scope, $rootScope) {
	$scope.data = $scope.json.person;
	$scope.elem = {
		phone_number_text : {},
		phone_type_select : {},
		phone_default_radio : {},
		email_address_text : {},
		email_default_radio : {}
	};
	
	$('#date_of_birth').datepicker();
	
	$scope.addAccordion = function () {
		err_elems = [];
		if (!$scope.person_form.first_name.$valid) err_elems[err_elems.length] = 'first_name';
		if (!$scope.person_form.last_name.$valid) err_elems[err_elems.length] = 'last_name';
		if (!$scope.person_form.preferred_name.$valid) err_elems[err_elems.length] = 'preferred_name';
		if (err_elems.length > 0) {
			for (elem in err_elems) {
				$('input[name=' + err_elems[elem] + ']')
				.addClass('err')
				.on('keydown', function () { 
					$(this).removeClass('err'); 
				});
			}
			return;
		}
		
		$scope.data[$scope.data.length] = {
			id 						: $scope.data.length,
			first_name 		: $scope.elem.first_name, 
			middle_name 	: $scope.elem.middle_name, 
			last_name 		: $scope.elem.last_name, 
			full_name 		: $scope.elem.first_name + ($scope.elem.middle_name == '' ? '' : ' ') + ($scope.elem.middle_name ? $scope.elem.middle_name : '') + ' ' + ($scope.elem.last_name ? $scope.elem.last_name : ''), 
			preferred_name: $scope.elem.preferred_name, 
			date_of_birth : $scope.elem.date_of_birth, 
			phone_numbers : [], 
			emails 				: [],
			corporates 		: []
		};
		$scope.elem.first_name = $scope.elem.middle_name = $scope.elem.last_name = $scope.elem.preferred_name = '';
		$scope.elem.date_of_birth = '';
	};
	
	$scope.addPhoneNumber = function (ind) {
		$scope.data[ind].phone_numbers[$scope.data[ind].phone_numbers.length] = {
			phone_number	: '', 
			phone_type		: 'Mobile', 
			phone_default	: 0
		};
	};
	
	$scope.addEmailAddress = function (ind) {
		$scope.data[ind].emails[$scope.data[ind].emails.length] = {
			email_address	: '', 
			email_default	: 0
		};
	};
	
	$scope.addCorporate = function (ind) {
		$scope.data[ind].corporates[$scope.data[ind].corporates.length] = {
			type			: 'ABN', 
			identifier: ''
		};
	};
});