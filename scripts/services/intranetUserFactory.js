'use strict';
var IntranetUser = function($http){
	var apiPath = 'backend/public/intranetUser/';
	return {
    	getIntranetUser : function(name) {
       		return $http.get(apiPath+name);
    	},
    	getAPIPath : function(){
    		return apiPath;
    	}
  	}
};

module.exports = IntranetUser; 