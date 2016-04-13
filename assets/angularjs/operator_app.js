   var app = angular.module('operator_app', ["bw.paging"]);
   app.controller('operator_Ctrl', function($scope, $http, $log) {

       $scope.data_show        = false;
       $scope.limit_setter_val = 5;
       $scope.prev_btn         = true;
       $scope.next_btn         = true;
       $scope.currentPage      = 1;
       $scope.set_limit        = 5;

	   $scope.show_save        = false;
       $scope.delete_btn       = true;

       $http.post("index.php/Service/count_table_row/operator")
	             .success(function(response) {
 			     $scope.tot = response;
			   }).error(function(data, status, headers, config) {
				   console.log(data);
			   });
			   
	   $http.post("index.php/Service/get_one/",{
				   "table": "center",
				   "column": "center_city"
			   }).success(function(response) {
			     console.log("responWe",response);
				   $scope.city = response;
			   }).error(function(data, status, headers, config) {
				   console.log(data);
			   });
	   
       $scope.changedValue = function() {
           $http.post("index.php/Service/get_where_all", {
               "table" : "center",
               "column"    : "center_location",
               "whr_column": "`center_city`='" + $scope.citySelected.center_city + "'"
           }).success(function(response) {
			     console.log("responWe",response);
               $scope.location = response;
           }).error(function(data, status, headers, config) {
               console.log(data);
           });
       }
       $scope.changedlocation = function() {
           $http.post("index.php/Service/get_where_all", {
               "table": "center",
               "column": "center_name",
               "whr_column": "`center_location`='" + $scope.locationSelected.center_location + "'"
           }).success(function(response) {
		    console.log(response);
               $scope.name = response;
           }).error(function(data, status, headers, config) {
               console.log(data);
           });
       }
       $scope.changedname = function() {
           $http.post("index.php/Service/get_where_all", {
               "table": "center",
               "column": "id",
               "whr_column": "`center_city`='" + $scope.citySelected.center_city + "' and `center_location`='" + $scope.locationSelected.center_location + "' and `center_name`='" + $scope.nameSelected.center_name + "'"
           }).success(function(response) {
  			     console.log("responWe",response);
               $scope.c_id = response[0].id;
           }).error(function(data, status, headers, config) {
               console.log(data);
           });
       }

	   $scope.show = function() {
           $scope.set_limit = $scope.limit_setter_val * ($scope.currentPage - 1);
           $http.post("index.php/Service/table_data/operator/id", {
               'limit': $scope.limit_setter_val,
               'offset': $scope.set_limit
           }).success(function(response) { //console.log("response",response);
               $scope.names = response;
               $scope.entries = response;
               $scope.no_entries = $scope.entries.length;
               $scope.entryLimit = $scope.limit_setter_val;
               x_ans = $scope.tot / $scope.limit_setter_val;
               y_ans = parseInt(x_ans);
               if (y_ans < x_ans) {
                   $scope.pages = parseInt(y_ans + 1);
               } else {
                   $scope.pages = parseInt(x_ans);
               }
           });
       }
       $scope.center_edit = function(index) {
           $scope.update_center_btn = true;
           $scope.delete_btn = false;
           $http.post('index.php/Service/edit_data/operator/id', {
               'id': index
           }).success(function(data, status, headers, config) {
               //   console.log("data",data);	
               $scope.c_input_id = data[0]["c_id"];
               $scope.email = data[0]["email"];
               $scope.id = data[0]["id"];
               $scope.name_input = data[0]["name"];
               $scope.password = data[0]["password"];
               $scope.passwordconfirm = data[0]["password"];
               $scope.phn = data[0]["phn"];
               $scope.profile = data[0]["profile"];

           }).error(function(data, status, headers, config) {
               console.log(data);
           });
       }
       $scope.update_center = function() {
           if ($("#basicvalidations").parsley('validate')) {
               $http.post('index.php/Service/update_data/operator/id', {
                       'c_id': $scope.c_input_id,
                       'email': $scope.email,
                       'id': $scope.id,
                       'name': $scope.name_input,
                       'password': $scope.password,
                       'contact_no': $scope.contact_no,
                       'phn': $scope.phn,
                       'profile': $scope.profile
                   })
                   .success(function(data, status, headers, config) {

                       alert("Product has been Updated Successfully");
                       $scope.show();
                       $scope.clear_me();
                   })
                   .error(function(data, status, headers, config) {
                       console.log(data);
                   });
           } else {
               alert("fill all details");
           }

       }
       $scope.center_delete = function(index) {
           var x = confirm("Are you sure to delete the selected product");
           if (x) {
               $http.post('index.php/Service/delete_data/operator/id', {
                       'id': index
                   })
                   .success(function(data, status, headers, config) {
                       $scope.show();
                       $scope.clear_me();
                       alert("Product has been deleted Successfully");
                   }).error(function(data, status, headers, config) {
                       console.error(data);
                   });
           } else {

           }
       }
       $scope.change_me = function() {
           $scope.update_center_btn = false;
           $scope.clear_me();
       }
       $scope.clear_me = function() {
           $scope.delete_btn = true;
           $scope.c_input_id = "";
           $scope.email = "";
           $scope.id = "";
           $scope.name_input = "";
           $scope.password = "";
           $scope.passwordconfirm = "";
           $scope.phn = "";
           $scope.profile = "";
       }
       $scope.save = function() {
           $http.post("index.php/Service/save_data/operator", {
               "c_id": $scope.c_id,
               "name": $scope.fullname,
               "email": $scope.email,
               "password": $scope.password,
               "phn": $scope.phn,
               "profile": $scope.profile
           }).success(function(response) {
               alert(response.msg);
               location.reload();
           }).error(function(data, status, headers, config) {
               console.error(data);
           });
       }
       $scope.save_me = function() {
           $scope.show_save = true;
       }
       $scope.DoCtrlPagingAct = function(text, page, pageSize, total) {
           $log.info({
               text: text,
               page: page,
               pageSize: pageSize,
               total: total
           });
       };
   });