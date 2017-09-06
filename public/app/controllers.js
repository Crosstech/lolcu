app.controller('mainController', function($scope, $http) {
    $scope.static = {
        champions: [],
        items: [],
        masteries: [],
        runes: [],
        profile_icons: [],
        summoner_spells: []
    };
    $scope.current_game = window.CURRENT_GAME;    
    $scope.champions = window.CHAMPIONS;

});

app.controller('liveController', function($scope, $http) {
    console.log('Live Game');
});

app.controller('recentController', function($scope, $http) {
    console.log('Recent Games');
});

app.controller('itemMapperController',function($scope,$http){
    console.log('items');
})