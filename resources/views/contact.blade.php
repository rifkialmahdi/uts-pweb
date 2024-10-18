@extends('layouts.app')

@section('title', 'Halaman Kontak')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Data Kontak</h1>
    <table class="w-full bg-white shadow-md rounded">
        <thead>
            <tr class="bg-gray-800 text-white">
                <th class="p-3 text-left">Nama</th>
                <th class="p-3 text-left">Email</th>
                <th class="p-3 text-left">Jabatan</th>
            </tr>
        </thead>
        <tbody>
            @php
                $contacts = [
                    ['nama' => 'rifki', 'email' => 'rifki@gmail.com', 'jabatan' => 'Mahasiswa'],
                    ['nama' => 'Pak Istiyadi', 'email' => 'Istiyadi@gmail.com', 'jabatan' => 'Dosen'],
                    ['nama' => 'rifki', 'email' => 'rifki@gmail.com', 'jabatan' => 'Mahasiswa'],
                    ['nama' => 'rifki', 'email' => 'rifki@gmail.com', 'jabatan' => 'Mahasiswa'],
                ];
            @endphp

            @foreach ($contacts as $contact)
                <tr class="border-b">
                    <td class="p-3">{{ $contact['nama'] }}</td>
                    <td class="p-3">{{ $contact['email'] }}</td>
                    <td class="p-3">{{ $contact['jabatan'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
