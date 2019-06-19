
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Survey</title>
</head>
<body>
    <form action="">
    <label>Kategori Survei</label
    <select type="text" id="id_kategori" name="id_kategori"  required="">
            <option value="">-- Pilih Wilayah Acara --</option>
            @foreach(\App\ModelKategori::all() as $kategori)
            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
            @endforeach
    </select>       
    <label>Judul</label
    <input type="text" class="form-control" id="judul_survei" name="judul_survei" placeholder="Judul Survei" required>
    <label>Deskripsi Survei</label
    <input type="textarea" class="form-control" id="deskripsi_survei" name="deskripsi_survei" placeholder="Deskripsi Survei" required>
    {{-- <label>Deskripsi Survei</label
    <textarea name="deskripsi_survei" id="deskripsi_survei" cols="30" rows="10"></textarea> --}}
    <label>Survey Reward</label
        <select type="text" id="id_kategori" name="id_kategori"  required="">
                <option value="">-- Pilih Wilayah Acara --</option>
                @foreach(\App\ModelPoint::all() as $point)
                <option value="{{ $point->id }}">{{ $point->score_point }}</option>
                @endforeach
        </select>  
    </form>
</body>
</html>