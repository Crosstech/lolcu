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

    $http({
        url:'/api/v1/champion/',
        method:"GET",
        params:{name:'Jinx'}
    }).then(function(response){
        console.log(response);
    });

    $http({
        url:'/api/v1/items',
        method:"GET"
    }).then(function(response){
        $scope.items = response;
    });
})