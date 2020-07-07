var app = angular.module("insert", ["ngRoute"]);
app.config(['$routeProvider',function($routeProvider){

    $routeProvider
    .when("/menu1", {
        templateUrl : "api/index.php" ,
        controller : "newController"
        
    });

}]);
