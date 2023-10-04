<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My blogs-Blog</title>
    <link href="/css/blog.css"  rel="stylesheet">
</head>

<body>
    <div class="container">
        <header>
            <img src="/images/buddy.png" style="width: 5%;height:80%" />
            <div>
                Renderbit Technologies
            </div>
        </header>
        <div class="middle-body">
            <div class="grid-div">
                @foreach ($blogs as $blog)
                    <div class="sub-grid">
                        <div class="img-head">
                            <img src="/images/language.jpg" style="width: 80%;height:90%" />
                        </div>
                        <div class="title-head">
                            {{ $blog->title }}
                        </div>
                        <div class="excerpt-head">
                            {{ $blog->excerpt }}
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
        <div class="footer">
            <div class="card">
                <div class="element1">
                    <div class="single-cta" style="margin-bottom: 4%;">
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span>contact@renderbit.com</span>
                        </div>
                    </div>
                    <div class="single-cta" style="margin-bottom: 4%;">
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span>+91 83730 57252</span>
                        </div>
                    </div>
                    <div class="single-cta" style="margin-bottom: 1%;">
                        <div class="cta-text">
                            <h4>Find us</h4>
                            <span>Flat No 4-d, Block-d, 4th Floor 949, Jhilpar Road, P O-Narendrapur, Kolkata, West
                                Bengal 700103</span>
                        </div>
                    </div>

                </div>
                <div class="element2">

                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Renderbit Technologies</h3>
                            <div></div>
                        </div>
                        <div class="footer-text">
                            <p>We collaborate with startups and early stage businesses to create powerful technology
                                platforms. Think of us as more of a creative partner or an in-house CTO-as-a-service.
                                This means we have a shared perspective on how we can work together to achieve your
                                goals.</p>
                        </div>
                    </div>
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                            <div></div>
                        </div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">about</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">portfolio</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Expert Team</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Latest News</a></li>
                        </ul>
                    </div>

                </div>
                <div class="element3">
                    <div class="footer-widget-subscribe">
                        <div class="footer-widget-heading-subs">
                            <h3>Subscribe</h3>
                            <div></div>
                        </div>
                        <div class="footer-text-subs mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Address">
                                <button><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="copyright-text">
                    <p>Copyright &copy; All Right Reserved <a href="https://renderbit.com/">Renderbit Technologies</a>
                    </p>
                </div>
                <div class="footer-menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
