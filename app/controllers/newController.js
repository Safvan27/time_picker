var app =angular.module("insert",[]);
    app.controller("controller",function($scope,$http){
        $scope.insert=function(){
            $http.post(
            "api/insert_data.php",
            {'name':$scope.name, 'email':$scope.email, 'age':$scope.age}
            ).then(function(data){
                $scope.name = null;
                $scope.email = null;
                $scope.age = null;
            });

        }

    });