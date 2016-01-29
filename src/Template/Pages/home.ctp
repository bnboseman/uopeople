<div ng-controller="questionsController" ng-cloak>
	<select ng-model="selected_class" class="form-control">
	<option ng-repeat="class in classes" value="{{class.id}}">{{class.name}}</option>
	</select>
 
    <input ng-model="search" class="form-control">
 
    <div dir-paginate="question in questions | filter: search |  itemsPerPage: 10">
    <p><strong>{{question.question}}</strong><br /> {{ question.answer}} </p>
    
   
    </div>
    <dir-pagination-controls></dir-pagination-controls>
</div>