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
        $http.get('/api/v1/static_data')
        .then(function(response) {
            $scope.static.champions = response.data.champions;
            $scope.static.items = response.data.items;
            $scope.static.masteries = response.data.masteries;
            $scope.static.runes = response.data.runes;
            $scope.static.profile_icons = response.data.profile_icons;
            $scope.static.summoner_spells = response.data.summoner_spells;
        });
    }
    
    //$scope.seed();
});

app.controller('liveController', function($scope, $http) {

    $scope.current_game = window.CURRENT_GAME;
    $scope.masteries = window.MASTERIES;
    $scope.leagues = window.LEAGUES;
    $scope.images = window.IMAGES;

    console.log($scope.current_game);
});

app.controller('recentController', function($scope, $http) {
    console.log('Recent Games');
});