@section('css')
    <style>
        .ftco-footer-social li a span {
            font-size: 24px;
            transition: color 0.3s ease;
        }

        /* Default icon colors */
        .ftco-footer-social li a span.icon-facebook {
            color: #3b5998;
        }

        .ftco-footer-social li a span.icon-instagram {
            color: #e4405f;
        }

        .ftco-footer-social li a span.icon-linkedin {
            color: #0077b5;
        }

        .ftco-footer-social li a span.icon-whatsapp {
            color: #25d366;
        }

        .ftco-footer-social li a span.icon-github {
            color: #333;
        }

        /* Hover effect with vivid colors */
        .ftco-footer-social li a:hover span.icon-facebook {
            color: #1877f2;
            /* Bright Facebook blue */
        }

        .ftco-footer-social li a:hover span.icon-instagram {
            color: #ff1493;
            /* Vivid Instagram pink */
        }

        .ftco-footer-social li a:hover span.icon-linkedin {
            color: #0a66c2;
            /* Bright LinkedIn blue */
        }

        .ftco-footer-social li a:hover span.icon-whatsapp {
            color: #00e676;
            /* Bright WhatsApp green */
        }

        .ftco-footer-social li a:hover span.icon-github {
            color: #6e5494;
            /* Vivid GitHub purple */
        }

        .ftco-footer-social {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .ftco-footer-social li {
            display: inline-block;
        }

        .ftco-footer-social li a {
            transition: color 0.3s ease;
        }

        .text-center p {
            font-size: 16px;
            color: #000;
        }
    </style>
@endsection
<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="ftco-footer-social list-unstyled d-flex justify-content-center mb-4">
                    <li class="ftco-animate mx-2"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate mx-2"><a href="#"><span class="icon-instagram"></span></a></li>
                    <li class="ftco-animate mx-2"><a href="#"><span class="icon-linkedin"></span></a></li>
                    <li class="ftco-animate mx-2"><a href="#"><span class="icon-whatsapp"></span></a></li>
                    <li class="ftco-animate mx-2"><a href="#"><span class="icon-github"></span></a></li>
                </ul>

                <p>
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Ahmad Rizki
                </p>
            </div>
        </div>
    </div>
</footer>
