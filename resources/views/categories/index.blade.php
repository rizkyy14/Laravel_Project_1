@extends('layout.app')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">News</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">Berita Terbaru</h2>
                        <img src="https://plus.unsplash.com/premium_photo-1688561384438-bfa9273e2c00?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bmV3c3xlbnwwfHwwfHx8MA%3D%3D" alt="">
                        <a class="text-blue-500 hover:underline">Baca
                            Selengkapnya</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">Berita Terkini</h2>
                        <img src="https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8bmV3c3xlbnwwfHwwfHx8MA%3D%3D" alt="">
                        <a class="text-blue-500 hover:underline">Baca
                            Selengkapnya</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">Berita Terupdate</h2>
                        <img src="https://images.unsplash.com/photo-1585829365295-ab7cd400c167?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bmV3c3xlbnwwfHwwfHx8MA%3D%3D" alt="">
                        <a class="text-blue-500 hover:underline">Baca
                            Selengkapnya</a>
                    </div>
                </div>
        </div>
    </div>
@endsection
