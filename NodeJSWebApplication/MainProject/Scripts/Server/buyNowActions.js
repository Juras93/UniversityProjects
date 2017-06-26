var express = require('express')
var router = express.Router()

router.get('getElementsToBuy', function(req, res){
    //Get all elements from DB
    //Returns it to the client
})

router.post('buyElement', function(req, res){
    //buy element, save user whos buy the element
    //return to the client, if operation complete
})

router.post('addElementToBuy', function(req, res){
    //Add element, save it into DB
    //Think about add image to the DB
})

module.exports = router;