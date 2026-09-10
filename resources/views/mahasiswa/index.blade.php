<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Data Mahasiswa</h2>

        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-4">
            <a href="{{ route('mahasiswa.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 inline-block">
                + Tambah Mahasiswa
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
    <thead>
        <tr class="border-b">
            <th class="p-2">NIM</th>
            <th class="p-2">NAMA</th>
            <th class="p-2">TEMPAT LAHIR</th>
            <th class="p-2">TANGGAL LAHIR</th>
            <th class="p-2">JK</th>
            <th class="p-2">ALAMAT</th>
            <th class="p-2">PRODI</th>
            <th class="p-2">NO HP</th>
            <th class="p-2">EMAIL</th>
            <th class="p-2">AKSI</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $mhs)
        <tr class="border-b">
            <td class="p-2">{{ $mhs->nim }}</td>
            <td class="p-2">{{ $mhs->nama }}</td>
            <td class="p-2">{{ $mhs->tempat_lahir }}</td>
            <td class="p-2">{{ $mhs->tanggal_lahir }}</td>
            <td class="p-2">{{ $mhs->jenis_kelamin }}</td>
            <td class="p-2">{{ $mhs->alamat }}</td>
            <td class="p-2">{{ $mhs->program_studi }}</td>
            <td class="p-2">{{ $mhs->no_hp }}</td>
            <td class="p-2">{{ $mhs->email }}</td>
            <td class="p-2">
                <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
        </div>

        <div class="mt-4">
            {{ $mahasiswa->links() }}
        </div>
    </div>
</body>
</html>