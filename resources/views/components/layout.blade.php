<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}-Blog</title>
    <link href="/css/blog.css?v=1" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="/js/blog.js"></script>
</head>

<body>
    <div class="container-d" id="container">
        <header>
            <img src="/images/buddy.png" style="width: 5%;height:80%" />
            <div>
                Renderbit Technologies
            </div>
            @auth
                <form method="POST" action="/logout">
                    @csrf
                    <button>Log out</button>
                </form>
                <a href="/{{auth()->user()->username}}"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
            @else
                <form method="GET" action="/signin">
                    @csrf
                    <button>Log in</button>
                </form>
            @endauth
        </header>
        {{ $slot }}
        <div class="footer">
            <div class="card">
                <div class="element1">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span>info@expertlancing.com</span>
                        </div>
                    </div>
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span>+1 (619).798.8133 (US)</span>
                        </div>
                    </div>
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Find us</h4>
                            <span>Unit No.1004 , 10th Floor, Iris Tech Park, Sohna Road, Gurugram</span>
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
        @auth
            <div class="create-blog" id="createBlog">
                <form method="POST" action="/" class="create-box">
                    @csrf
                    <div class="title-head" style="margin-bottom: 3%">
                        Create new blog
                    </div>
                    <input name="slug" id="slug" type="text" class="details" required
                        placeholder="Enter slug for your post" />
                    <input name="title" id="title" type="text" class="details" required
                        placeholder="Enter title for your post" />
                    <textarea name="content" id="content" class="details-t" required placeholder="Enter content for your post"
                        rows="3"></textarea>
                    <textarea name="excerpt" id="excerpt" class="details-t" required placeholder="Enter excerpt for your post"
                        rows="3"></textarea>
                    <button type="submit" class="create-button">Create new blog</button>
                </form>
            </div>
            <button class="plus-button" onclick="showCreateBlog()">
                <i class="far fa-plus"></i>
            </button>
        @endauth
    </div>
</body>

</html>
