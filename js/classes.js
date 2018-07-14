function Movie(name, category) {
    this._name = name;
    this._category = category;

    this.getName = function() {
        return this._name;
    };

    this.getCategory = function() {
        return this._category
    };
}

function Session(movie, date) {
    this._movie = movie;
    this._date = date;

    this.getMovie = function() {
        return this._movie;
    };

    this.getSessionDate = function() {
        return this._date;
    };
}

function TimeTable() {
    this._sessions = [];

    this.getSessions = function() {
        return this._sessions;
    };

    this.getSessionsWith = function(movie) {
        var session = [];

        for (var i = 0; i < this._sessions.length; i++) {
            if (this._sessions[i].getMovie() === movie) {
                session.push(this._sessions[i]);
            }
        }

        return session;
    };

    this.addSession = function(session) {
        this._sessions.push(session);
    };

    this.addSessionWithMovieOnDays = function(movie, days, time) {
        for (var i = 0; i < days.length; i++) {
            this._sessions.push(new Session(movie, new Date(2017, 8, days[i], time)));
        }
    }
}

function Pricing(date) {
    this._date = date;

    this._determinePrice = function(standardPrice, alternatePrice) {
        // If the day is monday or tuesday
        // OR 1PM on every weekday
        if (this._date.getDay() === 0 || this._date.getDay() === 1
            || (this._date.getDay() < 6 && this._date.getHours() === 13)) {
            return alternatePrice;
        }

        return standardPrice;
    };

    this.sAdult = function() {
        return this._determinePrice(18.50, 12.50).toFixed(2);
    };

    this.sChild = function() {
        return this._determinePrice(12.50, 8.50).toFixed(2);
    };

    this.sConcession = function() {
        return this._determinePrice(15.50, 10.50).toFixed(2);
    };

    this.fcAdult = function() {
        return this._determinePrice(30, 25).toFixed(2);
    };

    this.fcChild = function() {
        return this._determinePrice(25, 20).toFixed(2);
    };

    this.bbAdult = function() {
        return this._determinePrice(33, 22).toFixed(2);
    };

    this.bbChild = function() {
        return this._determinePrice(30, 20).toFixed(2);
    };

    this.bbFamily = function() {
        return this._determinePrice(30, 20).toFixed(2);
    }
}
