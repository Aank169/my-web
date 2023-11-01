<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Viewer and Downloader</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
        }

        .pdf-viewer {
            text-align: center;
        }

        .pdf-link {
            display: block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CODE WITH ANKUSH</h1>
        <p>Click the link below to download the PDF:</p>
        <a class="pdf-link" href="html notes.pdf" download>Download PDF</a>
        <div class="pdf-viewer">
            <embed src="example.pdf" type="application/pdf" width="100%" height="500">
        </div>
    </div>
</body>
</html>
