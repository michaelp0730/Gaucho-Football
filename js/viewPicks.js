(function () {
    'use strict';
    $.getJSON('./json/2015-schedule.json', function(data) {
        var viewPicksTemplate = $('#view-picks-template').html(),
            compiledPicks = Handlebars.compile(viewPicksTemplate),
            picksWrapper = {weeks: data},
            gametimes;
        $('#view-picks-container').html(compiledPicks(picksWrapper));

        gametimes = $('.gametime');
        $.each(gametimes, function() {
            var gametime = $(this).data('gametime'),
                xdate = new XDate(gametime),
                dateString = xdate.toLocaleDateString(),
                timeString = xdate.toLocaleTimeString();
            $(this).html('Kickoff: ' + dateString + ' ' + timeString);
        });
    });
}());
