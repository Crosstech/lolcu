var app = angular.module('lolcuApp', ['ui.router'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});