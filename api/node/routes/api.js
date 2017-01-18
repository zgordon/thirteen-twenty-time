
// Dependencies
var express = require('express');
var router = express.Router();

// Models
var Day = require('../models/day');

// Routes
Day.methods(['get']);
Day.register(router, '/day');

// Return router
module.exports = router;
