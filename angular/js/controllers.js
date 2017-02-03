'use strict';

/* Controllers */

var phonecatControllers = angular.module('phonecatControllers', []);

/*phonecatControllers.controller('PhoneListCtrl', ['$scope', 'Phone',
  function($scope, Phone) {
    $scope.phones = Phone.query();
    $scope.orderProp = 'age';
  }]);

phonecatControllers.controller('PhoneDetailCtrl', ['$scope', '$routeParams', 'Phone',
  function($scope, $routeParams, Phone) {
    $scope.phone = Phone.get({phoneId: $routeParams.phoneId}, function(phone) {
      $scope.mainImageUrl = phone.images[0];
    });

    $scope.setImage = function(imageUrl) {
      $scope.mainImageUrl = imageUrl;
    };
  }]);*/
phonecatControllers.controller('PhoneListCtrl', ['$scope', 'Data',
  function($scope, Data) {
    $scope.datas = Data.query();
    $scope.orderProp = 'type';
  }]);

phonecatControllers.controller('PhoneDetailCtrl', ['$scope', '$routeParams', 'Data',
  function($scope, $routeParams, Data) {
    $scope.data = Data.get({datamarkerId: $routeParams.datamarkerId}, function(data) {
      $scope.mainImageUrl = data.images[0];
    });

    $scope.setImage = function(image) {
      $scope.mainImageUrl = image;
    };
  }]);