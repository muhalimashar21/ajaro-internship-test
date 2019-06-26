<center>
<h1>Input Data Barang</h1>
 <link href="bootstrap/css/bootstrap.min.css"
    rel="stylesheet" type="text/css">
    
<form method="post">
	{{ csrf_field() }}
	<div>
		<label for="kode">Kode :</label><br>
		<input type="text" id="kode"  name="kode">
	</div>
	<div>
		<label for="nama">Nama :</label><br>
		<input type="text" id="nama"  name="nama">
	</div>
	<div>
		<label for="deskripsi">Deskripsi :</label><br>
		<textarea name="deskripsi" cols="50" rows="8" id="deskripsi">
		 </textarea>
	</div>
	<div>
		<label for="stok">Stok :</label><br>
		<input type="text" id="stok"   name="stok">
	</div>
	<div>
		<label for="harga">Harga :</label><br>
		<input type="text" id="harga"   name="harga">
	</div>
	<div>
		<label for="berat">Berat :</label><br>
		<input type="text" id="berat"   name="berat">
	</div>
	<br>
	<button type="submit">Submit</button>

</form>
<a href="{{ url('/') }}">Kembali</a>
</center>