<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Test Page</title>

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
                <div class="row align-items-center">
                    <div class="col-lg-8 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Homepage</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Make Test</li>
                            </ol>
                        </nav>
                        <h2 class="text-white">Big Five Personality Test</h2>
                    </div>
                </div>
            </div>
        </header>
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-12 mt-3 mx-auto">
                        @if ($questions->currentPage() == 1)
                        <h5 class="mb-4 text-center">Introduceți informațiile solicitate mai jos</h5>
                        <!-- Formularul pentru introducerea datelor personale -->
                        <form action="/maketest/submit" method="post" class="custom-form contact-form" role="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="name" id="name" class="form-control" placeholder=" ">
                                        <label for="name">Nume:</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="number" name="age" id="age" class="form-control" placeholder=" ">
                                        <label for="age">Vârstă:</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12 mb-4">
                                    <div class="form-floating">
                                        <select class="form-control" id="sex" name="sex">
                                            <option value="male">Masculin</option>
                                            <option value="female">Feminin</option>
                                        </select>
                                        <label for="sex">Sex:</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endif
                        <!-- Container pentru intrebari -->
                        <div class="timeline-container">
                            <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                <div class="list-progress">
                                    <div class="inner"></div>
                                </div>
                                <!-- Single Topic -->
                                @foreach($questions as $question)
                                <li>
                                    <div class="icon-holder">
                                        <i> Nr {{ $question->id }}</i>
                                    </div>
                                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                        <div class="d-flex">
                                            <div class="custom-block-topics-listing-info d-flex">
                                                <div>
                                                    <h5 class="mb-2">{{ $question->text }}</h5>
                                                    <form action="/maketest/submit" method="post" class="d-flex flex-row justify-content-between">
                                                        @for($i = 1; $i <= 5; $i++)
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" id="{{ $question->id }}_{{ $i }}" name="rating_{{ $question->id }}" value="{{ $i }}">
                                                            <label class="form-check-label" for="{{ $question->id }}_{{ $i }}">
                                                                @if($i == 1)
                                                                Dezacord total
                                                                @elseif($i == 2)
                                                                Dezacord
                                                                @elseif($i == 3)
                                                                Neutru
                                                                @elseif($i == 4)
                                                                Acord
                                                                @else
                                                                Acord total
                                                                @endif
                                                            </label>
                                                        </div>
                                                        @endfor
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                
                        <div class="col-lg-12 col-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item">
                                        @if ($questions->previousPageUrl())
                                            <a class="page-link" href="{{ $questions->previousPageUrl() }}" aria-label="Previous">
                                                <span aria-hidden="true">Inapoi</span>
                                            </a>
                                        @endif
                                    </li>
                                    <li class="page-item">
                                        @if ($questions->currentPage() == $questions->lastPage())
                                            <button type="submit" class="btn custom-btn page-link">Trimite</button>
                                        @endif
                                    </li>
                                    <li class="page-item">
                                        @if ($questions->nextPageUrl())
                                            <a class="page-link" href="{{ $questions->nextPageUrl() }}" aria-label="Next">
                                                <span aria-hidden="true">Inainte</span>
                                            </a>
                                        @endif
                                    </li>
                                </ul>
                            </nav>
                        </div>
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
    <script src="js/click-scroll.js"></script>
</body>
</html>