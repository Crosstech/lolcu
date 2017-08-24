app.controller('mainController', function($scope, $http) {
    $scope.static = {
        champions: [],
        items: [],
        masteries: [],
        runes: [],
        profile_icons: [],
        summoner_spells: []
    };
});

app.controller('liveController', function($scope, $http) {
    console.log('Live Game');
});

app.controller('recentController', function($scope, $http) {
    console.log('Recent Games');
});