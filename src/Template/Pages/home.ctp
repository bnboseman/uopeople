<div ng-controller="questionsController" ng-cloak>
	<div class="col-xs-6"><select ng-model="selected_class" class="form-control">
	<option ng-repeat="class in classes" value="{{class.id}}">{{class.name}}</option>
	</select>
	</div>
 
    <div class="col-xs-6"><input ng-model="search" class="form-control"></div>
    <div class="clearfix"></div>
    <div class="col-md-12" dir-paginate="question in questions | filter:filterBySelection |  itemsPerPage: 5">
    <div><strong ng-bind-html="renderHtml(question.question)"></strong> </div>
    <div class="bg-success col-md-12"><p> {{ question.answer }}</p></div>
   
    </div>
    <dir-pagination-controls></dir-pagination-controls>
</div>
<?php $this->set('Title', 'Home Page');?>