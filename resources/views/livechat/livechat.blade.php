<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat</title>
    <!-- Includi Axios e Pusher -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        // Abilita il logging di Pusher - non includerlo in produzione
        Pusher.logToConsole = true;

        var pusher = new Pusher('{{ env("PUSHER_APP_KEY") }}', {
            cluster: '{{ env("PUSHER_APP_CLUSTER") }}',
            encrypted: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            var messages = document.getElementById('messages');
            var message = document.createElement('div');
            message.innerText = data.message;
            messages.appendChild(message);
        });

        function sendMessage() {
            var message = document.getElementById('message').value;

            axios.post('{{ route("send-message") }}', {
                message: message
            })
            .then(function (response) {
                console.log(response);
                document.getElementById('message').value = '';
            })
            .catch(function (error) {
                console.error(error);
            });
        }
    </script>
</head>
<body>
    <h1>Live Chat</h1>
    <div id="messages"></div>
    <form onsubmit="sendMessage(); return false;">
        <input type="text" id="message" placeholder="Scrivi un messaggio...">
        <button type="submit">Invia</button>
    </form>
</body>
</html>