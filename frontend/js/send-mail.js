const nodemailer = require('nodemailer');

let transporter = nodemailer.createTransport({
        host: "smtp.gmail.com",
        port: 587,
        segure: true,
        auth: {
                user: "emilymarcelino59@gmail.com",
                pass: "1234abc"
        }
});