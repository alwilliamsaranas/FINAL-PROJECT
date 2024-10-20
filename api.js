import nodemailer from 'nodemailer';

export default async function handler(req, res) {
  if (req.method === 'POST') {
    const { status } = req.body;

    let transporter = nodemailer.createTransport({
      service: 'gmail',
      auth: {
        user: 'williamsaranas@gmail.com',
        pass: 'Al12092002',
      },
    });

    let mailOptions = {
      from: 'williamsaranas@gmail.com',
      to: 'jay.valencia072000@gmail.com',
      subject: Light Status: ${status},
      text: The light has been turned ${status}.,
    };

    try {
      await transporter.sendMail(mailOptions);
      res.status(200).json({ message: 'Email sent!' });
    } catch (error) {
      res.status(500).json({ message: 'Error sending email', error });
    }
  } else {
    res.status(405).json({ message: 'Only POST requests allowed' });
  }
}
