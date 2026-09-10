<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        {{-- NIM --}}
                        <div>
                            <label class="block font-medium text-sm text-gray-700">NIM</label>
                            <input type="text" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                            @error('nim') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Nama --}}
                        <div>
                            <label class="block font-medium text-sm text-gray-700">Nama Lengkap</label>
                            <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                            @error('nama') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Tempat Lahir --}}
                        <div>
                            <label class="block font-medium text-sm text-gray-700">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $mahasiswa->tempat_lahir) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                            @error('tempat_lahir') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Tanggal Lahir --}}
                        <div>
                            <label class="block font-medium text-sm text-gray-700">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                            @error('tanggal_lahir') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Jenis Kelamin --}}
                        <div>
                            <label class="block font-medium text-sm text-gray-700">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="Laki-laki" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Program Studi --}}
                        <div>
                            <label class="block font-medium text-sm text-gray-700">Program Studi</label>
                            <input type="text" name="program_studi" value="{{ old('program_studi', $mahasiswa->program_studi) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                            @error('program_studi') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- No HP --}}
                        <div>
                            <label class="block font-medium text-sm text-gray-700">No HP</label>
                            <input type="text" name="no_hp" value="{{ old('no_hp', $mahasiswa->no_hp) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                            @error('no_hp') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label class="block font-medium text-sm text-gray-700">Email</label>
                            <input type="email" name="email" value="{{ old('email', $mahasiswa->email) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                            @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    {{-- Alamat --}}
                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700">Alamat</label>
                        <textarea name="alamat" rows="3" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                        @error('alamat') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Tombol --}}
                    <div class="mt-6 flex space-x-3">
                        <button type="submit" class="px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-700">
                            Perbarui Data
                        </button>
                        <a href="{{ route('mahasiswa.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">
                            Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>