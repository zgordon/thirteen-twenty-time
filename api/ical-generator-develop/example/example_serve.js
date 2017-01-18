'use strict';

var ical = require('../lib/'),
	http = require('http'),
	express = require('express'),
	api = express(),
	bodyParser = require('body-parser'),
	_ = require('underscore'),
	cal = ical({domain: '28daycalendar.com', name: '28 Day Calendar Feed'}),
	moment = require('moment'),
	doot = moment('2016-07-25'),
	firstDay = moment(doot).add(1, 'day'),
	lastDay = moment(doot).subtract(1, 'day'),
	days = [],
	feed;


function createEvent() {
	let thisDay = moment(doot+1).add(cal.events().length, 'days');

	cal.createEvent({
		start: moment(thisDay).format(),
		end: moment(thisDay).add(1, 'hour').format(),
		summary: 'Day from DOOT ',
		description: 'It works ;)',
    });
};

_(5).times(createEvent);

//
// http.createServer(function(req, res) {
//     cal.serve(res);
// }).listen(3001, 'localhost', function() {
//     console.log('Server running at http://localhost:3001/');
//     // console.log( days[0].events[0].start );
//     // console.log( feed );
// });

api.use(bodyParser.urlencoded({ extended: true }));
api.use(bodyParser.json());

api.get('/index.json', function(req, res) {
	res.send( JSON.stringify({"status":"go"}) );
});

api.listen(3000);
console.log( 'The audience is listening' );
