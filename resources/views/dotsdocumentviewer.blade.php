<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Document Viewer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <style>
        #viewerContainer {
            background: #212121;
        }
        #documentViewer {
            width: 100%;
            height: 80vh;
            border: 1px solid #444;
            border-radius: 0.5rem;
        }
        .control-button {
            background-color: #333;
            color: #fbbf24; /* Tailwind's yellow-400 */
            border: 1px solid #444;
            border-radius: 0.25rem;
        }
        .control-button:hover {
            background-color: #444;
            color: #facc15; /* Tailwind's yellow-300 */
        }
    </style>
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen p-4">

    <div id="viewerContainer" class="w-full max-w-4xl p-4 bg-gray-800 rounded-lg shadow-lg">
        
        <div id="documentViewer" class="relative overflow-hidden">
            <iframe src="{{ url(Storage::url($constants['ROOTPATH'].$file->path)) }}" class="w-full h-full frame"></iframe>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.3.122/pdf.min.js"></script>
    <script>
        const fileInput = document.getElementById('fileInput');
        const documentViewer = document.getElementById('documentViewer');
        const downloadBtn = document.getElementById('downloadBtn');

        fileInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const fileType = file.type;

                // Clear previous content
                documentViewer.innerHTML = '';

                // Create URL for file
                const fileURL = URL.createObjectURL(file);

                if (fileType.startsWith('image/')) {
                    // Display image
                    const img = document.createElement('img');
                    img.src = fileURL;
                    img.classList.add('w-full', 'h-auto', 'rounded-lg');
                    documentViewer.appendChild(img);
                } else if (fileType === 'application/pdf') {
                    // Display PDF
                    const pdfViewer = document.createElement('iframe');
                    pdfViewer.src = fileURL;
                    pdfViewer.classList.add('w-full', 'h-full', 'rounded-lg');
                    documentViewer.appendChild(pdfViewer);
                } else if (fileType.startsWith('text/')) {
                    // Display text
                    const reader = new FileReader();
                    reader.onload = function() {
                        const text = document.createElement('pre');
                        text.textContent = reader.result;
                        text.classList.add('whitespace-pre-wrap', 'p-4', 'bg-gray-900', 'text-yellow-400', 'rounded-lg');
                        documentViewer.appendChild(text);
                    };
                    reader.readAsText(file);
                } else {
                    alert('Unsupported file format');
                }
            }
        });

        // Download Button Functionality
        downloadBtn.addEventListener('click', () => {
            const file = fileInput.files[0];
            if (file) {
                const fileURL = URL.createObjectURL(file);
                const link = document.createElement('a');
                link.href = fileURL;
                link.download = file.name;
                link.click();
                URL.revokeObjectURL(fileURL);
            }
        });
    </script>
</body>
</html>
