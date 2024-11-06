<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            grid-gap: 15px;
            margin: 20px;
        }
        .gallery img {
            width: 100%;
            height: auto;
        }
        .upload-form {
            margin: 20px;
        }
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            border: 2px solid #4CAF50;
            padding: 20px;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .popup.show {
            display: block;
        }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 500;
        }
        .overlay.show {
            display: block;
        }
    </style>
</head>
<body>

    <div class="upload-form">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label>Select image to upload (JPEG, PNG, GIF only, max 3MB):</label><br><br>
            <input type="file" name="image" required><br><br>
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>

    <div class="gallery">
        <?php
        $dir = 'uploads/';
        if (is_dir($dir)) {
            $files = scandir($dir);
            foreach ($files as $file) {
                if ($file != '.' && $file != '..' && (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file))) {
                    echo '<div><img src="uploads/' . htmlspecialchars($file) . '" alt="Image"></div>';
                }
            }
        }
        ?>
    </div>

    <div class="popup" id="successPopup">
        <p>Image uploaded successfully!</p>
        <button onclick="closePopup()">OK</button>
    </div>
    <div class="overlay" id="overlay"></div>

    <script>
        function closePopup() {
            document.getElementById('successPopup').classList.remove('show');
            document.getElementById('overlay').classList.remove('show');
        }

        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('upload') && urlParams.get('upload') === 'success') {
                document.getElementById('successPopup').classList.add('show');
                document.getElementById('overlay').classList.add('show');
            }
        };
    </script>

</body>
</html>