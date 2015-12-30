'use strict';

var ReceiveComCtrl = function($scope,IntranetUserFactory) {

  $scope.userAPIPath = IntranetUserFactory.getAPIPath();
	// RefData.getIntranetUser().success(function(res){
	// 	console.log('ccccccc');
	// });
  $scope.todo = 'We are up and running from a required xxxxxmodule!';
  $scope.countries = [
    { name : 'thailand'},
    { name : 'vientrrt'},
    { name : 'honfgokosd'},
    { name : 'xxxxxxx'},
    { name : 'sssssssss'},
  ];

  $scope.programList = [
  	{ programType : 'license' ,
  	  programs : [
  	  	{ id :1 , name : 'window' ,detail : 'os' , version : '10 64 bit'},
  	  	{ id :2 , name : 'mail' ,detail : 'antivirus' , version : '10.64.33'},
  	  ]
  	},
  	{ programType : 'freeware',
  	  programs : [
  	  	{ id :3 , name : 'libre' ,detail : 'office' , version : '3.4343'},
  	  	{ id :4 , name : 'lexitron' ,detail : 'dit' , version : '6.11,410.64.33'},
  	  ]
  	}
  ];
};

module.exports = ReceiveComCtrl;