var app = angular.module("slick-app", ["slick"]);

app.controller('appController', function($scope, $timeout, $http){
  
  $scope.horizontal_items = [];
  $scope.vertical_items = [];
  $scope.results = [];

  $timeout(function(){
	$http.get('../services/web/app_dev.php/carousel').success(function(data) {
		$scope.results = data.result;
			
		$scope.horizontal_items = $scope.results.horizontalCarousel;
		$scope.vertical_items = $scope.results.verticalCarousel;
			
		$scope.dataLoaded = true;
		console.log("request success.");
		
	}).error(function (data) {
		console.log("request failed.");
	});
  }, 0);
	
});
