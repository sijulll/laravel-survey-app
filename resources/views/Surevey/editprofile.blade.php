@extends('Surevey.layoutfrontend.master')

@section('content')
<section id="featured" style="background-color: #F03C02; padding: 16px">
        <div class="container" style="background-color: #FFF">
            <div class="row">
                <div class="span12" style=" padding: 8px; text-align: center">
                    <img src="img/avatar.png" style="height: 100px; width: 100px; border-radius:50px; background-color: gray">
                </div>
                <div class="span12" style=" padding: 8px">
                  
                  <form method="POST">
                    
                    @foreach ($data as $datas)
                    {{csrf_field()}}
                    {{ method_field('PUT') }}
                    <table align="center" style="border-collapse:separate;border-spacing:36px 8px;">
                      <tr>
                        <td>Nama Lengkap</td>
                        <td><input id="nama_user" name="nama_user" type="text" value="{{$datas->nama_user}}"/></td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                          <input id="jenis_kelamin" type="radio" name="jenis_kelamin" value="Laki-Laki" {{($datas->jenis_kelamin=="Laki-Laki")? "checked":"" }}>Laki-Laki</input>
                          <input id="jenis_kelamin" type="radio" name="jenis_kelamin" value="Perempuan" {{($datas->jenis_kelamin=="Perempuan")? "checked":"" }}>Perempuan</input>
                        </td>
                      </tr>
                      <tr>
                        <td>Nomor Telpon</td>
                        <td><input id="no_tlp" name="no_tlp" type="tel" value="{{$datas->no_tlp}}"/></td>
                      </tr>
                      <tr>
                        <td>Pekerjaan</td>
                        <td><input  id="pekerjaan" name="pekerjaan" type="text" value="{{$datas->pekerjaan}}"/></td>
                      </tr>
                      <tr>
                        <td>Wilayah</td>
                        <td><input id="wilayah" name="wilayah" type="text" value="{{$datas->wilayah}}"/> </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><div class="span2" style="margin-left:0; float: none">
                            <input class="btn btn-theme btn-block" type="submit" formaction="/editprofile/update" value="Ubah">
                        </div></td>
                      </tr>
                    </table>
                    @endforeach
                  </form>
              </div>
            </div>
        </div>
      <!-- end slider -->
    </section>
  
@endsection