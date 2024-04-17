<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>No Results Page</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-topic-listing.css" rel="stylesheet">

    </head>
    
    <body id="top">

        <main>

        @include('frontend.navbar')
            
        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Homepage</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Results</li>
                            </ol>
                        </nav>
                        <h2 class="text-white">Results to <br> Big Five Test</h2>
                    </div>

                </div>
            </div>
        </header>

        <section class="topics-detail-section section-padding" id="topics-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 m-auto">
                        <h3 class="mb-4">Results</h3>

                        <p>No results available. Please take the test to view your results.</p>

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
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </body>
</html>