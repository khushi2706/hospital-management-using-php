const url = "https://covid19.mathdro.id/api";
var app = angular.module("MyApp", []);
 app.controller("MyCtrl", ($scope,$http) => {
     $scope.title = "stay home stay safe";
     
     $http.get(url).then(
         //success
        (response)=>{
        console.log(response.data);
    $scope.all_data = response.data;
    },
    (error) => {
        console.log(error);
    }

     );
   
     });