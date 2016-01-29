var app = angular.module('uopeople', ['angularUtils.directives.dirPagination']);

app.controller('questionsController', function($http, $scope, $filter) {
	$scope.questions = [];
	$scope.classes = [];
	$scope.selected_class = '';
	
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
});