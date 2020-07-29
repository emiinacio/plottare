const express = require("express")
const server = express()

server.use(express.static("public"))

const nunjucks = require("nunjucks")
nunjucks.configure("src/views", {
    express: server, 
    noCache: true
})

server.get("/", (req, res) => {
    return res.render("index.html")
})

server.get("/contato", (req,res) => {
    return res.render("contact.html")
})

server.get("/galeria", (req, res) => {
    return res.render("gallery.html")
})



server.listen(3000)