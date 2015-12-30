'use strict';
var Route = function($stateProvider, $urlRouterProvider) {
  	$urlRouterProvider.otherwise('/');
  	$stateProvider
      .state('receiveForm', {
        url: '/receiveForm',
    	  controller:'ReceiveComCtrl',
    	  templateUrl:'./templates/receiveComForm.html'
  	})
      .state('returnForm', {
    	   url: '/returnForm',
    	   templateUrl:'./templates/returnComForm.html'
  	});
};
module.exports = Route; 