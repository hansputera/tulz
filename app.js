const express = require('express');

const app = new express();

app.use('view engine','ejs');

app.get('/', async (req,res){
 res.sendFile('./index.html');
})

