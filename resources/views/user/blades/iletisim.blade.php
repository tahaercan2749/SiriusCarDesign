@extends("user.partial.layout")
@section("extraCss")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <script src="https://www.google.com/recaptcha/api.js?render={{ $apiKeys->recaptcha_site_key }}"></script>
@endsection

@section("content")

    <div class="inner-page">
        <div class="max-width  content-space">
            <h1>{{$page->title}}</h1>
            {!! $page->content !!}

            <div class="contact-informations">

                <a href="{{route("setVisitedUserCall",['tel:'.$contactInfo->setPhoneLink($contactInfo->phone),'phone'])}}"
                   class="spec-stroke information">
                    <figure class="spec-bg-stroke">
                        <i class="ri-phone-fill"></i>
                    </figure>
                    <h2>Telefon</h2>
                    <p>{{$contactInfo->phone}}</p>
                </a>

                <a class="spec-stroke information">
                    <figure class="spec-bg-stroke">
                        <i class="ri-map-pin-fill"></i>
                    </figure>
                    <h2>Adres</h2>
                    <p>{{$contactInfo->address}} {{$contactInfo->state}} / {{$contactInfo->city}}</p>
                </a>

                <a href="mailto:{{$contactInfo->email}}" class="spec-stroke information">
                    <figure class="spec-bg-stroke">
                        <i class="ri-mail-fill"></i>
                    </figure>
                    <h2>E-Posta</h2>
                    <p>{{$contactInfo->email}}</p>
                </a>

            </div>
            <div class="contact-form content-space">
                <h2>İletişim Formu</h2>
                <p>Aşağıdaki formu doldurarak bizimle iletişime geçebilirsiniz.</p>
                <form class="" method="post" action="{{route("iletisimFormu")}}" id="contact-form">
                    @csrf
                    <input class="form-item" type="hidden" name="recaptcha_token" id="recaptcha_token">
                    <input class="form-item" type="text" name="name" placeholder="Adınız Soyadınız" required>
                    <input class="form-item" type="email" name="email" placeholder="E-mail Adresiniz" required>
                    <input class="form-item" type="text" name="phone" placeholder="Telefon Numaranız">
                    <input class="form-item" type="text" name="subject" placeholder="Konu" required>
                    <textarea class="form-item-full" name="message" placeholder="Mesajınız (Min:20 karakter)"></textarea>
                    <input  type="submit" value="Gönder">

                </form>
                <!-- Contact Form -->
            </div>
        </div>

        <div class="contact-map">
            <iframe
                src="{{$contactInfo->map}}"
                allowfullscreen=""></iframe>
        </div>
    </div>

@endsection
@section("extraJs")

    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('{{ $apiKeys->recaptcha_site_key }}', {action: 'contact'}).then(function (token) {
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
