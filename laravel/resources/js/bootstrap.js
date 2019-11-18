window._ = require("lodash");

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require("popper.js").default;
    window.$ = window.jQuery = require("jquery");

    require("bootstrap");
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */
//
// import Echo from "laravel-echo";
//
// import io from "socket.io-client";
//
// // const echo = new Echo({
// //     broadcaster: "socket.io",
// //     host: `http://${window.location.hostname}:6002`,
// //     client: io,
// //     socketio: {
// //         reconnect: true
// //     },
// //     auth: {
// //         headers: {
// //             Authorization: "Bearer 65fa7ba83931c5052ed55d4b8f872bbe"
// //         }
// //     }
// // });
// //
// // echo.channel("jokes").listen("UserJoked", e => console.log(e));
