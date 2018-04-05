'use strict';

/* Services */

var phonecatServices = angular.module('phonecatServices', ['ngResource']);

/*phonecatServices.factory('Phone', ['$resource',
  function($resource){
    return $resource('phones/:phoneId.json', {}, {
      query: {method:'GET', params:{phoneId:'phones'}, isArray:true}
    });
  }]);*/
phonecatServices.factory('Data', ['$resource',
  function($resource){
    return $resource('bars/:datamarkerId.json', {}, {
      query: {method:'GET', params:{datamarkerId:'bars'}, isArray:true}
    });
  }]);