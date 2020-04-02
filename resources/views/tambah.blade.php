<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Product</h3>
 
	<a href="/product"> Kembali </a>
	
	<br/>
	<br/>
 
	<form action="/product/store" method="POST">
		{{ csrf_field() }}
		Nama Product <input type="text" name="product_name" required="required"> <br/>
		Harga <input type="text" name="price" required="required"> <br/>
		Deskripsi <textarea type="text" name="description" required="required"></textarea> <br/>
		Rate <input type="number" name="product_rate" required="required"> <br/>
		Stock <input type="number" name="stock" required="required"> <br/>
		Berat <input type="number" name="weight" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>