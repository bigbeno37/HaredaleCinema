var timetable = new TimeTable();

var movies = {
    emoji: new Movie("The Emoji Movie", "CH"),
    warplanet: new Movie("War for the Planet of the Apes", "AC"),
    dunkirk: new Movie("Dunkirk", "AF"),
    bigsick: new Movie("The Big Sick", "RC")
};

// 4 is monday
// 10 is sunday

var MONDAY = 3, TUESDAY = 4, WEDNESDAY = 5, THURSDAY = 6,
    FRIDAY = 7, SATURDAY = 8, SUNDAY = 9;

timetable.addSessionWithMovieOnDays(movies.emoji, [MONDAY, TUESDAY], 13);
timetable.addSessionWithMovieOnDays(movies.emoji, [WEDNESDAY, THURSDAY, FRIDAY], 18);
timetable.addSessionWithMovieOnDays(movies.emoji, [SATURDAY, SUNDAY], 12);

timetable.addSessionWithMovieOnDays(movies.warplanet, [WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY], 21);

timetable.addSessionWithMovieOnDays(movies.dunkirk, [MONDAY, TUESDAY], 18);
timetable.addSessionWithMovieOnDays(movies.dunkirk, [SATURDAY, SUNDAY], 15);

timetable.addSessionWithMovieOnDays(movies.bigsick, [MONDAY, TUESDAY], 21);
timetable.addSessionWithMovieOnDays(movies.bigsick, [WEDNESDAY, THURSDAY, FRIDAY], 13);
timetable.addSessionWithMovieOnDays(movies.bigsick, [SATURDAY, SUNDAY], 18);
