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
                                <li class="breadcrumb-item"><a href="/">Homepage</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Make Test</li>
                            </ol>
                        </nav>
                        <h2 class="text-white">Big Five Personality Test</h2>
                    </div>
                </div>
            </div>
        </header>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-12 mt-3 mx-auto">
                        <!-- Form begins -->
                        <form action="{{ route('submit.test') }}" method="post" class="custom-form contact-form" role="form">
                            @csrf 
                            <div id="section1"> 
                                <h5 class="mb-4 text-center">Introduceți informațiile solicitate mai jos</h5>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="name" id="name" class="form-control" placeholder=" " value="" required>
                                            <label for="name">Nume:</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="number" name="age" id="age" class="form-control" placeholder=" " value="" required>
                                            <label for="age">Vârstă:</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12 mb-4">
                                        <div class="form-floating">
                                            <select class="form-control" id="sex" name="sex" required>
                                                <option value="" disabled selected>Selectează sexul</option>
                                                <option value="male">Masculin</option>
                                                <option value="female">Feminin</option>
                                            </select>
                                            <label for="sex">Sex:</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12 mt-4 mb-4 d-flex justify-content-end">
                                    <button type="button" class="btn custom-border-btn" id="fillRandom">Completeaza aleator</button>
                                </div>

                                <div class="timeline-container">
                                    <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                        <div class="list-progress">
                                            <div class="inner"></div>
                                        </div>
                                        <!-- Single Topic -->
                                        @foreach($questions->take(60) as $question)
                                        <li>
                                            <div class="icon-holder">
                                                <i> Nr {{ $question->id }}</i>
                                            </div>
                                            <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                                <div class="d-flex">
                                                    <div class="custom-block-topics-listing-info d-flex">
                                                        <div>
                                                            <h5 class="mb-2">{{ $question->text }}</h5>
                                                            @for($i = 1; $i <= 5; $i++)
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="{{ $question->id }}_{{ $i }}" name="rating_{{ $question->id }}" value="{{ $i }}" required>
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="col-lg-12 col-12">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center mb-0">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">Inainte</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <div id="section2" class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>
                                    <!-- Single Topic -->
                                    @foreach($questions->slice(60) as $question)
                                    <li>
                                        <div class="icon-holder">
                                            <i> Nr {{ $question->id }}</i>
                                        </div>
                                        <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                            <div class="d-flex">
                                                <div class="custom-block-topics-listing-info d-flex">
                                                    <div>
                                                        <h5 class="mb-2">{{ $question->text }}</h5>
                                                        @for($i = 1; $i <= 5; $i++)
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" id="{{ $question->id }}_{{ $i }}" name="rating_{{ $question->id }}" value="{{ $i }}" required>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="col-lg-12 col-12">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center mb-0">
                                            <li class="page-item">    
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">Inapoi</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <button type="submit" class="btn custom-btn-login" aria-label="Submit">
                                                    Trimite
                                                </button>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>  
                        </form>
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

    <script>
        const nextBtn = document.querySelector('[aria-label="Next"]');
        const prevBtn = document.querySelector('[aria-label="Previous"]');

        const section1 = document.getElementById('section1');
        const section2 = document.getElementById('section2');

        section2.style.display = 'none';

        nextBtn.addEventListener('click', function() {
            section1.style.display = 'none';
            section2.style.display = 'block';
        });

        prevBtn.addEventListener('click', function() {
            section1.style.display = 'block';
            section2.style.display = 'none';
        });

        document.addEventListener('DOMContentLoaded', function () {
            const fillRandomBtn = document.getElementById('fillRandom');

            fillRandomBtn.addEventListener('click', function () {
                const questionsCount = 120;
                
                for (let i = 1; i <= questionsCount; i++) {
                    const rating = Math.floor(Math.random() * 5) + 1;
                    const radioBtn = document.querySelector(`input[name="rating_${i}"][value="${rating}"]`);
                    
                    if (radioBtn) {
                        radioBtn.checked = true;
                    }
                }
            });
        });
    </script>
</body>
</html>