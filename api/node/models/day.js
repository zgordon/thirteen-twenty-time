
// Dependencies
var restful = require('node-restful');
var mongoose = restful.mongoose;

// Schema
var daySchema = new mongoose.Schema({
    moon: Number,
    dayNum: Number,
    dayName: String
});

// Return model
module.exports = restful.model('Day', daySchema);
