<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data product</h3>
 
	<a href="product/tambah"> + Tambah product Baru</a>
	
	<br>
            @if($products->isEmpty())
                Belum ada data ...
            @else
 
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama Product</th>
			<th>Harga</th>
			<th>Deskripsi</th>
			<th>Rating</th>
			<th>stok</th>
			<th>berat</th>
			<th>Action</th>
		</tr>
		@foreach($products as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->product_name }}</td>
			<td>{{ $p->price }}</td>
			<td>{{ $p->description }}</td>
			<td>{{ $p->product_rate }}</td>
			<td>{{ $p->stock }}</td>
			<td>{{ $p->weight }}</td>

			<td>
				<a href="/product/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/product/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	@endif
</body>
</html>