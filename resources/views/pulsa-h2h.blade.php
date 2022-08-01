<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidana</title>

     {{-- Bootstap --}}
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     {{-- End Bootsrap --}}
 
     {{-- My Fonts --}}
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
     {{-- End My Fonts --}}
 
     {{-- CSS --}}
     <link rel="stylesheet" href="/css/style.css">
     {{-- End CSS --}}
</head>
<body>
    
{{-- Navbar --}}
    @include('partials.navbar')
    {{-- End Navbar --}}

{{-- Container Heading --}}
<div class="container heading-7">
    <h2><Strong>{{ $data->isEmpty() ? $title : $data[0]->title }}</Strong></h2>
    <p>{{ $data->isEmpty() ? $title : $data[0]->desc }}</p>
</div>
{{-- End Container Heading --}}

{{-- Info Card 5 --}}
<div class="container">

  <div class="row justify-content-center">

      @php $no = 1; @endphp
        @foreach($data as $item)
          <div style="margin-right: 50px;" class="col-2">
              <div class="accordion" id="accordionExample{{$no}}">
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="heading{{$no}}">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$no}}" aria-expanded="true" aria-controls="collapse{{$no}}">
                          <div class="card-5" style="width: 217px; height: 170px">
                              <img src="{{ $item->image }}" class="card-img-top rounded mx-auto d-block" alt="indosat" >
                              <div class="card-body">
                              <h4>{{ $item->item_title }}</h4>
                              </div>
                          </div>
                      </button>
                      </h2>
                      <div id="collapse{{$no}}" class="accordion-collapse collapse" aria-labelledby="heading{{$no}}" data-bs-parent="#accordionExample{{$no}}">
                          <div class="accordion-body border border-2">
                              <table class="table table-sm table-borderless table-responsive">
                                  <thead>
                                      <tr>
                                          <th scope="col">Kode</th>
                                          <th scope="col">Operator</th>
                                          <th scope="col">Harga</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @php $lists = App\Models\DetailPulsaH2HItem::where('pulsa_h2h_item_id', $item->item_id)->get(); @endphp
                                      @foreach($lists as $list)
                                        <tr>
                                            <td>{{ $list->kode }}</td>
                                            <td>{{ $list->operator }}</td>
                                            <td>{{ $list->harga }}</td>
                                        </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          @php $no++ @endphp
      @endforeach
  </div>
</div>
{{-- End Info Card 3 --}}

{{-- Footer --}}
@include('partials.footer')
{{-- End Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>