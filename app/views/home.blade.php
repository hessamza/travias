{{--
@section('main-area')

	<div ng-controller="SearchCtrl">
	<form class="well form-search">
		<label>Search:</label>
		<input type="text" ng-model="keywords" class="input-medium search-query" placeholder="Keywords...">
		<button type="submit" class="btn" ng-click="search()">Search</button>
		<p class="help-block">Try for example: "php" or "angularjs" or "asdfg"</p>
    </form>
<pre ng-model="result">
{{result}}
</pre>
   </div>--}}



<!DOCTYPE html >
<html ng-app>
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta content="" name="description" />
    <meta content="" name="author" />

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<style>
small{color:red;font-size=.8em;}
</style>
    <title>angular</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script><!-- load jquery -->
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular.min.js"></script>
<script src="/js/main.js"></script>


</head>

<body ng-controller="TodosController">
<h1>
todo


<small ng-if=remaining()>(@{{ remaining() }}remaining)</small>
</h1>
<input type="text" placeholder="search" ng-model="global.search">
<u1>

<li ng-repeat="todo in todos | filter:global.search">
<input type="checkbox" ng-model="todo.completed">
@{{ todo.body }}
</li>

</u1>

</body>
</html>

