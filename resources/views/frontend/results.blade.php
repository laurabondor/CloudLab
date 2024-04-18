<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Results Page</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-topic-listing.css" rel="stylesheet">

        <!-- Chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 col-12 mt-3 mx-auto">
                        <div class="timeline-container">
                            <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                <li>
                                    <div class="icon-holder">
                                        <i class="bi bi-emoji-laughing"></i>
                                    </div>
                                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                        <div class="d-flex">
                                            <div class="custom-block-topics-listing-info d-flex">
                                                <div>
                                                    <h6 class="mb-3">EXTRAVERSION - {{ $result->EXTRAVERSION }}%</h6>
                                                    <p>Extraversion reflects people's tendency to be outgoing and social versus solitary and reserved.</p>
                                                    <canvas id="extraversionChart" class="mx-auto my-4" width="600" height="300"></canvas>          
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <i class="bi bi-heart"></i>
                                    </div>
                                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                        <div class="d-flex">
                                            <div class="custom-block-topics-listing-info d-flex">
                                                <div>
                                                    <h6 class="mb-3">AGREEABLENESS - {{ $result->AGREEABLENESS }}%</h6>
                                                    <p>Agreeableness relates to a person's tendency to be compassionate and cooperative rather than suspicious and antagonistic towards others.</p>
                                                    <canvas id="agreeablenessChart" class="mx-auto my-4" width="600" height="300"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <i class="bi bi-check2"></i>
                                    </div>
                                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                        <div class="d-flex">
                                            <div class="custom-block-topics-listing-info d-flex">
                                                <div>
                                                    <h6 class="mb-3">CONSCIENTIOUSNESS - {{ $result->CONSCIENTIOUSNESS }}%</h6>
                                                    <p>Conscientiousness is about being responsible, dependable, and organized.</p>
                                                    <canvas id="conscientiousnessChart" class="mx-auto my-4" width="600" height="300"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <i class="bi bi-emoji-neutral"></i>
                                    </div>
                                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                        <div class="d-flex">
                                            <div class="custom-block-topics-listing-info d-flex">
                                                <div>
                                                    <h6 class="mb-3">NEUROTICISM - {{ $result->NEUROTICISM }}%</h6>
                                                    <p>Neuroticism relates to emotional stability and impulse control.</p>
                                                    <canvas id="neuroticismChart" class="mx-auto my-4" width="600" height="300"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <i class="bi bi-lightbulb"></i>
                                    </div>
                                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                        <div class="d-flex">
                                            <div class="custom-block-topics-listing-info d-flex">
                                                <div>
                                                    <h6 class="mb-3">OPENNESS - {{ $result->OPENNESS }}%</h6>
                                                    <p>Openness involves creativity, curiosity, and a willingness to try new things.</p>
                                                    <canvas id="opennessChart" class="mx-auto my-4" width="600" height="300"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var createBarChart = function(canvasId, labels, data) {
                                            var ctx = document.getElementById(canvasId).getContext('2d');
                                            if (!ctx) {
                                                console.error("Canvas context not found for ID: " + canvasId);
                                                return;
                                            }

                                            var chart = new Chart(ctx, {
                                                type: 'bar',
                                                data: {
                                                    labels: labels,
                                                    datasets: [{
                                                        label: 'Score',
                                                        data: data,
                                                        backgroundColor: [
                                                            '#FF6384',
                                                            '#36A2EB',
                                                            '#FFCE56',
                                                            '#4BC0C0',
                                                            '#FF9F40',
                                                            '#9966FF'
                                                        ],
                                                        borderColor: [
                                                            '#FF6384',
                                                            '#36A2EB',
                                                            '#FFCE56',
                                                            '#4BC0C0',
                                                            '#FF9F40',
                                                            '#9966FF'
                                                        ],
                                                        borderWidth: 1
                                                    }]
                                                },
                                                options: {
                                                    responsive: false,
                                                    scales: {
                                                        y: {
                                                            beginAtZero: true
                                                        }
                                                    }
                                                }
                                            });

                                            if (!chart) {
                                                console.error("Chart creation failed for ID: " + canvasId);
                                            }
                                        };

                                        var labels1 = ['Friendliness', 'Gregariousness', 'Assertiveness', 'ActivityLevel', 'ExcitementSeeking', 'Cheerfulness'];
                                        var data1 = [{{ $result->Friendliness }}, {{ $result->Gregariousness }}, {{ $result->Assertiveness }}, {{ $result->ActivityLevel }}, {{ $result->ExcitementSeeking }}, {{ $result->Cheerfulness }}];
                                        createBarChart('extraversionChart', labels1, data1);

                                        var labels2 = ['SelfEfficacy', 'Orderliness', 'Dutifulness', 'AchievementStriving', 'SelfDiscipline', 'Cautiousness'];
                                        var data2 = [{{ $result->SelfEfficacy }}, {{ $result->Orderliness }}, {{ $result->Dutifulness }}, {{ $result->AchievementStriving }}, {{ $result->SelfDiscipline }}, {{ $result->Cautiousness }}];
                                        createBarChart('conscientiousnessChart', labels2, data2);

                                        var labels3 = ['Anxiety', 'Anger', 'Depression', 'SelfConsciousness', 'Immoderation', 'Vulnerability'];
                                        var data3 = [{{ $result->Anxiety }}, {{ $result->Anger }}, {{ $result->Depression }}, {{ $result->SelfConsciousness }}, {{ $result->Immoderation }}, {{ $result->Vulnerability }}];
                                        createBarChart('neuroticismChart', labels3, data3);

                                        var labels4 = ['Imagination', 'ArtisticInterests', 'Emotionality', 'Adventurousness', 'Intellect', 'Liberalism'];
                                        var data4 = [{{ $result->Imagination }}, {{ $result->ArtisticInterests }}, {{ $result->Emotionality }}, {{ $result->Adventurousness }}, {{ $result->Intellect }}, {{ $result->Liberalism }}];
                                        createBarChart('opennessChart', labels4, data4);

                                        var labels5 = ['Trust', 'Morality', 'Altruism', 'Cooperation', 'Modesty', 'Sympathy'];
                                        var data5 = [{{ $result->Trust }}, {{ $result->Morality }}, {{ $result->Altruism }}, {{ $result->Cooperation }}, {{ $result->Modesty }}, {{ $result->Sympathy }}];
                                        createBarChart('agreeablenessChart', labels5, data5);
                                    });
                                </script>
                            </ul>
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
    </body>
</html>