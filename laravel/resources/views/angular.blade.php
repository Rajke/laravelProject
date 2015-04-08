@extends('app')
@section('content')
        <h2>Lab</h2>
        
        <div ng-controller="docController as docCtrl" ng-app="docApp">
          Search form: <input type="text" ng-model="queryTop"/>
            <li ng-repeat="doc in docCtrl.res | filter:docCtrl.noResult | filter:queryTop ">
            <hr>
       <span > @{{doc.text}}</span>
            [ <a href="" ng-click="docCtrl.edit(doc)">Enter results</a> ]
            </li>
            <hr>
          
    <form ng-submit="docCtrl.addDoc()">
        <input type="text" ng-model="docCtrl.docText"  size="30"
               placeholder="add new res here">
        <input class="btn-primary" type="submit" value="add">
      </form>
  <br>
      
      <form ng-hide="docCtrl.myVar">
      <h3 >Finished exams:</h3>
      Search form: <input type="text" ng-model="query"/>
    <ul>
      <li ng-repeat="doc in docCtrl.res |filter:docCtrl.yesResult | filter:query" >
      <hr>
      <span >@{{doc.text}}</span> [ <a href="" ng-click="docCtrl.edit(doc)">Edit</a> ] [ <a href="" ng-click="docCtrl.del(doc)">Delete</a> ]<br>
      <label for="">Result: </label>@{{doc.result}}<br>      
      </li>


    </ul>
      </form>
        </div>
@endsection


@section('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script src="assets/javascript/doc.js"></script>
@endsection