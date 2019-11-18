import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom";
import useSocket from "use-socket.io-client";

const socketioOpts = {};

function JokeBoard() {
    const [jokes, updateJokes] = useState([]);
    const [socket] = useSocket("http://localhost:6001/", socketioOpts);

    function msgHandler(msg) {
        console.log(msg.data);
        updateJokes([
            ...jokes,
            { username: msg.data.username, value: msg.data.joke }
        ]);
    }

    useEffect(() => {
        console.log("Component Setup");

        socket.on("connect", e => console.log("Connected"));
        socket.on("jokes", data => console.log(data));
        socket.on("laravel_database_jokes", data => {
            console.log(data);
            msgHandler(JSON.parse(data));
        });

        socket.connect();

        return () => {
            console.log("Component Teardown");
            socket.disconnect();
        };
    });

    return (
        <div className="mt-8 py-4">
            <details className="bg-black text-white" open>
                <summary className="bg-white text-black p-4 shadow-md">
                    Expand to see what others have heard...
                </summary>

                {jokes.length === 0
                    ? null
                    : jokes.map((joke, idx) => (
                          <p
                              key={`${joke.username}-${idx}`}
                              className="px-4 py-2"
                          >
                              <span className="text-green-300 font-bold">
                                  {joke.username}
                              </span>
                              :
                              <span className="font-light pl-4">
                                  {joke.value}
                              </span>
                          </p>
                      ))}
            </details>
        </div>
    );
}

export default JokeBoard;

if (document.getElementById("app")) {
    ReactDOM.render(<JokeBoard />, document.getElementById("app"));
}
