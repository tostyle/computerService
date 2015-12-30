'use strict';
var angular = require('angular');
var receiveComCtrl = require('./controllers/receiveComCtrl');
var intranetUserFactory = require('./services/intranetUserFactory');
var route = require('./routes/route');
require('angular-ui-router');
require('angucomplete-alt');

var app = angular.module('todoApp', ['ui.router','angucomplete-alt']);
app.config(['$stateProvider', '$urlRouterProvider', route ]);
app.controller('ReceiveComCtrl', ['$scope','IntranetUserFactory', receiveComCtrl ]);
app.factory('IntranetUserFactory', ['$http', intranetUserFactory ]);