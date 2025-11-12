@extends("user.partial.layout")
@section("extraCss")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <script src="https://www.google.com/recaptcha/api.js?render={{ $apiKeys->recaptcha_site_key }}"></script>
@endsection

@section("content")

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="page-content centered">
                <div class="title">Bize Ulaşın</div>
                <h1>{{$page->title}}</h1>
                <div class="separate"></div>
                <br>
                {!! $page->content !!}
            </div>
            <div class="row clearfix">

                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <h2>İletişim Formu</h2>
                            <div class="text">Her türlü soru görüş ve önerilerinizi aşağıdaki formu doldurarak bize
                                iletebilirsiniz.
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" action="{{route("iletisimFormu")}}" id="contact-form">
                                @csrf
                                <div class="row clearfix">
                                    <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="name" placeholder="Adınız Soyadınız" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="email" name="email" placeholder="E-mail Adresiniz" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="phone" placeholder="Telefon Numaranız">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="subject" placeholder="Konu" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" placeholder="Mesajınız (Min:20 karakter)"></textarea>
                                    </div>


                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-four clearfix"><span
                                                class="icon flaticon-arrow-pointing-to-right"></span>Gönder
                                        </button>
                                    </div>

                                </div>
                            </form>
                            <!-- Contact Form -->
                        </div>

                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <ul class="info-list">
                            <li>
                                <strong>{{$contactInfo->name}}</strong>
                                <p>{{$contactInfo->address}}</p>
                                <p><b>{{$contactInfo->state}} / {{$contactInfo->city}}
                                        / {{$contactInfo->country}}</b></p>

                                <p>
                                    <a href="{{route("setVisitedUserCall",['tel:'.$contactInfo->setPhoneLink($contactInfo->phone),'phone'])}}">{{$contactInfo->phone}}</a>
                                </p>
                                <p><a href="mailto:{{$contactInfo->email}}">{{$contactInfo->email}}</a></p>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Contact Page Section -->

    <!-- Map Section -->
    <section class="contact-map-section">
        <div class="auto-container">
            <!-- Map Boxed -->
            <div class="map-boxed">
                <!--Map Outer-->
                <div class="map-outer">
                    <iframe
                        src="{{$contactInfo->map}}"
                        allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->
@endsection
@section("extraJs")

    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ $apiKeys->recaptcha_site_key }}', {action: 'contact'}).then(function(token) {
                document.getElementById('recaptcha_token').value = token;
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script>

        const notyf = new Notyf({
            duration: 3000,
            ripple: true,
            dismissible: true,
            position: {
                x: 'right',
                y: 'top',
            },
            types: [
                {
                    type: 'warning',
                    background: 'orange',
                    icon: {
                        className: 'fas fa-exclamation-triangle',
                        tagName: 'i',
                    }
                },
                {
                    type: 'info',
                    background: '#3f87f5',
                    icon: {
                        className: 'fas fa-info-circle',
                        tagName: 'i',
                    }
                }
            ]
        });

        @if(session('status')==="success")
        notyf.success("{{ session('message') }}");
        @endif

        @if(session('status')==="error")
        notyf.error("{{ session('message') }}");
        @endif
    </script>
@endsection
