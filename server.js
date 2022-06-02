var express = require("express");
var app =  express();
app.use(express.static("public"));

app.use("/scripts", express.static(__dirname+"/node_modules/web3.js-browser/build/"));

var server = require("http").Server(app);
var io = require("socket.io")(server);


var bodyParser = require("body-parser");
app.use(bodyParser.urlencoded({extended:false}));


