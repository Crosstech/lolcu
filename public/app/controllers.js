app.controller('mainController', function($scope, $http) {
    console.log('Ready');
});

app.controller('matchController', function($scope, $http) {

    $scope.current_game = window.CURRENT_GAME;

    console.log($scope.current_game);
});