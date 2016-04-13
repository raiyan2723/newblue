var app2 = angular.module('user_app', ["bw.paging"]);
    app2.directive('fileModel', ['$parse', function ($parse) {
            return {
               restrict: 'A',
               link: function(scope, element, attrs) {
                  var model = $parse(attrs.fileModel);
                  var modelSetter = model.assign;
                  
                  element.bind('change', function(){
                     scope.$apply(function(){
                        modelSetter(scope, element[0].files[0]);
                     });
                  });
               }
            };
         }]);



app2.controller('user_Ctrl', function($scope, $http, $log) {
    $http.post("index.php/Service/count_table_row/login").success(function(response) {
        $scope.tot = response;
    });

    $scope.add_center        = true;
    $scope.update_center_btn = false;
    $scope.limit_setter_val  = 5;
    $scope.prev_btn          = true;
    $scope.next_btn          = true;
    $scope.currentPage       = 1;
    $scope.set_limit         = 5;
    $scope.delete_btn        = true;

    $scope.show_center   = function() {
        $scope.set_limit = $scope.limit_setter_val * ($scope.currentPage - 1);

        $http.post("index.php/Service/table_data/login/id", {
            'limit': $scope.limit_setter_val,
            'offset': $scope.set_limit
        }).success(function(response) {
            //  console.log(response);
            $scope.names      = response;
            $scope.entries    = response;
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
        $scope.add_center = false;
        $scope.delete_btn = false;
        $http.post('index.php/Service/edit_data/login/id', {
            'id': index
        }).success(function(data, status, headers, config) {

            console.log("data", data);

            $scope.id                   = data[0]["id"];
            $scope.first_name           = data[0]["first_name"];
            $scope.last_name            = data[0]["last_name"];
            $scope.email                = data[0]["email"];
            $scope.address              = data[0]["address"];
            $scope.contact              = data[0]["contact"];
            $scope.m_f                  = data[0]["m_f"];
            $scope.refrance_dr          = data[0]["refrance_dr"];
            $scope.profession           = data[0]["profession"];
            $scope.office_address       = data[0]["office_address"];
            $scope.account_status       = data[0]["account_status"];
            $scope.date_of_deactivation = data[0]["date_of_deactivation"];
            $scope.about                = data[0]["about"];
            $scope.dob                  = data[0]["dob"];
        }).error(function(data, status, headers, config) {
            alert(data);
        });
    }
    $scope.change_me = function() {
        $scope.update_center_btn = false;
        $scope.add_center        = true;
        $scope.clear_me();
    }
    $scope.save_center = function() {
        if ($("#basicvalidations").parsley('validate')) {
            $http.post("index.php/Service/save_data/login", {
                    "id"                  : $scope.id,
                    "first_name"          : $scope.first_name,
                    "last_name"           : $scope.last_name,
                    "email"               : $scope.email,
                    "address"             : $scope.address,
                    "contact"             : $scope.contact,
                    "m_f"                 : $scope.m_f,
                    "refrance_dr"         : $scope.refrance_dr,
                    "profession"          : $scope.profession,
                    "office_address"      : $scope.office_address,
                    "account_status"      : $scope.account_status,
                    "date_of_deactivation": $scope.date_of_deactivation,
                    "about"               : $scope.about,
                    "dob"                 : $scope.dob
                })
                .success(function(data, status, headers, config) {

                    alert("Product has been Submitted Successfully");

                    $scope.show_center();
                    $scope.clear_me();


                })
                .error(function(data, status, headers, config) {
                    console.log(data);
                });

        } else {
            alert("fill all details");
        }




    }
    $scope.clear_me                 = function() {
        $scope.delete_btn           = true;
        $scope.id                   = " ";
        $scope.first_name           = " ";
        $scope.last_name            = " ";
        $scope.email                = " ";
        $scope.address              = " ";
        $scope.contact              = " ";
        $scope.m_f                  = " ";
        $scope.refrance_dr          = " ";
        $scope.profession           = " ";
        $scope.office_address       = " ";
        $scope.account_status       = " ";
        $scope.date_of_deactivation = " ";
        $scope.about                = " ";
        $scope.dob                  = " ";
    }
    $scope.update_center = function() {
        if ($("#basicvalidations").parsley('validate')) {
            $http.post('index.php/Service/update_data/login/id', {
                    "id": $scope.id,
                    "first_name": $scope.first_name,
                    "last_name": $scope.last_name,
                    "email": $scope.email,
                    "address": $scope.address,
                    "contact": $scope.contact,
                    "m_f": $scope.m_f,
                    "refrance_dr": $scope.refrance_dr,
                    "profession": $scope.profession,
                    "office_address": $scope.office_address,
                    "account_status": $scope.account_status,
                    "date_of_deactivation": $scope.date_of_deactivation,
                    "about": $scope.about,
                    "dob": $scope.dob
                })
                .success(function(data, status, headers, config) {

                    alert("Product has been Updated Successfully");
                    $scope.show_center();
                   // $scope.uploadFile();
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
            $http.post('index.php/Service/delete_data/login/id', {
                    'id': index
                })
                .success(function(data, status, headers, config) {
                    $scope.show_center();
                    $scope.clear_me();
                    alert("Product has been deleted Successfully");
                })

            .error(function(data, status, headers, config) {
                alert(data);
            });
        } else {

        }
    }

    $scope.uploadFile = function(){
								   var file = $scope.myFile;
								   
								   console.log('file is ' );
								   console.dir(file);
								   
								   var uploadUrl = "uploads";
  							       var fd        = new FormData();
							      fd.append('file', file);
							     $http.post(uploadUrl, fd, {
								  transformRequest: angular.identity,
								  headers: {'Content-Type': undefined}
							      })
							   .success(function(){
							   })
							
							   .error(function(){
							   });	   
								  };	
	
    $scope.DoCtrlPagingAct = function(text, page, pageSize, total) {
        $log.info({
            text    : text,
            page    : page,
            pageSize: pageSize,
            total   : total
        });
    };


});
