'use strict';
var Equipment = function($http){
	var searchEquipmentAPIPath ='backend/public/equipment';
	return {
    	getEquipmentType : function(name) {
       		return $http.get('backend/public/equipmentType');
    	},
    	getEquipmentAPIPath : function(){
    		return searchEquipmentAPIPath;
    	}
  	}
};

module.exports = Equipment; 