<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Syamsul Hadi - Portfolio</title>
    <link rel="icon" type="image/x-icon" href="assets/images/Logo.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="style/main.css" rel="stylesheet" />
    <style>
        .navbar-nav>:hover>a {
            color: #7462E1 !important;
        }
        .nav-item>a:hover {
            color: #7462E1 !important;
        }

        .nav-social{
                text-decoration: none;
                border:0;
                color:#495971;
        }
        .nav-social:hover{
            color:blueviolet;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-portfolio navbar-fixed-top fixed-top">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="assets/images/logo.svg" alt="logo" class="d-inline-block align-top" height="30" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="#" class="nav-link">Projects</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-none d-lg-flex navbar-social ms-auto">
                    <li class="nav-item mt-1">
                        <a href="https://id-id.facebook.com/5yamsul" target="_BLANK" class="nav-link d-inline-block">
                            <h3 class="bi bi-facebook border-0"></h3>
                        </a>
                    </li>
                    <li class="nav-item mt-1">
                        <a href="https://id-id.facebook.com/5yamsul" target="_BLANK" class="nav-link d-inline-block">
                            <h3 class="bi bi-linkedin border-0"></h3>
                        </a>
                    </li>
                    <li class="nav-item mt-1">
                        <a href="https://id-id.facebook.com/5yamsul" target="_BLANK" class="nav-link d-inline-block">
                            <h3 class="bi bi-instagram border-0"></h3>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-content page-home" id="home">
        <section class="portfolio-project">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center" data-aos="fade-up">
                        <h3 class="text-primary">My Projects</h3>
                    </div>
                </div>
                <div class="row">
                    @forelse ($projects as $project)
                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <a href="#" class="component-projects d-block" data-bs-toggle="modal" data-bs-target="#tisabaniModal{{ $project->id }}">
                                <div class="projects-thumbnail">
                                    <div class="projects-image" style="background-image: url( '{{ Storage::url($project->photo) }}');"></div>
                                </div>
                                <div class=" projects-text">{{ $project->name }}</div>
                                <div class="projects-category">{{ $project->category->name }}</div>
                            </a>
                        </div>
                        <!-- Modal Tisabani -->
                        <div class="modal fade" id="tisabaniModal{{ $project->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Project Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-0 gy-1">
                                            <div class="col-3">
                                                <b>Project Name</b>
                                            </div>
                                            <div class="col-1">:</div>
                                            <div class="col-8">
                                                <b>{{ $project->name }}</b>
                                            </div>

                                            <div class="col-3">
                                                Category
                                            </div>
                                            <div class="col-1">:</div>
                                            <div class="col-8">
                                                {{ $project->category->name }}
                                            </div>

                                            <div class="col-3">
                                                Tools
                                            </div>
                                            <div class="col-1">:</div>
                                            <div class="col-8">
                                                @foreach(explode(', ', $project->tools) as $tools)
                                                    <span class="badge rounded-pill" style="background-color:blueviolet;">{{ $tools }}</span>
                                                @endforeach
                                            </div>

                                            <div class="col-3">
                                                Description
                                            </div>
                                            <div class="col-1">:</div>
                                            <div class="col-8">
                                                {!! $project->description !!}
                                            </div>
                                        </div>
                                        <div class="border-bottom my-4"></div>
                                        <img src="{{ Storage::url($project->page) }}" alt="" class="img-fluid border" width="100%">
                                    </div>
                                    <div class="modal-footer d-flex bd-highlight">
                                        <button type="button" class="btn btn-secondary flex-fill bd-highlight" data-bs-dismiss="modal">Close</button>
                                        <a href="http://{{ $project->url }}" target="_BLANK" type="button" class="btn btn-primary flex-fill bd-highlight">Visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center">Projects Not Found</div>
                    @endforelse
                </div>

            </div>
        </section>

        <footer>
            <div class="container d-md-block d-none">
                <div class="row">
                    <div class="col-md-3">
                        <p class="pt-4 pb-2">
                            &copy; 2022 | All right reservied
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <p class="pt-4 pb-2 text-primary">
                            <a href="index.html">www.syamhadisya.com</a>
                        </p>
                    </div>
                    <div class="col-md-3 pt-2 pb-2 d-flex justify-content-end mr-2">
                        <a href="https://id-id.facebook.com/5yamsul" target="_BLANK" class="nav-link d-inline-block nav-social">
                            <h3 class="bi bi-facebook border-0"></h3>
                        </a>
                        <a href="https://id-id.facebook.com/5yamsul" target="_BLANK" class="nav-link d-inline-block nav-social">
                            <h3 class="bi bi-linkedin border-0"></h3>
                        </a>
                        <a href="https://id-id.facebook.com/5yamsul" target="_BLANK" class="nav-link d-inline-block nav-social">
                            <h3 class="bi bi-instagram border-0"></h3>
                        </a>
                    </div>


                </div>
            </div>
            <div class="container d-block d-md-none">
                <div class="row text-center">
                    <div class="col-8 pt-4">
                        <p>
                            &copy; 2022 | <a href="index.html" class="text-primary">www.syamhadisya.com</a>
                        </p>
                    </div>
                    <div class="col-4 pt-3 mb-2">
                        <a href="https://id-id.facebook.com/5yamsul" target="_BLANK" class="d-inline-block nav-social">
                            <h3 class="bi bi-facebook border-0"></h3>
                        </a>
                        <a href="https://id-id.facebook.com/5yamsul" target="_BLANK" class="nav-social mx-2">
                            <h3 class="bi bi-linkedin border-0"></h3>
                        </a>
                        <a href="https://id-id.facebook.com/5yamsul" target="_BLANK" class="nav-social">
                            <h3 class="bi bi-instagram border-0"></h3>
                        </a>
                    </div>


                </div>
            </div>
        </footer>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"></script>
    <script>
        AOS.init();
        $(function() {
            $(document).scroll(function() {
                var $nav = $(".navbar-fixed-top");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
        $("ul li.navbar-item").on('click', function() {
            $("li.navbar-item.active").removeClass('active');
            $(this).addClass('active');
        });
        $('a').click(function() {
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 500);
        });
    </script>

</body>

</html>
