angular.module("MyFirstApp", [])
    .controller("FirstController", function($scope, $http, $location){
    $scope.nombre = "Andrea"; 
         $scope.location = $location;
    /*
   
    $scope.productos=  [{
                             id        : '1',
                             titulo    : "titulo1",
                             descripcion : "descripcion1"


                         },

                          {
                             id        : '2',
                             titulo    : "titulo2",
                             descripcion : "descripcion2"


                         }];

            */
       $scope.Producto = [];

          

    $http.get("/producto/getList")
        .success(function(data){
           $scope.Producto = data;
        });

});

