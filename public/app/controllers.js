app.controller('mainController', function($scope, $http) {
    $scope.static = {
        champions: [],
        items: [],
        masteries: [],
        runes: [],
        profile_icons: [],
        summoner_spells: []
    };

    $scope.seed = function() {
		$http.get('/api/v1/static_data').
		then(function(data) {
            console.log(data);
		});
    }
    
    $scope.seed();
});

app.controller('liveController', function($scope, $http) {

    $scope.current_game = window.CURRENT_GAME;

    console.log($scope.current_game);
});

app.controller('recentController', function($scope, $http) {
    console.log('Recent Games');
});