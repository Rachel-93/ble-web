require("dotenv").config();
const express = require("express");
const nodemailer = require("nodemailer");
const cors = require("cors");

const app = express();
app.use(express.json());
app.use(cors({
  origin: [
    "https://bleglobal.com.my",
    "https://www.bleglobal.com.my",
    "http://localhost:5173"
  ]
}));

// Health check for Render
app.get("/", (req, res) => {
  res.status(200).json({ status: "ok" });
});

// Email sending API
app.post("/send-email", async (req, res) => {
  const { from, subject, text } = req.body;

  console.log("Incoming email request:", { from, subject, text });

  if (!from || !subject || !text) {
    console.error("Missing fields:", { from, subject, text });
    return res.status(400).json({ error: "All fields are required!" });
  }

  try
  {
    const transporter = nodemailer.createTransport({
      host: process.env.SMTP_HOST,
      port: process.env.SMTP_PORT,
      secure: process.env.SMTP_SECURE === "true",
      auth: {
        user: process.env.SMTP_USER,
        pass: process.env.SMTP_PASS
      }
    });

    const info = await transporter.sendMail({
      from: process.env.SMTP_USER,
      replyTo: from,
      to: process.env.SMTP_USER,
      subject: `[Website Enquiry] ${subject}`,
      text: `From: ${from}\n\n${text}`
    });
    
    console.log("Email sent successfully:", info.response);
    res.status(200).json({ message: "Email sent successfully!" });
  } catch (error) {
      console.error("Error sending email:", error);
      res.status(500).json({ error: error.message });
  }
});

// Start server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => console.log(`Server running on port ${PORT}`));
  