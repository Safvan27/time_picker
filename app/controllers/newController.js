app.controller('myController',['$scope','$http',function($scope,$http) 
{
//alert("hai");
   

  

function  getResultPage(){
    $http({
        url : URL + '/api/index.php',
        method : 'PUT'
    }).then(function (result) {

        $scope.data = result.data.data;
        
    });
             

}

}]);

