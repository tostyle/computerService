'use strict';

var ReceiveComCtrl = function($scope,IntranetUserFactory,EquipmentFactory,ReceiveFormFactory) {

  $scope.userAPIPath      = IntranetUserFactory.getAPIPath();
  $scope.equipmentAPIPath = EquipmentFactory.getEquipmentAPIPath();
  
  $scope.saveReceiveForm  = function(){
      ReceiveFormFactory.save($scope.receiveForm).success(function(res){
          console.log(res);
      }); 
  };

  EquipmentFactory.getEquipmentType().success(function(res){
      $scope.equipmentTypes = res;
      $scope.equipType = $scope.equipmentTypes[1]
  }); 
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