@extends("cms.partial.layout")
@section("content")
    <div class="row mails">
        <div class="col-4 ">

            <ul class="mail-list card">
                <div class="card-header">Gelen Mailler</div>
                @foreach($mails as $item)
                    <li @if($item->is_read==1) class="readed" @endif id="mail{{$item->id}}"
                         onclick="readMail('{{route("cms.contact-forms.readMail",$item->id)}}','{{$item->id}}')">
                        <div class="icon">
                            {{\Illuminate\Support\Str::substr($item->name,0,1)}}
                        </div>
                        <div class="mail-information">
                            <div
                                class="title text-warning">{{\Illuminate\Support\Str::limit($item->subject,30,"...")}}</div>
                            <div class="message">{{\Illuminate\Support\Str::limit($item->message,40,"...")}}</div>
                            <div class="dateTime">{{$item->created_at->format('d.m.Y')}}
                                / {{$item->created_at->format('H:i')}}</div>
                        </div>
                        <div class="mailDelete " onclick="">

                                <a onclick="markAsUnread('{{route("cms.contact-forms.unreadMail",$item->id)}}','{{$item->id}}')" class="bg-primary @if(!$item->is_read) unread-btn @endif" title="Okunmadı Olarak İşaretle" id="unreadBtn{{$item->id}}">
                                    <i class="la la-envelope"></i>
                                </a>

                            <a onclick="deleteMail('{{route("cms.contact-forms.delete",$item->id)}}',{{$item->id}})" id="deleteBtn{{$item->id}}" class="bg-error">
                                <i class="la la-trash"></i>
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">Gelen Mail</div>
                <div class="card-body">
                    <ul class="mail-content">
                        <li class="mail-title">Ad Soyad:</li>
                        <li id="mailName"></li>
                        <li class="mail-title">Email:</li>
                        <li id="mailEmail"></li>
                        <li class="mail-title">Telefon:</li>
                        <li id="mailPhone"></li>
                        <li class="mail-title">Konu:</li>
                        <li id="mailSubject"></li>
                        <li class="mail-title">Mesaj:</li>
                        <li id="mailMessage"></li>
                    </ul>
                </div>
                <div class="card-footer">Gönderen IP : <span id="mailIp"></span></div>
            </div>
        </div>
    </div>
@endsection
@section("extraJs")

    <script>

        function readMail(route, id) {
            let mailName = document.getElementById("mailName");
            let mailEmail = document.getElementById("mailEmail");
            let mailPhone = document.getElementById("mailPhone");
            let mailSubject = document.getElementById("mailSubject");
            let mailMessage = document.getElementById("mailMessage");
            let mailIp = document.getElementById("mailIp");
            let unreadBtn = document.getElementById("unreadBtn"+id);
            let mailListItem = document.getElementById("mail" + id);
            axios.post(route, {}, {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
                .then(response => {
                    if (response.data.status === "success") {

                        mailName.innerHTML = response.data.mail["name"]
                        mailEmail.innerHTML = response.data.mail["email"]
                        mailPhone.innerHTML = response.data.mail["phone"]
                        mailSubject.innerHTML = response.data.mail["subject"]
                        mailMessage.innerHTML = response.data.mail["message"]
                        mailIp.innerHTML = response.data.mail["ip"]
                        mailListItem.classList.add("readed")
                        unreadBtn.classList.remove("unread-btn")
                    } else if (response.data.status === "warning") {
                        notyf.open({
                            type: "warning",
                            message: response.data.message
                        });
                    } else {
                        notyf.error(response.data.message);
                    }
                })
                .catch(error => {
                    notyf.error("Bir hata oluştu.");
                });
        }

        function markAsUnread(route, id) {
            event.stopPropagation();
            let unreadBtn = document.getElementById("unreadBtn"+id);
            let mailListItem = document.getElementById("mail" + id);
            axios.post(route, {}, {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
                .then(response => {
                    if (response.data.status === "success") {
                        mailListItem.classList.remove("readed")
                        unreadBtn.classList.add("unread-btn")
                    } else if (response.data.status === "warning") {
                        notyf.open({
                            type: "warning",
                            message: response.data.message
                        });
                    } else {
                        notyf.error(response.data.message);
                    }
                })
                .catch(error => {
                    notyf.error("Bir hata oluştu.");
                });
        }

        function deleteMail(route, id) {
            event.stopPropagation();
            axios.delete(route, {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
                .then(response => {
                    if (response.data.status === "success") {
                        let mailListItem = document.getElementById("mail" + id);
                         mailListItem.remove();
                        notyf.success(response.data.message);
                    } else if (response.data.status === "warning") {
                        notyf.open({
                            type: "warning",
                            message: response.data.message
                        });
                    } else {
                        notyf.error(response.data.message);
                    }
                })
                .catch(error => {
                    notyf.error("Bir hata oluştu."+error);
                });
        }

    </script>

@endsection
