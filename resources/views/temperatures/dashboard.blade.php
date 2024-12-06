<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Monitoring Suhu</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
@if(session('success'))
    <div class="w-full max-w-xl mx-auto mb-6">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Sukses!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    </div>
@endif

    <div class="min-h-screen flex flex-col items-center py-8">
        <!-- Header -->
        <h1 class="text-4xl font-extrabold text-gray-800 mb-6">Dashboard Monitoring Suhu</h1>
        
        <!-- Connect Button -->
        <div class="flex justify-center mb-8">
            <form action="{{ route('connect.ip') }}" method="POST" class="flex items-center">
                @csrf
                <input type="text" name="ip_address" placeholder="Masukkan IP Address" 
                       class="px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300" required>
                <button type="submit" 
                        class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 shadow-lg">
                    Hubungkan
                </button>
            </form>
        </div>

        <!-- Table -->
        <div class="w-11/12 lg:w-3/4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-blue-600 text-white text-sm uppercase">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Suhu Ruangan (°C)</th>
                        <th class="py-3 px-6 text-left">Suhu Rak Server (°C)</th>
                        <th class="py-3 px-6 text-left">Kecepatan Kipas 1 (RPM)</th>
                        <th class="py-3 px-6 text-left">Kecepatan Kipas 2 (RPM)</th>
                        <th class="py-3 px-6 text-left">Waktu Pengukuran</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm">
                    @forelse($temperatures as $temperature)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-6">{{ $temperature->id }}</td>
                            <td class="py-3 px-6">{{ $temperature->room_temperature }}</td>
                            <td class="py-3 px-6">{{ $temperature->rack_temperature }}</td>
                            <td class="py-3 px-6">{{ $temperature->fan_speed_1 }}</td>
                            <td class="py-3 px-6">{{ $temperature->fan_speed_2 }}</td>
                            <td class="py-3 px-6">{{ $temperature->measured_at }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-3 px-6 text-center text-gray-500">
                                Tidak ada data suhu tersedia
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
