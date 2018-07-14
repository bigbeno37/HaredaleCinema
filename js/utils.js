function convertDay(day) {
    var days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

    return days[day];
}

function convertTime(time) {
    return (time-12 === 0) ? '12PM' : time-12 + 'PM';
}

function convertDoubleDigitTime(time) {
    if (time-12 === 0) {
        return '12';
    } else {
        var newTime = time-12;

        // If the time isn't a single digit number
        if (!(newTime-10 < 0)) {
            return newTime;
        }

        return '0' + newTime;
    }
}

function convertDayTime(date) {
    return convertDay(date.getDay()).toUpperCase().substring(0, 3)
                    + '-' + convertDoubleDigitTime(date.getHours());
}

function generateSessionOption(sessionDate) {
    return '<option value="' + convertDayTime(sessionDate) + '">'
        + convertDay(sessionDate.getDay()) + ' ' + convertTime(sessionDate.getHours())
        + '</option>';
}

function generateSessionOptionPrice(sessionDate, sessionPrice) {
    return '<option value="' + convertDayTime(sessionDate) + '">'
    + convertDay(sessionDate.getDay()) + ' ' + convertTime(sessionDate.getHours()) +
    ' - $' + sessionPrice + '</option>';
}

function populateQuickBook(selectClass, movie) {
    for (var i = 0; i < timetable.getSessionsWith(movie).length; i++) {
        var session = timetable.getSessionsWith(movie)[i];
        var sessionDate = session.getSessionDate();

        var html = generateSessionOptionPrice(sessionDate, new Pricing(sessionDate).sAdult());

        document.getElementsByClassName(selectClass)[0].insertAdjacentHTML('beforeend', html);
    }
}

function populateMovieSelect(movieSelectElement) {
    var i = 0;

    for (var key in movies) {
        if (movies.hasOwnProperty(key)) {
            var html = '<option value="' + movies[key].getCategory() + '">' + movies[key].getName() + '</option>';

            document.getElementsByClassName(movieSelectElement)[0].insertAdjacentHTML('beforeend', html);

            if (i === 0) {
                populateSessions(movies[key].getCategory());
                i++;
            }
        }
    }
}

function clearSessions() {
    var session = document.getElementsByClassName('session')[0];

    while (session.firstChild) {
        session.removeChild(session.firstChild);
    }
}

function populateSessions(movieCategory) {

    var movie;
    for (var key in movies) {
        if (movies.hasOwnProperty(key)) {
            if (movies[key].getCategory() === movieCategory) {
                movie = movies[key];
            }
        }
    }

    for (var i = 0; i < timetable.getSessionsWith(movie).length; i++) {
        var session = timetable.getSessionsWith(movie)[i];
        var sessionDate = session.getSessionDate();

        var html = generateSessionOption(sessionDate);

        document.getElementsByClassName('session')[0].insertAdjacentHTML('beforeend', html);
    }

    updateSeatPrices(convertDayTime(timetable.getSessionsWith(movie)[0].getSessionDate()));
}

function updateSeatPrices(session) {
    var date = new Date(2017, 8, WEDNESDAY, 14);

    if (session.substring(0, 3) === 'MON' || session.substring(0, 3) === 'TUE'
        || session === 'WED-01' || session === 'THU-01' || session === 'FRI-01') {
        date = new Date(2017, 8, MONDAY, 12);
    }

    var pricing = new Pricing(date);

    document.getElementsByClassName('sAdult')[0].innerHTML = pricing.sAdult();
    document.getElementsByClassName('sChild')[0].innerHTML = pricing.sChild();
    document.getElementsByClassName('sConcession')[0].innerHTML = pricing.sConcession();

    document.getElementsByClassName('fcAdult')[0].innerHTML = pricing.fcAdult();
    document.getElementsByClassName('fcChild')[0].innerHTML = pricing.fcChild();

    document.getElementsByClassName('bbAdult')[0].innerHTML = pricing.bbAdult();
    document.getElementsByClassName('bbChild')[0].innerHTML = pricing.bbChild();
    document.getElementsByClassName('bbFamily')[0].innerHTML = pricing.bbFamily();
}
