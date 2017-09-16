app.controller('mainController', function ($scope, $http) {
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

app.controller('liveController', function ($scope, $http) {
    console.log('Live Game');
});

app.controller('recentController', function ($scope, $http) {
    console.log('Recent Games');
});

app.controller('championsController', ['$scope', '$http', function ($scope, $http) {
    $scope.champions = window.CHAMPIONS;

    // $scope.roles = [{
    //         name: 'Suikastçi',
    //         key: 'Assassin',
    //         on: false
    //     },
    //     {
    //         name: 'Dövüşçü',
    //         key: 'Fighter',
    //         on: false
    //     },
    //     {
    //         name: 'Büyücü',
    //         key: 'Mage',
    //         on: false
    //     },
    //     {
    //         name: 'Nişancı',
    //         key: 'Marksman',
    //         on: false
    //     },
    //     {
    //         name: 'Destek',
    //         key: 'Support',
    //         on: false
    //     },
    //     {
    //         name: 'Tank',
    //         key: 'Tank',
    //         on: false
    //     },
    // ];

    // $scope.showAll = true;
    // $scope.checkChange = function () {
    //     for (r in $scope.roles) {
    //         if ($scope.roles[r].on) {
    //             $scope.showAll = false;
    //             return;
    //         }
    //     }
    //     $scope.showAll = true;
    // };

    // $scope.championFilter = function (champ) {
    //     if ($scope.showAll) {
    //         return true;
    //     }

    //     var res = false;

    //     for (role in $scope.roles) {
    //         var r = $scope.roles[role];
    //         if (r.on) {
    //             if (champ.tag1.indexOf(r.key) == -1) {
    //                 return false;
    //             } else {
    //                 res = true;
    //             }
    //         }
    //     }
    //     return res;
    // };
}]);

app.controller('itemsController', ['$scope', '$http', function ($scope, $http) {
    $scope.allItems = window.ALL_ITEMS;
    console.log($scope.allItems)
}]);

app.controller('runesController', ['$scope', '$http', function ($scope, $http) {
    $scope.allRunes = window.ALL_RUNES;
}]);

app.controller('itemMapperController', ['$scope', '$http', function ($scope, $http) {
    $scope.items = [];
    $scope.championItems = [];

    //get all items from db
    $http({
        url: '/api/v1/items',
        method: "GET"
    }).then(function (response) {
        $scope.items = response.data.items;
    });

    //get champion from db
    $scope.getChampion = function () {
        $http({
            url: '/api/v1/champion/',
            method: "GET",
            params: {
                name: $scope.championName
            }
        }).then(function (response) {
            $scope.champion = response.data

        });
    }

    //add item to selected items 
    $scope.addItem = function ($item) {
        $scope.championItems.push($item);
        var index = $scope.items.indexOf($item);
        $scope.items.splice(index, 1);

    }

    //remove item from selected items
    $scope.removeItem = function ($item) {
        $scope.items.push($item);
        var index = $scope.championItems.indexOf($item);
        $scope.championItems.splice(index, 1);
        console.log($scope.championItems);
    }

    $scope.addItemsToChampion = function () {
        console.log($scope.champion);
        $http({
            url: '/item-mapper',
            method: "POST",
            data: {
                items: $scope.championItems,
                champion_id: $scope.champion.champion_id
            }
        }).then(function (response) {
            alert('Added');
        });
    }
}]);

app.controller('runeMapperController', ['$scope', '$http', function ($scope, $http) {
    $scope.runes = [];
    $scope.championRunes = [];

    //get all runes from db
    $http({
        url: '/api/v1/runes',
        method: "GET"
    }).then(function (response) {
        $scope.runes = response.data.runes;
    });

    //get champion from db
    $scope.getChampion = function () {
        $http({
            url: '/api/v1/champion/',
            method: "GET",
            params: {
                name: $scope.championName
            }
        }).then(function (response) {
            $scope.champion = response.data

        });
    }

    //add rune to selected runes 
    $scope.addRune = function ($rune) {
        $scope.championRunes.push($rune);
        var index = $scope.runes.indexOf($rune);
        $scope.runes.splice(index, 1);

    }

    //remove rune from selected runes
    $scope.removeRune = function ($rune) {
        $scope.runes.push($rune);
        var index = $scope.championRunes.indexOf($rune);
        $scope.championRunes.splice(index, 1);
    }

    $scope.addRunesToChampion = function () {
        console.log($scope.champion);
        $http({
            url: '/rune-mapper',
            method: "POST",
            data: {
                runes: $scope.championRunes,
                champion_id: $scope.champion.champion_id
            }
        }).then(function (response) {
            alert('Added');
        });
    }
}]);

app.controller('masteryMapperController', ['$scope', '$http', function ($scope, $http) {
    $scope.masteries = [];
    $scope.championMasteries = [];

    //get all masteries from db
    $http({
        url: '/api/v1/masteries',
        method: "GET"
    }).then(function (response) {
        $scope.masteries = response.data.masteries;
    });

    //get champion from db
    $scope.getChampion = function () {
        $http({
            url: '/api/v1/champion/',
            method: "GET",
            params: {
                name: $scope.championName
            }
        }).then(function (response) {
            $scope.champion = response.data

        });
    }

    //add mastery to selected masteries 
    $scope.addMastery = function ($mastery) {
        $scope.championMasteries.push($mastery);
        var index = $scope.masteries.indexOf($mastery);
        $scope.masteries.splice(index, 1);

    }

    //remove mastery from selected masteries
    $scope.removeMastery = function ($mastery) {
        $scope.masteries.push($mastery);
        var index = $scope.championMasteries.indexOf($mastery);
        $scope.championMasteries.splice(index, 1);
    }

    $scope.addMasteriesToChampion = function () {
        $http({
            url: '/mastery-mapper',
            method: "POST",
            data: {
                masteries: $scope.championMasteries,
                champion_id: $scope.champion.champion_id
            }
        }).then(function (response) {
            alert('Added');
        });
    }
}]);

app.controller('spellMapperController', ['$scope', '$http', function ($scope, $http) {
    $scope.spells = [];
    $scope.championSpells = [];


    //get all spells from db
    $http({
        url: '/api/v1/summoner_spells',
        method: "GET"
    }).then(function (response) {
        $scope.spells = response.data.summoner_spells;
    });

    //get champion from db
    $scope.getChampion = function () {
        $http({
            url: '/api/v1/champion/',
            method: "GET",
            params: {
                name: $scope.championName
            }
        }).then(function (response) {
            $scope.champion = response.data

        });
    }

    //add spell to selected spells 
    $scope.addSpell = function ($spell) {
        $scope.championSpells.push($spell);
        var index = $scope.spells.indexOf($spell);
        $scope.spells.splice(index, 1);

    }

    //remove spell from selected spells
    $scope.removeSpells = function ($spell) {
        $scope.spells.push($spell);
        var index = $scope.championSpells.indexOf($spell);
        $scope.championSpells.splice(index, 1);
    }

    $scope.addSpellsToChampion = function () {
        $http({
            url: '/spell-mapper',
            method: "POST",
            data: {
                spells: $scope.championSpells,
                champion_id: $scope.champion.champion_id
            }
        }).then(function (response) {
            alert('Added');
        });
    }
}]);



app.controller('counterMapperController', ['$scope', '$http', function ($scope, $http) {
    $scope.counters = [];
    $scope.championCounters = [];


    //get all champions from db
    $http({
        url: '/api/v1/champions',
        method: "GET"
    }).then(function (response) {
        $scope.counters = response.data.champions;
    });

    //get champion from db
    $scope.getChampion = function () {
        $http({
            url: '/api/v1/champion/',
            method: "GET",
            params: {
                name: $scope.championName
            }
        }).then(function (response) {
            $scope.champion = response.data

        });
    }

    //add counter to selected champion 
    $scope.addCounter = function ($counter) {
        console.log($counter);
        $scope.championCounters.push($counter);
        var index = $scope.counters.indexOf($counter);
        $scope.counters.splice(index, 1);

    }

    //remove counter from selected counters
    $scope.removeCounter = function ($counter) {
        $scope.spells.push($counter);
        var index = $scope.championCounters.indexOf($counter);
        $scope.championCounters.splice(index, 1);
    }

    $scope.addCountersToChampion = function () {
        $http({
            url: '/counter-mapper',
            method: "POST",
            data: {
                counters: $scope.championCounters,
                champion_id: $scope.champion.champion_id
            }
        }).then(function (response) {
            alert('Added');
        });
    }
}]);


app.controller('itemTipMapperController', ['$scope', '$http', function ($scope, $http) {
    $scope.tips = [];

    $scope.getItem = function () {
        $http({
            url: '/api/v1/item/',
            method: "GET",
            params: {
                name: $scope.itemName
            }
        }).then(function (response) {
            $scope.item = response.data;
            $http({
                url: '/api/v1/get_item_tip',
                method: "GET",
                params: {
                    item_id: response.data.item_id
                }
            }).then(function (response) {
                $scope.tips = response.data.itemTips;
            });
        });
    }

    $scope.addTip = function () {
        $http({
            url: '/itemTip-mapper',
            method: "POST",
            data: {
                tip: $scope.newTip,
                item_id: $scope.item.item_id
            }
        }).then(function (response) {
            $scope.tips.push(response.data.tip);
            alert('Added');
        });
    }
}]);

app.controller('championCommentsController', ['$scope', '$http', function ($scope, $http) {
    $scope.comments = [];

    $http({
        url: 'api/v1/champion/comments',
        method: "GET",
        params: {
            champion_name: window.champion
        }
    }).then(function (response) {
        $scope.comments = response.data.comments
        console.log($scope.comments);

    });

    $scope.saveComment = function () {
        $http({
            url: '/champion/save-comment',
            method: "POST",
            data: {
                champion_name: window.champion,
                name: $scope.name,
                summoner_name: $scope.summoner_name,
                comment: $scope.comment
            }
        }).then(function (response) {
            $scope.comments.push(response.data.comment);
            console.log($scope.comments);
            $scope.name = '';
            $scope.summoner_name = '';
            $scope.comment = '';
        });
    }
}]);

app.controller('itemCommentsController', ['$scope', '$http', function ($scope, $http) {
    $scope.comments = [];

    $http({
        url: 'api/v1/item/comments',
        method: "GET",
        params: {
            item_name: window.item
        }
    }).then(function (response) {
        $scope.comments = response.data.comments
        console.log($scope.comments);

    });

    $scope.saveComment = function () {
        $http({
            url: '/item/save-comment',
            method: "POST",
            data: {
                item_name: window.item,
                name: $scope.name,
                summoner_name: $scope.summoner_name,
                comment: $scope.comment
            }
        }).then(function (response) {
            $scope.comments.push(response.data.comment);
            console.log($scope.comments);
            $scope.name = '';
            $scope.summoner_name = '';
            $scope.comment = '';
        });
    }
}]);

app.controller('runeCommentsController', ['$scope', '$http', function ($scope, $http) {
    $scope.comments = [];

    $http({
        url: 'api/v1/rune/comments',
        method: "GET",
        params: {
            rune_name: window.rune
        }
    }).then(function (response) {
        $scope.comments = response.data.comments
        console.log($scope.comments);

    });

    $scope.saveComment = function () {
        $http({
            url: '/rune/save-comment',
            method: "POST",
            data: {
                rune_name: window.rune,
                name: $scope.name,
                summoner_name: $scope.summoner_name,
                comment: $scope.comment
            }
        }).then(function (response) {
            $scope.comments.push(response.data.comment);
            console.log($scope.comments);
            $scope.name = '';
            $scope.summoner_name = '';
            $scope.comment = '';
        });
    }
}]);

app.controller('masteryCommentsController', ['$scope', '$http', function ($scope, $http) {
    $scope.comments = [];

    $http({
        url: 'api/v1/mastery/comments',
        method: "GET",
        params: {
            mastery_name: window.mastery
        }
    }).then(function (response) {
        $scope.comments = response.data.comments
        console.log($scope.comments);

    });

    $scope.saveComment = function () {
        $http({
            url: '/mastery/save-comment',
            method: "POST",
            data: {
                mastery_name: window.mastery,
                name: $scope.name,
                summoner_name: $scope.summoner_name,
                comment: $scope.comment
            }
        }).then(function (response) {
            $scope.comments.push(response.data.comment);
            console.log($scope.comments);
            $scope.name = '';
            $scope.summoner_name = '';
            $scope.comment = '';
        });
    }
}]);

app.controller('spellCommentsController', ['$scope', '$http', function ($scope, $http) {
    $scope.comments = [];

    $http({
        url: 'api/v1/spell/comments',
        method: "GET",
        params: {
            spell_name: window.spell
        }
    }).then(function (response) {
        $scope.comments = response.data.comments
        console.log($scope.comments);

    });

    $scope.saveComment = function () {
        $http({
            url: '/spell/save-comment',
            method: "POST",
            data: {
                spell_name: window.spell,
                name: $scope.name,
                summoner_name: $scope.summoner_name,
                comment: $scope.comment
            }
        }).then(function (response) {
            $scope.comments.push(response.data.comment);
            console.log($scope.comments);
            $scope.name = '';
            $scope.summoner_name = '';
            $scope.comment = '';
        });
    }
}]);