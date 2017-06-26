var express = require('express')
var router = express.Router()

router.get('getListOfAuctions', function(req, res){
    //Get all auctions from DB
    //Returns it to the client
})

router.post('auctionRise', function(req, res){
    //Rise action, save user and value in DB
    //return to the client, if operation complete
})

router.post('addAuction', function(req, res){
    //Add auction, save it into DB
    //Think about add image to the DB
})

module.exports = router;