@extends("cms.partial.layout")
@section("content")
    <div class="row">
        <div class="card col-sm-12 col-md-12 col-lg-6">
            <div class="card-header">SSS Ekle</div>
            <div class="card-body">
                <form action="{{route("cms.faqs.store")}}" method="post">
                    @csrf
                    <label for="question">Soru:</label>
                    <input type="text" name="question" id="question" placeholder="Soru">
                    <label for="answer">Cevap:</label>
                    <textarea name="answer" id="answer" cols="30" rows="10" placeholder="Cevap"></textarea>
                    <label for="pages">Sayfa</label>
                    <select name="page_id" id="page_id">
                        <option value="">-- Genel --</option>
                        @foreach($pages as $page)
                            <option value="{{$page->id}}">{{$page->title}}</option>
                        @endforeach
                    </select>
                    <input type="submit" value="Kaydet">
                </form>

                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-light bg-error" style="padding: 5px 10px;margin-top:2px;">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
