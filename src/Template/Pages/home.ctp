<div ng-controller="questionsController" ng-cloak>
	<div class="col-xs-6"><select ng-model="selected_class" class="form-control">
	<option ng-repeat="class in classes" value="{{class.id}}">{{class.name}}</option>
	</select>
	</div>
 
    <div class="col-xs-6"><input ng-model="search" class="form-control"></div>
    <div class="clearfix"></div>
    <div dir-paginate="question in questions | filter:filterBySelection|  itemsPerPage: 5">
    <p><strong>{{question.question}}</strong><br /> {{ question.answer }} </p>
    
   
    </div>
    <dir-pagination-controls></dir-pagination-controls>
</div>