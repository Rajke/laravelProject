// var app = angular.module('myApp', []);
// app.controller('itemCtrl', function($scope, $http) {
//   $http.get("/json")
//   .success(function (response) {$scope.titles = response;});
// });

angular.module('myApp', [])
    .controller('AjaxAngularController', function($http){
        var angCtrl = this;
        angCtrl.newItem = {
        	title: "",
        	description: "",
        	user_id: window._laravel_token,
        	created_at: ""	
        };
            $http.get('/json').
                success(function(data){
                    angCtrl.items = data;
                    console.log(data);
                }).
                error(function(){                });
            angCtrl.delete = function(item){
            		angCtrl.index = angCtrl.items.indexOf(item);
                $http.delete('/ajaxAngular-Delete/'+item.id, item).success(function(data){
			    	angCtrl.items.splice(angCtrl.index, 1);
                });
            };
			angCtrl.show = function(){
				angCtrl.showAddForm = true;
			}
			angCtrl.hide = function(){
				angCtrl.showAddForm = false;
			}

       		angCtrl.addNew = function(){
			console.log(angCtrl.newItem)
			$http.post('/ajaxAngular-Post', angCtrl.newItem).
				success(function(data){
					angCtrl.items.push(data);
					angCtrl.newItem = {
			        	title: '',
			        	description: '',
			        	user_id: window._laravel_token,
			        	created_at: ""	
			        };

					console.log(data);
				});
			}

			angCtrl.showRow = function(item){
				item.show = true;
				angCtrl.title = item.title;
				angCtrl.description = item.description;
			}
			angCtrl.cancel = function(item){

				item.title = angCtrl.title;
				item.description = angCtrl.description;
				item.show = false;
			}
			angCtrl.update = function(item){
				console.log(item.id);			
				$http.put('/ajaxAngular-Put/'+item.id, item).success(function(data){
					
					console.log(data);
					item.show = false;
								     
				})
			}

    }) 


