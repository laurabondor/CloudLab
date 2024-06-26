<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>About Page</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-topic-listing.css" rel="stylesheet">

    </head>
    
    <body class="topics-listing-page" id="top">

        <main>

        @include('frontend.navbar')

        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-5 col-12 mb-5">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Homepage</a></li>

                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                        <h2 class="text-white">About Page</h2>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="topics-detail-block bg-white shadow-lg">
                            <img src="https://www.organimi.com/wp-content/uploads/2021/09/AdobeStock_231454651-scaled.jpeg" class="topics-detail-block-image img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <section class="topics-detail-section section-padding" id="topics-detail">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 m-auto">

                        <blockquote>
                            About Big Five Personality Test based on the five dimensions of person
                        </blockquote>

                        <div class="row my-4">
                            <div class="col-lg-6 col-md-6 col-12">
                                <img src="images/businesswoman-using-tablet-analysis.jpg" class="topics-detail-block-image img-fluid">
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0 mt-md-0">
                                <img src="images/colleagues-working-cozy-office-medium-shot.jpg" class="topics-detail-block-image img-fluid">
                            </div>
                        </div>

                        <p> The Big Five, also known as the Five-Factor Model, is a widely recognized framework in psychology that describes five broad dimensions of personality. These dimensions capture the most significant and meaningful variations in human personality traits. Here they are: Openness to Experience, Conscientiousness, Extraversion, Agreeableness and Neuroticism. </p>
                    </div>

                </div>
            </div>
        </section>  

        </main>

        @include('frontend.footer')

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>