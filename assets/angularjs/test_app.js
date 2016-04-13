   var app = angular.module('test_app',['ui.bootstrap']);

   app.controller('test_Ctrl', function($scope, $http ) 
   {
    $scope.inputs      = [];
    $scope.edit_data   = [];
    $scope.submit_test = true;
    $scope.Edit_me     = false;
    $scope.create_me   = true;


   $scope.list_category = function (index,id)
						{
			             $http.post("index.php/Service/get_one" ,
						            {
										 "table"  : "test" ,
										 "column" : "category" 
									})
									.success(function (response)
									{
										//console.log(response);
										$scope.category_data = response;
									})
									.error(function(data, status, headers, config)
									{ console.log(data);});				
						}	
   $scope.test_update = function (index,id)
						{
						   $http.post('index.php/Service/update_all/test', 
									   {
										   'id'          : "id", 
										   'data'        : $scope.edit_data 
									   }
									 )
								   .success(function (data, status, headers, config) {                 
									 
										  alert("Product has been Updated Successfully");
											$scope.show();
										//	console.log(data);
											$scope.clear_all();
								   })
								   .error(function(data, status, headers, config){
									   console.log(data);
								   });									

						}		
    $scope.edit_remove_me = function (index,id) 
							{
							 var x = confirm("Are you sure to delete the selected product");
							 if(x)
								{
								   $http.post('index.php/Service/delete_data/test/id',{ 'id' : id } )      
								   .success(function (data, status, headers, config) {
										 $scope.show();
										 $scope.edit_data.splice(index,1);										 
										alert("Product has been deleted Successfully");
								   }).error(function(data, status, headers, config){
									  console.error(data);
								   });
								}
								else
								{
								 
								}			
							};		
		
    $scope.create_btn = function () 
							{
								$scope.Edit_me   = false;	
								$scope.create_me = true;
							}

    $scope.edit_btn = function (index) 
							{
								$scope.Edit_me  = true;	
								$scope.create_me= false;
								$http.post('index.php/Service/edit_data/test/category', { 'id': index } ).success(function (data, status, headers, config) { 
									//console.log("data",data);	
									   $scope.edit_input_category  = index;
									   $scope.edit_data            = data;          
								 
								   }).error(function(data, status, headers, config){ console.log(data);});					
							}
		
    $scope.delete_btn = function (index) 
							{

								 var x = confirm("Are you sure to delete the selected product");
								 if(x)
								 {
								 $http.post('index.php/Service/delete_data/test/category',{ 'id' : index } )      
								   .success(function (data, status, headers, config) {
										 $scope.show();
										 $scope.clear_me();
										alert("Product has been deleted Successfully");
								   }).error(function(data, status, headers, config){
									  console.error(data);
								   });
								 }
								 else
								  {

								  }			
								
							}
		
	$scope.add       = function () 
							{
							  $scope.inputs.push({});
							};		
    $scope.remove_me = function (index) 
							{
							   $scope.inputs.splice(index,1);
							};

    $scope.clear_all = function ()
							{
							   $scope.inputs              = [];
							   $scope.edit_data           = [];
							   $scope.input_category      = "";
							   $scope.edit_input_category = "";
							};
     	
	$scope.save_test = function()
						 {
							$scope.data = []; 
							for( i=0; i< $scope.inputs.length; i++)
							{  
							   $scope.data.push ( 
							                      {
													  'category'         :$scope.input_category,
													  'test_name'        :$scope.inputs[i].test_name,
													  'test_unit'        :$scope.inputs[i].test_unit,
													  'test_normal_range':$scope.inputs[i].test_normal_range
												  }
												);	
							}
						 
							$http.post("index.php/Service/insert_all/test",{'data' : $scope.data })
							   .success(function (data, status, headers, config) 
							   {
								 alert("Product has been Submitted Successfully");
								 $scope.show();
								 $scope.clear_all();
							   }).error(function(data, status, headers, config){console.log(data); }); 		 

						 }
	$scope.show = function()
						{	  
						  $http.post("index.php/Service/table_data/test/id",
						  {
							  'limit' : "",
							  'offset': ""
						  }).success(function (response){
								//console.log(response);
								$scope.list_category();
								$scope.test_data   =  response;
							  //  $scope.test_data2  =  JSON.stringify(response);
							  });			
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