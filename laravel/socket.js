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

function subscribe(channels, cb) {
    redisClient.subscribe(channels, (err, subCount) => {
        if (err) return console.log(err);

        if (subCount >= 1) {
            redisClient.on("message", (c, m) => cb(c, m));
        }
    });
}

io.on("connection", function(socket) {
    console.log("CONNECTED");

    socket.emit("jokes", { event: "UserJoked", joke: "Ready!" });

    subscribe(["jokes", "laravel_database_jokes"], (c, m) => {
        socket.emit(c, m);
    });

    socket.on("jokes", function(data) {
        console.log(data);
    });
});
