@extends('Surevey.layoutfrontend.master')
@section('logout')
<li><a href="{{ route('user.logout') }}" data-toggle="modal">Logout</a></li>                      
@endsection 
@section('content')
<section id="featured" style="background-color: #F03C02; padding: 16px">
    <div class="container" style="background-color: #FFF">
        <div class="row">
            <div class="span12" style=" padding-top: 32px">
                <h3>Kategori: Politik</h3>
                @forelse ($data as $datas)
            <a href="" class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$datas->judul_survei}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted" value="{{$datas->id_kategori}}">{{$datas->nama_kategori}}</h6> 
                        <p class="card-text">{{$datas->deskripsi_survei}}</p>
                        </div>
                    </a>
                    @empty    
                 <a href="{{route('survey.create')}}" class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nothing To Show</h5> 
                        <h6 class="card-subtitle mb-2 text-muted" ></h6>
                        <p class="card-text"> Start Create Survey </p>
                    </div>
                    @endforelse
                    <nav aria-label="..." style="float: right">
                            <ul class="pagination">
                              <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                          </nav>
            </div>
        </div>
    </div>
</section>
@endsection