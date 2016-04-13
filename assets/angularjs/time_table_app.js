   var app = angular.module('operator_app', ["bw.paging"]);
   app.controller('operator_Ctrl', function($scope, $http ,$log ) 
   {
    $scope.inputs            = [];	   
	$scope.data_show         = false;	
	$scope.limit_setter_val  = 5;
	$scope.prev_btn          = true;
	$scope.next_btn          = true;
	$scope.currentPage 		 = 1;
	$scope.set_limit 		 = 5;
	
	$scope.show_save         = false;
	$scope.delete_btn        = true;

    $scope.changedValue      = function() { $http.post("index.php/Service/get_where_all",{"table" : "center","column" : "center_location", "whr_column" : "`center_city`='"+$scope.citySelected.center_city+"'" }).success(function (response){$scope.location = response;})       .error(function(data, status, headers, config){ console.log(data);}); }
    $scope.changedlocation   = function() { $http.post("index.php/Service/get_where_all",{"table" : "center","column" : "center_name"    , "whr_column" : "`center_location`='"+$scope.locationSelected.center_location+"'"}).success(function (response){$scope.name = response;}).error(function(data, status, headers, config){ console.log(data);}); }
    $scope.changedname       = function() { $http.post("index.php/Service/get_where_all",{"table" : "center","column" : "id"             , "whr_column" : "`center_city`='"+$scope.citySelected.center_city+"' and `center_location`='"+$scope.locationSelected.center_location+"' and `center_name`='"+$scope.nameSelected.center_name+"'" }).success(function (response) { $scope.input_center_name= $scope.nameSelected.center_name; $scope.input_center_id = response[0].id; $scope.add(); }).error(function(data, status, headers, config){ console.log(data);});}
	
											$http.post("index.php/Service/count_table_row/category_time").success(function (response){ $scope.tot  = response;	}).error(function(data, status, headers, config){ console.log(data);});	   
											$http.post("index.php/Service/get_one"        ,{ "table"  : "center"  ,"column" : "center_city" } ).success(function (response) { $scope.city = response; }).error(function(data, status, headers, config){ console.log(data);});

	$scope.add               = function (){ $scope.inputs.push({});  $scope.list_category(); };
	$scope.add_time          = function (){ $scope.inputs_time.push({}); };

    $scope.remove_me         = function (index) 
								{
								   $scope.inputs.splice(index,1);
								};
	
    $scope.list_category 	 = function (index,id)
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
	$scope.show 			 = function()
								{
								  $scope.set_limit=$scope.limit_setter_val*($scope.currentPage - 1);
								  $http.post("index.php/Service/table_data/category_time/id",
								  {
									  'limit' : $scope.limit_setter_val,
									  'offset': $scope.set_limit 
								  }).success(function (response)
								  {	
								  //console.log("response",response);
									   $scope.names      = response;
									   $scope.entries    = response;
									   $scope.no_entries = $scope.entries.length;
									   $scope.entryLimit = $scope.limit_setter_val;
									   x_ans             = $scope.tot / $scope.limit_setter_val ;
									   y_ans             = parseInt(x_ans);
										  if( y_ans < x_ans )
											   { $scope.pages = parseInt(y_ans+1); }
										  else { $scope.pages = parseInt(x_ans); }  
									  });		
								}	  
    $scope.center_edit       = function(index) 
								 {  
									 $scope.update_center_btn = true;
									 $scope.delete_btn = false;
									 $http.post('index.php/Service/edit_data/category_time/id', { 'id': index } ).success(function (data, status, headers, config) { 
									 //   console.log("data",data);	
										   $scope.edit_id         = data[0]["id"];
										   $scope.edit_center_id  = data[0]["center_id"];
										   $scope.edit_center_name= data[0]["center_name"];
										   $scope.edit_category   = data[0]["category"];
										   $scope.edit_time       = data[0]["time"];          
								 
								   }).error(function(data, status, headers, config){ console.log(data);});
								 }
	$scope.update_center     = function()
								 {
									if($("#basicvalidations").parsley('validate'))
									{
										   $http.post('index.php/Service/update_data/category_time/id', 
										   {
											   'id'          : $scope.edit_id, 
											   'center_id'   : $scope.edit_center_id, 
											   'center_name' : $scope.edit_center_name, 
											   'category'    : $scope.edit_category,
											   'time'     	 : $scope.edit_time
										   }
										 )
									   .success(function (data, status, headers, config) {                 
										 
											  alert("Product has been Updated Successfully");
												$scope.show();
												$scope.clear_me();
									   })
									   .error(function(data, status, headers, config){
										   console.log(data);
									   });									
									}
									else
									{
										alert("fill all details");
									}

								 }
    $scope.center_delete = function(index)
							 {
								 var x = confirm("Are you sure to delete the selected product");
								 if(x){
								 $http.post('index.php/Service/delete_data/category_time/id',
								 {
									 'id' : index 
								 } )      
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
	$scope.change_me 	 = function() { $scope.update_center_btn = false; $scope.clear_me(); }
    
	$scope.clear_me		 = function() 
							{
								$scope.delete_btn       = true;
								$scope.edit_id          = "";
								$scope.edit_center_name = "";
								$scope.edit_center_id   = "";
								$scope.edit_category    = "";
								$scope.edit_time        = "";
                            }
 
   	$scope.save 		 = function()
							{
								$scope.data = []; 
								for( i=0; i< $scope.inputs.length; i++)
								{  
								   $scope.data.push ({'center_id'  :$scope.input_center_id,'center_name':$scope.input_center_name, 'category'   :$scope.inputs[i].category, 'time'       :$scope.inputs[i].time });	
								}
							
								$http.post("index.php/Service/insert_all/category_time",{ 'data'     	 : $scope.data }).success(function (response)
								{
   							       console.log("response",response);
							       //location.reload();
							       $scope.show();
							       $scope.inputs = [];
							       $scope.clear_me();
								   $scope.show_save = false;
								   $('#opt01').attr('checked', false);
							   }).error(function(data, status, headers, config){ console.error(data);});
							}
   $scope.save_me 		  = function(){$scope.show_save=true;}
   
   $scope.DoCtrlPagingAct = function(text, page, pageSize, total) { $log.info({ text : text, page : page, pageSize: pageSize, total : total }); };    
   });