<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voice Recorder</title>
    <meta http-equiv="Content-Security-Policy" content="default-src 'self' https: data: blob: 'unsafe-inline' 'unsafe-eval'; media-src 'self' blob:;">
</head>

<body>
    <h2>Record Your Voice</h2>

    <!-- Form to submit the recorded voice -->
    <form id="voiceForm" action="{{ route('voice') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <button type="button" id="recordButton">Start Recording</button>
        <button type="button" id="stopButton" disabled>Stop Recording</button>
        <br><br>
        <audio id="audioPlayback" controls></audio>
        <br><br>
        <input type="hidden" name="voice_data" id="voiceData">
        <button type="submit" disabled id="submitBtn">Submit Recording</button>
    </form>

    <script>
        let recordButton = document.getElementById('recordButton');
        let stopButton = document.getElementById('stopButton');
        let submitBtn = document.getElementById('submitBtn');
        let audioPlayback = document.getElementById('audioPlayback');
        let voiceData = document.getElementById('voiceData');
        let mediaRecorder;
        let audioChunks = [];

        // Start recording
        recordButton.addEventListener('click', async () => {
            audioChunks = [];
            let stream = await navigator.mediaDevices.getUserMedia({
                audio: true
            });
            mediaRecorder = new MediaRecorder(stream);
            mediaRecorder.start();
            recordButton.disabled = true;
            stopButton.disabled = false;

            mediaRecorder.addEventListener('dataavailable', event => {
                audioChunks.push(event.data);
            });

            mediaRecorder.addEventListener('stop', () => {
                let audioBlob = new Blob(audioChunks, {
                    type: 'audio/webm'
                });
                let audioUrl = URL.createObjectURL(audioBlob);
                audioPlayback.src = audioUrl;

                // Convert the audio blob to Base64
                let reader = new FileReader();
                reader.readAsDataURL(audioBlob);
                reader.onloadend = function() {
                    voiceData.value = reader.result;
                    submitBtn.disabled = false;
                };
            });
        });

        // Stop recording
        stopButton.addEventListener('click', () => {
            mediaRecorder.stop();
            recordButton.disabled = false;
            stopButton.disabled = true;
        });
    </script>
</body>

</html>
