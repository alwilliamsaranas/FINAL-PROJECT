export default function handler(req, res) {
    if (req.method === 'POST') {
        const sensorData = req.body;
        console.log(sensorData); // Log received data
        res.status(200).json({ message: 'Data received' });
    } else {
        res.setHeader('Allow', ['POST']);
        res.status(405).end(`Method ${req.method} Not Allowed`);
    }
}
