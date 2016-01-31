var app = angular.module('uopeople', ['angularUtils.directives.dirPagination']);

app.controller('questionsController', function($http, $scope, $filter, $sce) {
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
    
    $scope.renderHtml = function(html_code)
    {
        return $sce.trustAsHtml(html_code);
    };
});

tinymce.init({
    selector: 'textarea',
    menubar: false,
    plugins: [
              'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
              'searchreplace wordcount visualblocks visualchars code media nonbreaking',
              'table contextmenu directionality emoticons template paste textcolor'
            ],
  });
