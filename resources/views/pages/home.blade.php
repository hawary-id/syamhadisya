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
        .banner-image{
            background-image:url('/assets/images/carousel.svg');
            background-position: center;
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
                    <li class="navbar-item active">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#skills" class="nav-link">Skills</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#portfolio" class="nav-link">Portfolio</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#contact" class="nav-link">Contact</a>
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
        <section class="portfolio-carousel" data-aos="zoom-in">
            <div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/carousel.svg" class="d-block w-100" alt="">
                        <div class="carousel-caption">
                            <h1 class="text-primary"><span style="color:#495971;float:left;" class="me-1">I'm </span>
                                <span class="frontend">Frontend Developer</span>
                                <span class="backend">Backend Developer</span>
                                <span class="designer">UI / UX Designer</span>
                            </h1>
                            <q>Life would be much easier if I had the source code.</q>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="portfolio-about" id="about">
            <div class="container">
                <div class="col-12 text-center my-5" data-aos="fade-up">
                    <h3 class="text-primary">About</h3>
                </div>

                <div class=" d-none d-md-block">
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-md-4">
                            <small class="text-secondary">Biography</small>
                            <p>Work for money and design for love! I'm Hadi, Backend and Frontend Developer based in Indonesia.</p>

                            <small class="text-secondary">Contact</small>
                            <p>Tangerang, Indonesia<br>syamhadisya@gmail.com<br>+62 857-7553-9967</p>

                            <small class="text-secondary">Services</small>
                            <p>Web Developer<br>Mobile Developer<br>UI/UX Designer</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="/assets/images/profile.png" alt="">
                        </div>
                        <div class="col-md-4">
                            <div class="float-end text-center">
                                <small class="text-secondary">Project Done</small>
                                <h1 class=" text-primary">{{ $count }}</h1>
                                <small class="text-secondary">Experience</small>
                                <h1 class=" text-primary">3 years</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-block d-md-none text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-md-4 mb-3">
                        <img src="/assets/images/profile.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-4">
                        <small class="text-secondary">Biography</small>
                        <p>Work for money and design for love! I am Hadi, Backend and Frontend Developer based in Indonesia.</p>
                        <small class="text-secondary">Contact</small>
                        <p>Tangerang, Indonesia<br>syamhadisya@gmail.com<br>+62 857-7553-9967</p>

                        <small class="text-secondary">Services</small>
                        <p>Web Developer<br>Mobile Developer<br>UI/UX Designer</p>
                    </div>

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-6">
                                <small class="text-secondary">Project Done</small>
                                <h1 class=" text-primary">{{ $count }}</h1>
                            </div>

                            <div class="col-6">
                                <small class="text-secondary">Experience</small>
                                <h1 class=" text-primary">3 Years</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div fade-aos="fade-up" id="skills">
            <hr>
        </div>
        <section class="portfolio-advantage">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-12 text-center" data-aos="fade-up">
                        <h3 class="text-primary">My Advantage</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($skills as $skill)
                        <div class="col-4 col-md-2 text-center mb-3 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                            <a class="oval d-block" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $skill->name }}">
                                <img src="{{Storage::url($skill->image)}}" alt="{{ $skill->name }}" class="img-fluid img-icon">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div fade-aos="fade-up" id="portfolio">
            <hr>
        </div>
        <section class="portfolio-project">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center" data-aos="fade-up">
                        <h3 class="text-primary">My Latest Projects</h3>
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
                                        <a href="https://{{ $project->url }}" target="_BLANK" type="button" class="btn btn-primary flex-fill bd-highlight">Visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h4 class="text-center mb-5" data-aos="fade-up">Projects Not Found</h4>
                    @endforelse
                    <div class="col-12 text-center" data-aos="fade-up">
                        <a href="{{ route('projects') }}" class="btn btn-primary px-5 py-2">All Projects</a>
                    </div>
                </div>

            </div>
        </section>
        <div fade-aos="fade-up" id="contact">
            <hr>
        </div>
        <section class="portfolio-contact">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center" data-aos="fade-up">
                        <h3 class="text-primary">Contact</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-3" data-aos="fade-up">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                            {{ Session::get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('contact-store') }}" method="post">
                            {{csrf_field()}}
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Your Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Phone Number">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" placeholder="Subject">
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Name" class="form-label">Message</label>
                                <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" placeholder="Message"></textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <input type="submit" class="btn btn-primary" value="Send">
                            </div>
                        </form>

                    </div>
                    <div class="col-12 col-md-8 text-center" data-aos="zoom-in">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253863.7098836702!2d106.39249836648997!3d-6.181524856066386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ffb6b0ad7ae3%3A0x301576d14feb9b0!2sKabupaten%20Tangerang%2C%20Banten!5e0!3m2!1sid!2sid!4v1649902936378!5m2!1sid!2sid"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
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
