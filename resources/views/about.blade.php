<x-layout>
    {{-- Bawah ini bagian header yang title nya sesuai dengan yang kita isi pada bagian web.php --}}
    <x-slot:title>{{$title}}</x-slot:title>

    {{-- Ini bagian main atau konten kita --}}
    <h3>Bagian about</h3>
    <p>{{$name}}</p>
</x-layout>