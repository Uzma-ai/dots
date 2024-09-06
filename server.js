import express from 'express';
import { createServer } from 'node:http';
import { Server } from 'socket.io';
import cors from 'cors';
import http from "http";

const server = http.createServer((req, res) => {
    res.statusCode = 200;
    res.setHeader("Content-Type", "text/plain");
    res.end("Hello World\n");
});

const PORT = 3000;
server.listen(PORT, () => {
    console.log(`Server running at http://localhost:${PORT}/`);
});
// const app = express();
// app.use(express.json());
// const server = createServer(app);
// const io = new Server(server, {
//     cors: {
//         origin: true,
//         methods: ["GET", "POST"]
//     }
// });


// app.get('/node', (req, res) => {
//     res.send('<h1>Hello world</h1>');
// });

// app.post('/sendNotice', (req, res) => {
//     const { user, data } = req.body;
//     io.emit('receiveNotificationToUser_' + user, data);
//     res.sendStatus(200);
// });

// io.on('connection', (socket) => {
//     socket.on('sendNotice', (obj) => {
//         socket.broadcast.emit('receiveNotificationToUser_' + obj.user, obj.data);
//     });
// });

// const port = 3000;

// server.listen(port, () => {
//     console.log(`Server running on http://localhost:${port}`);
// });
