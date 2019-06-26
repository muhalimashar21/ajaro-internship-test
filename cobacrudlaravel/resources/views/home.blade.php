<center>
<h1>KELOLA DATA BARANG</h1>
<h4>Data Barang</h4>
<h3><a href='{{ url("tambah") }} '> Tambah</a></h3>

<table cellspacing='0' border="1">
	<tr>
		<th>Kode</th>
		<th>Nama</th>
		<th>Harga</th>
		<th>Aksi</th>
	</tr>
	@foreach($artikel as $row)
	<tr>
		<td>{{ $row->kode }}</td>
		<td>{{ $row->nama }}</td>
		<td>{{ $row->harga }}</td>
		<td>
	
			<a href='{{ url("ubah/" . $row-> id) }}'>Edit</a>
			<a href='{{ url("hapus/" . $row-> id) }}'>Hapus</a>

		</td>
	</tr>
	@endforeach
</table>
</center>