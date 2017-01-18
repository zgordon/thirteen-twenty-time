
// Dependencies
var 	express = require('express'),
	api = express(),
	mongoose = require('mongoose'),
	bodyParser = require('body-parser');
	
// MongoDB
mongoose.connect('mongodb://localhost/rest_test');

// Express

api.use(bodyParser.urlencoded({ extended: true }));
api.use(bodyParser.json());

// Routes
api.use('/api', require('./routes/api'));

// Start server
api.listen(3000);
console.log('API is running on port 3000');
