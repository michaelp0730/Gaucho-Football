(function () {
    'use strict';
    $.getJSON('./json/schedule.json', function(data) {
        var templateSource = $('#schedule-template').html(),
            template = Handlebars.compile(templateSource),
            wrapper = {weeks: data},
            gametimes;
        $('#schedule-container').html(template(wrapper));

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