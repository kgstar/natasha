app.controller('MainCtrl', function ($scope, $http) {
	$scope.json = { person: [], companies: [], trusts: [], partnerships: [], addresses: [] };
	$scope.getJSON = function () {
		console.log($scope.json);
		var res = $http.post('../../lib/be.php', $scope.json);
		res.success(function(data, status, headers, config) {
			$scope.message = data;
		});
		res.error(function(data, status, headers, config) {
			alert( "failure message: " + JSON.stringify({data: data}));
		});	
	};
	$scope.showModal = function () {
		
	};
	$scope.view = {
		rows : [
			{a:'AAAAA',b:'BBBBB',c:'CCCCCCCC'},
			{a:'AAAAA',b:'BBBBB',c:'CCCCCCCC'},
			{a:'AAAAA',b:'BBBBB',c:'CCCCCCCC'},
			{a:'AAAAA',b:'BBBBB',c:'CCCCCCCC'},
			{a:'AAAAA',b:'BBBBB',c:'CCCCCCCC'},
			{a:'AAAAA',b:'BBBBB',c:'CCCCCCCC'},
			{a:'AAAAA',b:'BBBBB',c:'CCCCCCCC'},
			{a:'AAAAA',b:'BBBBB',c:'CCCCCCCC'}
		]
	} 
});