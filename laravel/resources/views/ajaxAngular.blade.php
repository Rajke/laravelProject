@extends('app')
@section('content')

<div ng-app="myApp">
<div ng-controller="AjaxAngularController as angCtrl">
	<table style="width:100%" class="table-striped table-hover table" >

		            <th>Title</th>
		            <th>Description</th>
		            <th>Time of creation</th>
		            </tr>
							<tr ng-repeat="item in angCtrl.items" ng-dblclick="angCtrl.showRow(item)">
                               <td><input type="text" ng-model="item.title"  ng-if="item.show" ><span ng-if="!item.show"  >@{{ item.title }}</span></td>
                               <td><input type="text" ng-model="item.description" ng-if="item.show"><span ng-if="!item.show">@{{ item.description}}</span></td>
                               <td>@{{ item.created_at }}</td>
                               <td><button class="btn btn-success" ng-click="angCtrl.update(item)" ng-if="item.show">Update</button></td>
                               <td><button class="btn btn-default" ng-click="angCtrl.delete(item)">Obrisi</button></td>
                           </tr> 
                           </table>
		


			<button ng-click="angCtrl.show()" class="btn btn-primary">Add New</button>
		        <div ng-if="angCtrl.showAddForm">
			       <form ng-submit="angCtrl.addNew()">
				       <div class="form-group col-md-3">
					       <label> Title: </label>
					       <input type="text" class="form-control" ng-model="angCtrl.newItem.title" required>
					       <label> Description: </label>
					       <textarea class="form-control" ng-model="angCtrl.newItem.description" required></textarea><br>
					       <button class="btn btn-primary form" type="submit">Submit</button>
					       <button class="btn btn-danger form" type="reset">Reset</button>
					       <button ng-click="angCtrl.hide()" class="btn btn-default">Hide</button>
				       </div>
			       </form>
		        </div>
					<!-- <form ng-submit="angCtrl.addNew()">
					<label> Title </label>
					<input type="text" size="30" ng-model="angCtrl.newItem.title" class="form-control" required></input>
					<label> Description </label> <textarea class="form-control" ng-model="angCtrl.newItem.description" required></textarea>
					<button type="submit" class="btn btn-primary">Submit</button>
					</form> -->

</div>
</div>
@endsection



@section('scripts')
 	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.js"></script>
    <script src="assets/javascript/aAng.js"></script>
    <script type="text/javascript">
       window._laravel_token = "{{{ csrf_token() }}}";
   </script> 
@endsection