var express = require('express')
var router = express.Router()

router.post('signIn', function(req, res){
    //Connect to database
    //Login session
    //Return session to Client
})

router.post('logout', function(req, res){
    //Remove session from database
    //Logout user from Client
})

router.post('signUp', function(req, res){
    //Create account for a user in the database
    //Return information about account into client
})
module.exports = router;
