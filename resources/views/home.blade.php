<x-layout>
  {{-- x-slot ini fungsinya buat bikin variabel slot agar bisa ganti sesuai isian yang kita mau pada bagian header, ia akan mengambil isian yang kita buat di web.php, jangan lupa pada bagian layout kita buat slot yang namanya diganti menjadi title, sesuai dengan variabel slot yang kita kasi tadi namanya jadi title --}}
  <x-slot:title>{{$title}}</x-slot:title>
  
  {{-- Layout udah memuat navbar sama header, jadi dibawah ini tinggal isikan bagian kontennya saja(main) --}}
  <h3>Ini bagian konten home</h3>
</x-layout>