'use strict';
var RefData = function($http){
	return {
    	getIntranetUser : function(name) {
       		return $http.get('backend/public/intranetUser/'+name);
    	}
  	}
};

module.exports = RefData; 