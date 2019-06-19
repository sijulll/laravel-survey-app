@extends('Surevey.layoutfrontend.master')
@section('logout')
<li><a href="{{ route('user.logout') }}" data-toggle="modal">Logout</a></li>                      
@endsection 
@section('content')
    <section id="featured" style="background-color: #F03C02; padding: 16px">
        <div class="container" style="background-color: #FFF">
            <div class="row">
                <div class="span12" style=" padding: 8px">
                    <form>
                        <h3>Create your survey</h3>
                        <div class="form-group">
                            <input type="text" class="form-control span8" placeholder="Survey Title" name="judul_survei" id="judul_survei">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control span8" placeholder="Survey Description" name="deskripsi_survei" id="deskripsi_survei">
                      </div>
                        <div class="form-group">
                            <select id="id_kategori" name="id_kategori" class="form-control" required>
                                <option>Kategori</option>
                                @foreach(\App\ModelKategori::all() as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                                <select id="id_point" name="id_point" class="form-control" required>
                                    <option>Select Point</option>
                                    @foreach(\App\ModelPoint::all() as $point)
                                    <option value="{{ $point->id }}">{{ $point->score_point }}</option>
                                    @endforeach
                                </select>
                            </div>
                        <hr/>
                        <h3>Questions</h3>
                        <div class="form-group" style="margin-bottom:8px">  
                            <div class="span2" style="margin-left:0; float: none">
                                <a class="btn btn-theme btn-block">Add question</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control span7" placeholder="Question">
                            <select class="form-control span4">
                                <option>Type</option>
                                <option>Short text</option>
                                <option>Long text</option>
                                <option>Checkbox</option>
                                <option>Radio button</option>
                            </select>
                            <a class="btn btn-danger" style="margin-bottom: 10px">X</a>
                        </div>
                        <div class="form-group" style="margin-bottom:8px; display: none">
                            <div class="form-check">
                                <input class="form-check-input span1" type="checkbox" style="cursor:default" disabled>
                                <input type="text" class="form-control span9" style="margin-bottom:-2px" placeholder="Answer">
                                <a class="btn btn-success">+</a>
                                <a class="btn btn-danger">x</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control span7" placeholder="Question">
                            <select class="form-control span4">
                                <option>Type</option>
                                <option>Short text</option>
                                <option>Long text</option>
                                <option>Checkbox</option>
                                <option>Radio button</option>
                            </select>
                            <a class="btn btn-danger" style="margin-bottom: 10px">X</a>
                        </div>
                        <div class="form-group" style="margin-bottom:8px">
                            <div class="form-check">
                                <input class="form-check-input span1" type="checkbox" style="cursor:default" disabled>
                                <input type="text" class="form-control span9" style="margin-bottom:-2px" placeholder="Answer">
                                <a class="btn btn-success">+</a>
                                <a class="btn btn-danger">x</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control span7" placeholder="Question">
                            <select class="form-control span4">
                                <option>Type</option>
                                <option>Short text</option>
                                <option>Long text</option>
                                <option>Checkbox</option>
                                <option>Radio button</option>
                            </select>
                            <a class="btn btn-danger" style="margin-bottom: 10px">X</a>
                        </div>
                        <div class="form-group" style="margin-bottom:8px">
                            <div class="form-check">
                                <input class="form-check-input span1" type="radio" style="cursor:default" disabled>
                                <input type="text" class="form-control span9" style="margin-bottom:-2px" placeholder="Answer">
                                <a class="btn btn-success">+</a>
                                <a class="btn btn-danger">x</a>
                            </div>
                        </div>

                        <div class="span2" style="margin-left:0">
                            <button type="submit" class="btn btn-primary btn-block " style="margin-top: 16px">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      <!-- end slider -->
    </section>
@endsection