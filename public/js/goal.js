/*
First ask the API if there is any match today with status _IN_PLAY

If there is, get the details of the fixture:



Send a request every

*/

var match_data = {};

$.ajax({
    headers: { 'X-Auth-Token': '39d5903e73c34ce2bdcbd0d280f3765f' },
    url: 'http://api.football-data.org/v1/teams/64/fixtures',
    dataType: 'json',
    type: 'GET',
    success: function(data) {
        var fixtures = data.fixtures;
        for(var i=0; i<fixtures.length; i++){
            if (fixtures[i].status == "IN_PLAY"){
                match_data = {
                    competition_id : atob(fixtures[i]._links.competition.href.substr(fixtures[i]._links.competition.href.lastIndexOf('/') + 1)),
                    home_team_id : atob(fixtures[i]._links.homeTeam.href.substr(fixtures[i]._links.homeTeam.href.lastIndexOf('/') + 1)),
                    away_team_id : atob(fixtures[i]._links.awayTeam.href.substr(fixtures[i]._links.awayTeam.href.lastIndexOf('/') + 1)),
                    fixture_id : atob(fixtures[i]._links.self.href.substr(fixtures[i]._links.self.href.lastIndexOf('/') + 1)),
                    home_goals : fixtures[i].result.goalsHomeTeam,
                    away_goals : fixtures[i].result.goalsAwayTeam
                };
            }
        }
    }
});

