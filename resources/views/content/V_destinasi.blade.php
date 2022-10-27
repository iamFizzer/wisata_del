<div class="gtco-section" id="destination">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Destination</h2>
                <p>Ini Tempat yang Kita Sediakan</p>
            </div>
        </div>
        <div class="row">
            @foreach ($destinasi as $ds)
    

            <div class="col-lg-4 col-md-4 col-sm-6">
                <a href="{{asset('foto_tempat')}}/{{$ds->foto}}" class="fh5co-card-item image-popup">
                    <figure>
                        <div class="overlay"><i class="ti-plus"></i></div>
                        <img src="{{url('foto_tempat/mini/'.$ds->fotomin)}}" alt="Image" class="img-responsive">
                    </figure>
                    <div class="fh5co-text">
                        <h2>{{$ds->nama}}</h2>
                        <p>{{ Str::limit($ds->ket, 50, '...') }}</p>
                        <p><span class="btn btn-primary">Detail</span></p>
                       
@if (Auth::user())
<p><span class="btn btn-primary" onclick="window.open('https://api.whatsapp.com/send/?phone=%2B6285159922605&text=Saya+Akan+BOOKING+Trip+Ke+{{$ds->nama}}&type=phone_number&app_absent=0', '_blank')">booking</span></p>    
@else
<p><span class="btn btn-primary" onclick="window.location.href='/login';">booking</span></p>   
@endif                    
                      
                    </div>
                </a>
            </div>
            
            @endforeach
        </div>
    </div>
</div>