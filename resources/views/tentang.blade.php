<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Tentang')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<p>Ini Adalah Halaman Tentang</p>
	<p>
		Jadi halaman ini berisi tentang apa itu Belajar Laravel,
		Belajar Laravel adalah web pertama saya sebagai permulaan dalam mempelajari Laravel.
		For Your Information Laravel adalah kerangka kerja aplikasi web berbasis PHP yang sumber terbuka, 
		menggunakan konsep Model-View-Controller. 
		Laravel menggunakan metode MVC yaitu Model, View dan Controller.
	</p>
 
@endsection