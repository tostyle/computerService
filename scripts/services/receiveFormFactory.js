'use strict';
var param = require('jquery-param');
var ReceiveForm = function($http){
	return {
    	save : function(formData) {
       		return  $http({
			  method  : 'POST',
			  url     : 'backend/public/receiveForm',
			  data    : param(formData),  // pass in data as strings
			  headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
			});
    	},
    	update : function(formData){
    		return  $http({
			  method  : 'PUT',
			  url     : 'backend/public/receiveForm',
			  data    : param(formData),  // pass in data as strings
			  headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
			});
    	}
  	}
};

module.exports = ReceiveForm; 