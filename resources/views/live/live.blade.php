<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMD 2024</title>
    <link rel="stylesheet" href="https://smd2024.sourcedart.org/css/reduffusion/main.css">
    <link rel="stylesheet" href="https://smd2024.sourcedart.org/css/reduffusion/css/css1.css">
    <!-------------La chatgraphi------------------>
    <link rel="stylesheet" href="https://smd2024.sourcedart.org/css/reduffusion/css/GlobaleColor.css">
    <link rel="stylesheet" href="https://smd2024.sourcedart.org/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://smd2024.sourcedart.org/css/live.css">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://smd2024.sourcedart.org/css/photos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #ffffff;
        }

        .video-container {
            position: relative;
            width: 100%;
            padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark " style="background: #D1EAF1">
        <div class="container-fluid ">
            <a class="navbar-brand" href="{{url('/')}}"><i class="fa-solid fa-house fa-xl" style="color: #ffffff;"></i>
                Accueil</a>
        </div>
    </nav>

    <!-- Video Section -->
    <div class="video-container" id="contest">
        <iframe id="videoFrame" src="https://www.youtube.com/embed/VgDytOsG6Xo?si=uRLzktAeA2cy3PCg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <script src="js/js/js/js.js"></script>
    <!-- lien de live -->
    <a hidden id="cmclive" class="glightbox"></a>
    <script src="https://smd2024.sourcedart.org/js/js/js/jquery.js"></script>
    <script src="https://smd2024.sourcedart.org/js/js/js/bootstrap.bundle.min.js"></script>
    <script src="https://smd2024.sourcedart.org/js/js/js/glightbox.min.js" id="glightbox"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        window.addEventListener('load', function () {
            const hiddenLink = document.querySelector('.privideo');
            hiddenLink.click();
        });

        // Function to make the iframe full screen
        function toggleFullScreen() {
            var elem = document.getElementById("videoFrame");
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.mozRequestFullScreen) { /* Firefox */
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { /* IE/Edge */
                elem.msRequestFullscreen();
            }
        }

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>

</body>

</html>
