<h1>{{ $artikel->kode }}</h1>
<h3>Stok : {{ $artikel->stok }} |
	Nama : {{ $artikel->nama }}</h3>
				{{ $artikel->deskripsi}}
<br>
<a href="{{ url('/') }}">Kembali</a>