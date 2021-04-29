<!DOCTYPE html>
<html lang="en">
<head>
 @include('admin.template.partials.upper-links')
</head>
<body>

<!-- PRELOADER -->
<div id="loader-wrapper">
    <div id="loader"><div class="sk-spinner sk-spinner-cube-grid"><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div></div></div>
</div>

<!-- HEADER -->
<section id="header">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-8">
                <img class="logo" src="{!! asset ('admin/images/text-1619671901826.png') !!}" />
                <h1 class="white-text">Simple Way To Manage Your Passwords</h1>
                <h5 class="white-text">Passwordnya is designed to facilitate local password management. Of course it is open source and can be expanded again.</h5><br><br>
                <a href={!! url('akuns') !!}> <button data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="button-leweb2">Manage Now</button></a>
                <div id="countdown" class="white-text"></div>
            </div>
        </div>
    </div>
    <div class="animation">
        <a class="arrow-down-animation" data-scroll href="#about"><i class="fa fa-angle-down"></i></a>
    </div>
</section>
<!-- HEADER ENDS -->

<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="row text-center">
            <!-- Section 1 -->
            <div data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="col-md-4">
                <i class="fa fa-laptop"></i>
                <h3>Open Source</h3>
                <div class="colored-line-small-center"></div>
                <p>All available on github and license free. Manage your Password Now!</p>
            </div>
            <!-- Section 2 -->
            <div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="col-md-4 middle">
                <i class="fa fa-lightbulb-o"></i>
                <h3>Encode Now</h3>
                <div class="colored-line-small-center"></div>
                <p>with various types of encoding namely base64 and sha256</p>
            </div>
            <!-- Section 3 -->
            <div data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="col-md-4">
                <i class="fa fa-newspaper-o"></i>
                <h3>Plug n Play</h3>
                <div class="colored-line-small-center"></div>
                <p>Easy to transfer to other machines and short operation</p>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT ENDS -->

<!-- SUBSCRIBE -->
<section id="subscribe">
    <div class="container">
        <i data-sr="ease-in over 1s, reset" class="fa fa-envelope icontop"></i>
        <div class="row text-center">
            <div class="col-md-8 col-md-offset-2">
                <h2 data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="white-text">Sign up to our Newsletter</h2>
                <h5 data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="white-text">Stay up2date with climb-up</h5>
                <!-- MAILCHIMP FORM -->
                <form id="mc_form" role="form">
                    <input data-sr="enter top over 1s, wait 0.3s, move 24px, reset" type="email" class="form-control" id="mc-email" name="mc-email" placeholder="Your Email" />
                    <button data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" type="submit" class="button-leweb">Submit</button>
                    <label for="mc-email" class="mc-email"></label>
                </form>
                <!-- MAILCHIMP FORM ENDS -->
            </div>
        </div>
    </div>
</section>
<!-- SUBSCRIBE ENDS -->

<!-- CONTACT US -->
<section id="contact">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-8 col-md-offset-2">
                <!-- CONTACT FORM -->
                <form method="post" action="">
                    <p data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="contact-info text-center">Get in Contact. Fill up the form below. All fields are required.</p>
                    <div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" />
                    </div>
                    <div data-sr="enter right over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" />
                    </div>
                    <div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-12">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" />
                    </div>
                    <div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-12">
                        <textarea cols="60" rows="3" id="comment" name="comment" class="form-control" placeholder="Write your comment here..."></textarea>
                    </div>
                    <div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="form-group col-sm-12 ">
                        <button type="submit" class="button-leweb">Send Message</button>
                    </div>
                </form>

                <!-- AFTER SENDING MESSAGE -->
                <div id="success" class="col-md-12 col-sm-12 text-center">
                    <i class="fa fa-check-circle"></i>
                    <strong>Message successfully sent</strong>
                    <p>Thanks for contacting us. We will respond to you as soon as possible!</p>
                </div>
                <!-- CONTACT FORM ENDS -->
            </div>
        </div>
    </div>
</section>
<!-- CONTACT ENDS -->

<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row text-center">
            <p>
                &copy; 2021 | DESIGN BY LF809
                <span class="social">
							<a href="#"><i class="fa fa-facebook-square"></i></a>
							<a href="#"><i class="fa fa-twitter-square"></i></a>
							<a href="#"><i class="fa fa-google-plus-square"></i></a>
						</span>
            </p>
        </div>
    </div>
</footer>

@include('admin.template.partials.lower-links')
</body>
</html>
