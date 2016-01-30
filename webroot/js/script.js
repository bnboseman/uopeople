var app = angular.module('uopeople', ['angularUtils.directives.dirPagination']);

app.controller('questionsController', function($http, $scope, $filter) {
	$scope.questions = [];
	$scope.classes = [];
	$scope.search = '';
	$scope.selected_class = '2203';
	
	$http({
		'url' : '/questions'
	}).success(function(data) {
		$scope.questions = data;
	});
	
	$http({
		'url' : '/areas'
	}).success(function(data) {
		$scope.classes = data;
	});
	
	$scope.filterBySelection = function(question, $filter) {
		if($scope.search.length > 0) {
			return question.area_id == $scope.selected_class && question.question.toLowerCase().indexOf($scope.search.toLowerCase()) != -1;
		}  else {
			return question.area_id == $scope.selected_class
		}
    };
});

