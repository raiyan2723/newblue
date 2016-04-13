var app2 = angular.module('raj_app', ["bw.paging"]);
app2.controller('raj_Ctrl', function($scope, $http ,$log ) 
{
    $http.post("index.php/Service/count_table_row/center" ).success(function (response){ $scope.tot  =  response;	});

	$scope.add_center        = true;
	$scope.update_center_btn = false;
	$scope.limit_setter_val  = 5;
	$scope.prev_btn          = true;
	$scope.next_btn          = true;
	$scope.currentPage 		 = 1;
	$scope.set_limit 		 = 5;
	$scope.delete_btn        = true;

	$scope.show_center = function()
	{
	  $scope.set_limit=$scope.limit_setter_val*($scope.currentPage - 1);
      
	  $http.post("index.php/Service/table_data/center/id",
	  {
		  'limit' : $scope.limit_setter_val,
		  'offset': $scope.set_limit 
	  }
	  ).success(function (response){
		//  console.log(response);
 	 	   $scope.names      = response;
   		   $scope.entries    = response;
   		   $scope.no_entries = $scope.entries.length;
		   $scope.entryLimit = $scope.limit_setter_val;
		   
			  x_ans = $scope.tot / $scope.limit_setter_val ;
			  y_ans = parseInt(x_ans);
			  if( y_ans < x_ans )
			  {
				 $scope.pages = parseInt(y_ans+1);
				 
			  }
			  else
			  {
				 $scope.pages = parseInt(x_ans) ;
			  } 
		  });		
	}
	
	     $scope.center_edit = function(index) {  
		 $scope.update_center_btn = true;
         $scope.add_center = false;
		 $scope.delete_btn = false;
         $http.post('index.php/Service/edit_data/center/id', { 'id': index } ).success(function (data, status, headers, config) {   
               $scope.id          =   data[0]["id"];
               $scope.center_city        =   data[0]["center_city"];
               $scope.center_location    =   data[0]["center_location"];
               $scope.address            =   data[0]["address"];
               $scope.center_name        =   data[0]["center_name"];          
               $scope.contact_no         =   data[0]["contact_no"];          
               $scope.email              =   data[0]["email"];          
               $scope.website            =   data[0]["website"];          
           }).error(function(data, status, headers, config){ alert(data);});
         }
		 $scope.change_me = function()
		 {	 $scope.update_center_btn = false;
			 $scope.add_center    = true; 
			 $scope.clear_me();
		 }
		 $scope.save_center = function()
		 {
			 if($("#basicvalidations").parsley('validate'))
			{
				$http.post("index.php/Service/save_data/center",{
                   'id'                : $scope.id, 
                   'center_city'       : $scope.center_city, 
                   'center_location'   : $scope.center_location,
                   'address'     	   : $scope.address,
                   'center_name'       : $scope.center_name,
                   'contact_no'        : $scope.contact_no,
                   'email'             : $scope.email,
                   'website'       	   : $scope.website
               })
			   .success(function (data, status, headers, config) 
			   {
				  
					alert("Product has been Submitted Successfully");
					
					$scope.show_center();
					$scope.clear_me();
				
         
			  })
			  .error(function(data, status, headers, config)
			  {
					console.log(data);
			  });			

			}
			else
			{
    			alert("fill all details");
			}


			 

		 }
		 $scope.clear_me= function()
		 {
			   $scope.delete_btn   =  true;
			   $scope.id          =   "";
               $scope.center_city        =   "";
               $scope.center_location    =   "";
               $scope.address            =   "";
               $scope.center_name        =   "";          
               $scope.contact_no         =   "";          
               $scope.email         =   "";          
               $scope.website            =   "";
		 }
		 $scope.update_center = function()
		 {
			if($("#basicvalidations").parsley('validate'))
			{
				   $http.post('index.php/Service/update_data/center/id', 
				   {
					   'id'                : $scope.id, 
					   'center_city'       : $scope.center_city, 
					   'center_location'   : $scope.center_location,
					   'address'     	   : $scope.address,
					   'center_name'       : $scope.center_name,
					   'contact_no'        : $scope.contact_no,
					   'email'  		   : $scope.email,
					   'website'       	   : $scope.website
				   }
				 )
			   .success(function (data, status, headers, config) {                 
				 
					  alert("Product has been Updated Successfully");
						$scope.show_center();
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
         $http.post('index.php/Service/delete_data/center/id',{ 'id' : index } )      
           .success(function (data, status, headers, config) {
                 $scope.show_center();
				 $scope.clear_me();
                alert("Product has been deleted Successfully");
           })
         
           .error(function(data, status, headers, config){
              alert(data);
           });
         }
		 else
		  {
         
          }
		 }
		 
	  $scope.DoCtrlPagingAct = function(text, page, pageSize, total) {
        $log.info({
            text    : text,
            page    : page,
            pageSize: pageSize,
            total   : total
        });
       }; 


});