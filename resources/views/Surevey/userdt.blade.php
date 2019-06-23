@extends('Surevey.layoutfrontend.master')

@section('content')
<section id="featured" style="background-color: #F03C02; padding: 16px">
        <div class="container" style="background-color: #FFF">
            <div class="row">
                <div class="span12" style=" padding: 8px; text-align: center">
                    <img src="img/avatar.png" style="height: 100px; width: 100px; border-radius:50px; background-color: gray">
                </div>
                <div class="span12" style=" padding: 8px">
                  
                <form method="POST" action="{{route('userdt.store')}}">

                    {{csrf_field()}}
                    <table align="center" style="border-collapse:separate;border-spacing:36px 8px;">
                    <h3 align="center">{{Session::get('full_name')}}</h3>
                      <tr>
                        <td>Email</td>
                        <td><input id="nama_user" name="nama_user" type="text" value="{{Session::get('email')}}" disabled/></td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                          <input id="jenis_kelamin" type="radio" name="jenis_kelamin" value="Laki-Laki" >Laki-Laki</input>
                          <input id="jenis_kelamin" type="radio" name="jenis_kelamin" value="Perempuan" >Perempuan</input>
                        </td>
                      </tr>
                      <tr>
                        <td>Nomor Telpon</td>
                        <td><input id="no_tlp" name="no_tlp" type="tel" /></td>
                      </tr>
                      <tr>
                        <td>Jurusan</td>
                        <td><input  id="jurusan" name="jurusan" type="text" /></td>
                      </tr>
                      <tr>
                        <td>Wilayah</td>
                        <td><input id="wilayah" name="wilayah" type="text" /> </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><div class="span2" style="margin-left:0; float: none">
                            <input class="btn btn-theme btn-block" type="submit" value="Submit">
                        </div></td>
                      </tr>
                    </table>
                  </form>
              </div>
            </div>
        </div>
      <!-- end slider -->
    </section>
  
@endsection