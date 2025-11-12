# {{$mainPageSetting?->seo_title}} | {{$mainPageSetting?->site_name}}
[{{$mainPageSetting?->site_name}}]({{env("APP_URL")}}): {{$mainPageSetting?->seo_description}}
{{-- llms.blade.php --}}
@foreach ($categories as $category)
@include('user.llmsCategory', ['category' => $category, 'level' => 1])
@endforeach
## {{$mainPageSetting?->site_name}} İletişim Bilgileri
- **Telefon 1:** {{$contact?->phone}}
@if($contact?->phone2)
- **Telefon 2:** {{$contact?->phone2}}
@endif
- **E-posta:** {{$contact?->email}}
@if($contact?->email2)
- **E-posta:** {{$contact?->email2}}
@endif
- **Adres:** {{$contact?->address}} {{$contact?->state}}/{{$contact?->city}}/{{$contact?->country}}
