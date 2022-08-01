<div class="jumbotron-3 py-4">
    <div class="container">
        <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between">
            @php $footers = App\Models\Footer::all(); @endphp
            @foreach ($footers as $footer)
            <div>
                <img src="{{asset('storage/' . $footer->logo)}}" alt="logofooter">
                <p class="text-footer">2022 PT Multidana Payment</p>
                <h5>Kota {{$footer->kota}}</h5>

                <p>{{$footer->alamat}}</p>

                <p>
                    Telp : {{$footer->telp}} <br>
                    Fax : {{$footer->fax}} <br>
                    Email : {{$footer->email}}
                </p>

                <p>
                    Solution Centre : {{$footer->solution_centre}} <br>
                    WhatsApp : {{$footer->whatsapp}}
                </p>
            </div>

            <div>
                <a href="{{$footer->link_whatsapp}}" target="_blank" class="text-decoration-none">
                    <img src="/images/whatsapp.png" alt="whatsapp">
                </a>
                <p id="section4"><a href="#download-app" style="color: #fff" class="text-decoration-none">Tentang kami</a></p>
                <p id="section5"><a href="#about" style="color: #fff" class="text-decoration-none">Layanan Multidana</a></p>
                <p id="section6"><a href="#jaringan" style="color: #fff" class="text-decoration-none">Jaringan</p>
                <p id="section7"><a href="#kontak-kami" style="color: #fff" class="text-decoration-none">Kontak</a></p>

                <div class="socmed-icon">
                    <a href="{{$footer->link_instagram}}" target="_blank" class="text-decoration-none">
                        <img class="img-footer-1" src="/images/instagram.png" alt="instagram">
                    </a>

                    <a href="{{$footer->link_twitter}}" target="_blank" class="text-decoration-none">
                    <img class="img-footer-2" src="/images/twitter.png" alt="twitter">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>