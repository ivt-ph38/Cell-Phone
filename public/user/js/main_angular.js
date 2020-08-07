 var app = angular.module('myApp',['ngMaterial']);
 app.controller('MyController',  function($scope){
  $scope.thamso = 4;
  $scope.a1 = "them a1 vao scope";
  $scope.a3 = function(){
  	$scope.thamso++;
  };
  $scope.data = [
  	{name : "Iphone6",
  	price: "1200000",
  	star: 4
  	},
  	{name : "Iphone6",
  	price: "1200000",
  	star: 3
  	},
  	{name : "Iphone6",
  	price: "1200000",
  	star: 5
  	}
  ];
 })
