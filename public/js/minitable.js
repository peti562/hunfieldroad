function mainPageTable () {
    $.ajax({
        headers: { 'X-Auth-Token': '39d5903e73c34ce2bdcbd0d280f3765f' },
        url: 'http://api.football-data.org/v1/competitions/445/leagueTable',
        dataType: 'json',
        type: 'GET',
        success: function(data) {
            myData = data.standing;
            console.log(myData);
            $('#mini_table').empty();
            for (var i = 0; i < myData.length; i++) {
                var newRow = '<div class="mini-table-row ';
                if(myData[i].teamName == "Liverpool FC") {
                    newRow += ' liverpool ';
                }
                newRow+= '"><div class="mini-table-column position">'+myData[i].position+'</div>';
                newRow+= '<div class="mini-table-column crest"><img class="crest-inner" style="max-height: 30px;" src="'+myData[i].crestURI+'"/></div>';
                newRow+= '<div class="mini-table-column tableTeam">'+teamnames[myData[i].teamName]+'</div>';
                newRow+= '<div class="mini-table-column points">'+myData[i].points+'</div>';
                newRow+= '<div class="mini-table-column goaldifference">'+myData[i].goalDifference+'</div>';
                newRow+= '<div class="mini-table-column played">'+myData[i].playedGames+'</div>';
                newRow += '</div>';
                $('#mini_table').append(newRow);
            }
        }
    });
}

mainPageTable();


var teamnames ={
    "Manchester City FC": 'Man City',
    "Manchester United FC": 'Man Utd',
    "Chelsea FC": 'Chelsea',
    "Liverpool FC": 'Liverpool',
    "Tottenham Hotspur FC": 'Tottenham',
    "Arsenal FC": 'Arsenal',
    "Leicester City FC": 'Leicester',
    "Burnley FC": 'Burnley',
    "Everton FC": 'Everton',
    "West Ham United FC": 'West Ham',
    "Watford FC": 'Watford',
    "Crystal Palace FC": 'C. Palace',
    "AFC Bournemouth": 'Bournemouth',
    "Huddersfield Town": 'Huddersfield',
    "Newcastle United FC": 'Newcastle',
    "Brighton & Hove Albion": 'Brighton',
    "Swansea City FC": 'Swansea',
    "Stoke City FC": 'Stoke',
    "Southampton FC": 'So\'ton',
    "West Bromwich Albion FC": 'West Brom'
}