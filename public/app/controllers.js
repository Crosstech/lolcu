app.controller('mainController', function($scope, $http) {
    console.log('Ready');
});

app.controller('matchController', function($scope, $http) {

    $scope.current_game = window.CURRENT_GAME;
    $scope.masteries = window.MASTERIES;
    $scope.leagues = window.LEAGUES;
    $scope.images = window.IMAGES;

    console.log($scope.images);
});