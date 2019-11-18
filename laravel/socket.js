require("dotenv").config();

const app = require("express")();
const server = require("http").Server(app);
const io = require("socket.io")(server);
const Redis = require("ioredis");

const redisClient = new Redis({
    host: process.env.REDIS_HOST,
    port: process.env.REDIS_PORT
});

server.listen(6001, () => {
    console.log("Listening...");
});

redisClient.subscribe("laravel_database_jokes", (err, subCount) => {
    if (err) return console.log(err);

    if (subCount >= 1) {
        redisClient.on("message", (c, m) => console.log(c, m));
    }
});

io.on("connection", function(socket) {
    console.log("CONNECTED");
    console.log("TODO SETUP REDIS CONNECTION");

    socket.emit("jokes", { event: "UserJoked", hello: "world" });

    socket.on("jokes", function(data) {
        console.log(data);
    });
});
