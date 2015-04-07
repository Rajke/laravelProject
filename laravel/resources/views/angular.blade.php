@extends('app')
@section('content')
        <h2>Lab</h2>
        <div ng-controller="docController as docCtrl" ng-app="docApp">
            <li ng-repeat="doc in docCtrl.res">
			 <span > @{{doc.text}}</span>
            [ <a href="" ng-click="docCtrl.go(doc)">Enter results</a> ]
            </li>
          </ul>
  	<form ng-submit="docCtrl.addDoc()">
        <input type="text" ng-model="docCtrl.docText"  size="30"
               placeholder="add new res here">
        <input class="btn-primary" type="submit" value="add">
      </form>
	<br>
      <label for="">Finished exams</label>
      <form action="">
		<ul>
			<li ng-repeat="doc in docCtrl.fres" >
			<span >@{{doc.text}}</span> [ <a href="" ng-click="docCtrl.edit(doc)">Edit</a> ] [ <a href="" ng-click="docCtrl.del(doc)">Delete</a> ]<br>
			<label for="">Result: </label>@{{doc.results}}<br>			
			</li>

		</ul>
      </form>
        </div>
@endsection

@section('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script src="assets/javascript/doc.js"></script>
@endsection