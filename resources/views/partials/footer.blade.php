<style>
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #9f654f;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 5px;
        font-size: 10px;
        scroll-behavior: smooth;
    }

    #myBtn:hover {
        background-color: gray;
    }
</style>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>

<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-md col-lg-6 mb-md-0 mb-4">
                <h2 class="text-white">Socials</h2>
                <ul class="footer-socials p-0">
                    <li class="ftco-animate">
                        <a href="https://iamtheuri.netlify.app" style="font-size: 15px;" title="Website" target="_blank"><span class="fa fa-globe"></span>
                        </a>
                    </li>
                    <li class="ftco-animate">
                        <a href="https://github.com/iamtheuri" style="font-size: 15px;" title="GitHub" target="_blank"><span class="fa fa-github"></span>
                        </a>
                    </li>
                    <li class="ftco-animate">
                        <a href="https://twitter.com/iamtheuri_" style="font-size: 15px;" title="Twitter" target="_blank"><span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li class="ftco-animate">
                        <a href="https://www.linkedin.com/in/david-theuri/" style="font-size: 15px;" title="LinkedIn" target="_blank"><span class="fa fa-linkedin"></span>
                        </a>
                    </li>
                    <li class="ftco-animate">
                        <a href="https://www.instagram.com/iamtheuri_/" style="font-size: 15px;" title="Instagram" target="_blank"><span class="fa fa-instagram"></span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md col-lg-6 mb-md-0 mb-4">
                <h2 class="text-white">Quick Links</h2>
                <div>
                    <a href="/">
                        <h5 style="color: white !important; padding-right: 2rem;">Home</h5>
                    </a>
                    <a href="/contact" style="color: white !important;">
                        <h5 style="color: white !important; padding-right: 2rem;">Contact Us</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>


<script>
    let mybutton = document.getElementById("myBtn");

    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>