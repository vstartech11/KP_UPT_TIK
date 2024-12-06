<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Suhu</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Monitoring Suhu Ruangan</h1>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600">ID</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600">Nilai Suhu (°C)</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600">Waktu Pengukuran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($temperatures as $temperature)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-800">{{ $temperature->id }}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-800">{{ $temperature->value }}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-800">{{ $temperature->measured_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
