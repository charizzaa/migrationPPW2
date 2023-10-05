@extends('master')
@section('body')
	<div class="container card p-4 d-flex align-items-center">
		<h4 style="font-weight: bold">Tambah buku</h4>
		<form method="post" action="{{ route('buku.store') }}">
		@csrf
		<table>
			<tr>
				<td>Judul </td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Penulis </td>
				<td><input type="text" name="penulis"></td>
			</tr>
			<tr>
				<td>Harga </td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>Tanggal Terbit </td>
				<td><input type="date" name="tgl_terbit"></td>
			</tr>
		</table>
			<div class="d-flex w-100 justify-content-evenly mt-3">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="button" class="btn btn-outline-danger"><a href="/buku" style="text-decoration: none; color:red;">Batal</a></button>
			</div>
		</form>
	</div>
@endsection