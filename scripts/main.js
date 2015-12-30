'use strict';
var angular             = require('angular');
var receiveComCtrl      = require('./controllers/receiveComCtrl');
var intranetUserFactory = require('./services/intranetUserFactory');
var equipmentFactory    = require('./services/equipmentFactory');
var receiveFormFactory  = require('./services/receiveFormFactory');
var route = require('./routes/route');

/** plugin module */
require('angular-ui-router');
require('angucomplete-alt');

var app = angular.module('todoApp', ['ui.router','angucomplete-alt']);
/** route */
app.config(['$stateProvider', '$urlRouterProvider', route ]);
/** controller */
app.controller('ReceiveComCtrl', [
	'$scope',
	'IntranetUserFactory',
	'EquipmentFactory', 
	'ReceiveFormFactory', 
	receiveComCtrl 
]);
/** * factory */
app.factory('IntranetUserFactory', ['$http', intranetUserFactory ]);
app.factory('EquipmentFactory', ['$http', equipmentFactory ]);
app.factory('ReceiveFormFactory', ['$http', receiveFormFactory ]);