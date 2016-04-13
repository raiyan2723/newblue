   var app = angular.module('index_app',['ui.bootstrap']);

   app.controller('index_Ctrl', function($scope, $http ) 
   {

	$scope.show = function()
						{	  
						  $http.post("index.php/Service/table_data/center/id",
						  {
							  'limit' : "",
							  'offset': ""
						  }).success(function (response){
								//console.log(response);
								//$scope.list_category();
								$scope.test_data   =  response;
						      //  $scope.test_data2  =  JSON.stringify(response);
						   }).error(function(data, status, headers, config){console.log(data); });

    $http.post("index.php/Service/count_row/center",   { column:"center_location" }).success(function (response)
	{ 
 	 $("#center").data("value",response);	
	 $scope.center=response;	
	// console.log(response);	
	})
	.error(function(data, status, headers, config){ console.log(data);});	
    $http.post("index.php/Service/count_row/operator", { column:"email"           }).success(function (response)
	{
 	  $scope.operator  = response;
  //     console.log(response);
	}
	).error(function(data, status, headers, config){ console.log(data);});	   
    $http.post("index.php/Service/count_row/login",    { column:"email"           }).success(function (response)
	{ 
	$scope.user  = response;	
	// console.log(response);
	})
	.error(function(data, status, headers, config){ console.log(data);});	   
						}		
   });
  
    app.filter('unique', function() 
	{
	   return function(collection, keyname) 
		    {
			  var output = [], 
				  keys   = [];

				  angular.forEach(collection, function(item) 
					  {
						  var key = item[keyname];
						  if(keys.indexOf(key) === -1) 
						  {
							  keys.push(key);
							  output.push(item);
						  }
					  });

			  return output;
            };
    }); 