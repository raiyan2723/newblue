var app2 = angular.module('user_app', ["bw.paging"]);

app2.filter('categorySelection', ['filterFilter', function(filterFilter) {
    return function categorySelection(input, prop) {
        return filterFilter(input, {
            selected: true
        }).map(function(data) {
            return data[prop];
        });
    };
}]);

app2.controller('user_Ctrl', function($scope, $http, $log, filterFilter) {
    $http.post("index.php/Service/count_table_row/login").success(function(response) {
        $scope.tot = response;
    });

    $scope.add_center        = true;
	$scope.category_time_data= [];
	$scope.edit_category_time_data = [];
    $scope.update_center_btn = false;
    $scope.limit_setter_val  = 5;
    $scope.prev_btn          = true;
    $scope.next_btn          = true;
    $scope.currentPage       = 1;
    $scope.set_limit         = 5;
    $scope.delete_btn        = true;

    $http.post("index.php/Service/get_one", {
        "table": "center",
        "column": "center_city"
    }).success(function(response) {
        $scope.city = response;
    }).error(function(data, status, headers, config) {
        console.log(data);
    });
    $http.post("index.php/Service/get_one", {
        "table": "login",
        "column": "email"
    }).success(function(response) {
        $scope.data = response;
    }).error(function(data, status, headers, config) {
        console.log(data);
    });
    $scope.changedValue_email = function() {
        $http.post("index.php/Service/get_where_all_row", {
            "table": "login",
            "column": "*",
            "whr_column": "`email`='" + $scope.emailSelected.email + "'"
        }).success(function(response) {
            console.log(response);
            $scope.user_data = response;
        }).error(function(data, status, headers, config) {
            console.log(data);
        });
       $scope.get_u_data();
    }
    $scope.get_u_data = function() {
	    
		$http.post("index.php/Service/get_u_data", {
            "table": "category_time",
            "show_column": "*",
            "whr_column": "`center_id`='" + $scope.c_id + "'"
        }).success(function(response) {
            console.log(response);
            $scope.category_time_data = response;
        }).error(function(data, status, headers, config) {
            console.log(data);
        });	
		
	}
    $scope.changedValue = function() {
        $http.post("index.php/Service/get_where_all", {
            "table": "center",
            "column": "center_location",
            "whr_column": "`center_city`='" + $scope.citySelected.center_city + "'"
        }).success(function(response) {
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
            $scope.c_id = response[0].id;
			       $scope.get_u_data();
        }).error(function(data, status, headers, config) {
            console.log(data);
        });
    }
    $scope.show_center = function() {
        $scope.set_limit = $scope.limit_setter_val * ($scope.currentPage - 1);

        $http.post("index.php/Service/table_data/appointment/id", {
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
        })
		.error(function(data, status, headers, config) {
            console.log(data);
        });
    }
    $scope.center_edit = function(index) {

        $scope.update_center_btn = true;
        $scope.add_center = false;
        $scope.delete_btn = false;
        $http.post('index.php/Service/edit_data/appointment/id', {
            'id': index
        }).success(function(data, status, headers, config) {

			$scope.edit_id                  = data[0]["id"];
			$scope.edit_c_id                = data[0]["center_id"];
			$scope.edit_nameSelected        = data[0]["center_name"];
			$scope.edit_emailSelected       = data[0]["email"];
			$scope.edit_status              = data[0]["status"];
			$scope.edit_date_me             = data[0]["date_boking"];
		    $scope.get_category(data[0]["booked_category"]);
			
        }).error(function(data, status, headers, config) {
            alert(data);
        });
    }
	
	$scope.get_category = function (data)
	{
		$scope.edit_category_time_data = [];
		var obj = jQuery.parseJSON(data);
		for(i=0;i < Object.keys(obj).length;i++)
		{
 			$http.post("index.php/Service/get_where_all_row", 
			{
				"table"      : "category_time",
				"column"     : "*",
				"whr_column" : "`id`='" + obj[i] + "'"
			}).success(function(response) 
			{
				$scope.edit_category_time_data.push(
				{
					id       : response.id,
					category : response.category 
				});
 
			}).error(function(data, status, headers, config) {
				console.log(data);
			});
		}
	}
	
    $scope.change_me = function() {
        $scope.update_center_btn = false;
        $scope.add_center = true;
        $scope.clear_me();
    }
    $scope.save_center = function() {
        if ($("#basicvalidations").parsley('validate')) {
            $http.post("index.php/Service/save_data/appointment", {
                    "center_id"      : $scope.c_id,
                    "center_name"    : $scope.nameSelected.center_name,
                    "date_boking"    : $("#datepicker").val(),
                    "email"          : $scope.emailSelected.email,
                    "booked_category": $('#cat_data').val()
                })
                .success(function(data, status, headers, config) {
                    console.log(data);
                    alert("Appointment has been Submitted Successfully");
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
    $scope.clear_me = function() {
        $scope.delete_btn                = true;
        $scope.c_id                      = "" ;
        $scope.citySelected              = "" ;
        $scope.locationSelected          = "" ;
        $scope.nameSelected              = [] ;
        $scope.user_data                 = [] ;
        $("#datepicker").val(""),
        $scope.emailSelected             = [] ;
        $('#cat_data').val("");
    	$scope.edit_category_time_data   = [];
    	$scope.category_time_data        = [];
        $scope.edit_id                   = "" ;
        $scope.edit_c_id                 = "" ;
        $scope.edit_nameSelected         = [] ;
        $("#datepicker2").val(""),
        $scope.edit_emailSelected       = "" ;
        $('#cat_data2').val("");
    }
    $scope.update_center = function() {
        if ($("#basicvalidations2").parsley('validate')) {
            $http.post('index.php/Service/update_data/appointment/id', {
				    'id'             : $scope.edit_id,
                    "center_id"      : $scope.edit_c_id,
                    "center_name"    : $scope.edit_nameSelected,
                    "date_boking"    : $scope.edit_date_me,
                    "email"          : $scope.edit_emailSelected,
                    "booked_category": $('#cat_data2').val()
                })
                .success(function(data, status, headers, config) {

                    alert("Product has been Updated Successfully");
					console.log(data);
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
    $scope.center_delete = function(index) {
        var x = confirm("Are you sure to delete the selected product");
        if (x) {
            $http.post('index.php/Service/delete_data/appointment/id', {
                    'id': index
                })
                .success(function(data, status, headers, config) {
					console.log("data",data);
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
    $scope.DoCtrlPagingAct = function(text, page, pageSize, total) {
        $log.info({
            text    : text,
            page    : page,
            pageSize: pageSize,
            total   : total
        });
    };
});

/*   // selected fruits
  $scope.selection = [];

  // helper method to get selected fruits
  $scope.selectedFruits = function selectedFruits() {
    return filterFilter($scope.fruits, { selected: true });
  };

    // watch fruits for changes
    $scope.$watch('fruits|filter:{selected:true}', function (nv) {
      $scope.selection = nv.map(function (fruit) {
        return fruit.name;
      });
    }, true);
	 */