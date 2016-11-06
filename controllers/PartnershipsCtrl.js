app.controller('PartnershipsCtrl', function ($scope, $rootScope) {
	$scope.data = $scope.json.partnerships;
	$scope.elem = { person_select: [] };
	
	$scope.addAccordion = function () {
		if (!$scope.partnerships_form.partnership_name.$valid) {
			$('input[name=partnership_name]').addClass('err').on('keydown', function () { $(this).removeClass('err'); });
			return;
		}
		
		$scope.data[$scope.data.length] = {
			id 					: $scope.data.length,
			name 				: $scope.elem.partnership_name, 
			partners 		: [], 
			corporates 	: []
		};
		$scope.elem.partnership_name = '';
	};
	
	$scope.addPartner = function (ind) {
		$scope.data[ind].partners[$scope.data[ind].partners.length] = {
			name			: $scope.elem.person_select[ind], 
			signatory	: false
		};
	};
	
	$scope.addCorporate = function (ind) {
		$scope.data[ind].corporates[$scope.data[ind].corporates.length] = {
			type			: 1, 
			identifier: ''
		};
	};
});