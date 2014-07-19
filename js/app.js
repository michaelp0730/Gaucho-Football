(function () {
    'use strict';
    $.getJSON('./json/schedule.json', function(data) {
        var scheduleTemplate = $('#schedule-template').html(),
            compiledSchedule = Handlebars.compile(scheduleTemplate),
            scheduleWrapper = {weeks: data},
            gametimes;
        $('#schedule-container').html(compiledSchedule(scheduleWrapper));

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