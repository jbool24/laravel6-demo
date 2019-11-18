import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom";
import useSocket from "use-socket.io-client";

const socketioOpts = { transports: ["websocket"], upgrade: false };

function JokeBoard() {
    const [jokes, updateJokes] = useState([]);
    const [socket] = useSocket("ws://localhost:8000/socket.io/", socketioOpts);

    useEffect(() => {
        console.log("Component Setup");

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
                    : jokes.map(joke => (
                          <p class="px-4 py-2">
                              <span class="text-green-300">{joke.user}</span>:
                              {joke.value}
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
