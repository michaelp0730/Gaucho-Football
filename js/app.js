(function () {
    'use strict';
    $.getJSON('./json/schedule.json', function(data) {
        var scheduleTemplate = $('#schedule-template').html(),
            compiledSchedule = Handlebars.compile(scheduleTemplate),
            scheduleWrapper = {weeks: data},
            currentDate = new XDate(),
            wk1StartDate = new XDate('2014-09-04T20:30:00-04:00'),
            wk2StartDate = new XDate('2014-09-11T20:25:00-04:00'),
            wk3StartDate = new XDate('2014-09-18T20:25:00-04:00'),
            wk4StartDate = new XDate('2014-09-25T20:25:00-04:00'),
            wk5StartDate = new XDate('2014-10-02T20:25:00-04:00'),
            wk6StartDate = new XDate('2014-10-09T20:25:00-04:00'),
            wk7StartDate = new XDate('2014-10-16T20:25:00-04:00'),
            wk8StartDate = new XDate('2014-10-23T20:25:00-04:00'),
            wk9StartDate = new XDate('2014-10-30T20:25:00-04:00'),
            wk10StartDate = new XDate('2014-11-06T20:25:00-04:00'),
            wk11StartDate = new XDate('2014-11-13T20:25:00-04:00'),
            wk12StartDate = new XDate('2014-11-20T20:25:00-04:00'),
            wk13StartDate = new XDate('2014-11-27T12:30:00-04:00'),
            wk14StartDate = new XDate('2014-12-04T20:25:00-04:00'),
            wk15StartDate = new XDate('2014-12-11T20:25:00-04:00'),
            wk16StartDate = new XDate('2014-12-18T20:25:00-04:00'),
            wk17StartDate = new XDate('2014-12-28T13:00:00-04:00'),
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

        if (currentDate < wk1StartDate) {
            $('#panel-wk1').addClass('in');
        } else if (currentDate > wk1StartDate && currentDate < wk2StartDate) {
            $('#panel-wk2').addClass('in');
        } else if (currentDate > wk2StartDate && currentDate < wk3StartDate) {
            $('#panel-wk3').addClass('in');
        } else if (currentDate > wk3StartDate && currentDate < wk4StartDate) {
            $('#panel-wk4').addClass('in');
        } else if (currentDate > wk4StartDate && currentDate < wk5StartDate) {
            $('#panel-wk5').addClass('in');
        } else if (currentDate > wk5StartDate && currentDate < wk6StartDate) {
            $('#panel-wk6').addClass('in');
        } else if (currentDate > wk6StartDate && currentDate < wk7StartDate) {
            $('#panel-wk7').addClass('in');
        } else if (currentDate > wk7StartDate && currentDate < wk8StartDate) {
            $('#panel-wk8').addClass('in');
        } else if (currentDate > wk8StartDate && currentDate < wk9StartDate) {
            $('#panel-wk9').addClass('in');
        } else if (currentDate > wk9StartDate && currentDate < wk10StartDate) {
            $('#panel-wk10').addClass('in');
        } else if (currentDate > wk10StartDate && currentDate < wk11StartDate) {
            $('#panel-wk11').addClass('in');
        } else if (currentDate > wk11StartDate && currentDate < wk12StartDate) {
            $('#panel-wk12').addClass('in');
        } else if (currentDate > wk12StartDate && currentDate < wk13StartDate) {
            $('#panel-wk13').addClass('in');
        } else if (currentDate > wk13StartDate && currentDate < wk14StartDate) {
            $('#panel-wk14').addClass('in');
        } else if (currentDate > wk14StartDate && currentDate < wk15StartDate) {
            $('#panel-wk15').addClass('in');
        } else if (currentDate > wk15StartDate && currentDate < wk16StartDate) {
            $('#panel-wk16').addClass('in');
        } else {
            $('#panel-wk17').addClass('in');
        }

        $('.submit-picks-btn').on('click', function(e) {
            alert('Are you sure you want to submit these picks? Remember - all picks are final.');
        });
    });
}());