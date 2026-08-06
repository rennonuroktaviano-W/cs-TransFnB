<!DOCTYPE html>
<html lang="id" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Trans F&B</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body class="bg-slate-950 text-white p-6 font-sans">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-blue-500">Admin Dashboard Trans F&B</h1>

        @if(session('success'))
        <div class="bg-green-600/20 border border-green-500 text-green-300 p-4 rounded-xl mb-6">
            {{ session('success') }}
        </div>
        @endif

        <!-- TABEL SUBSCRIBERS -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4">Daftar Email Subscribers</h2>
            <table class="w-full text-left text-sm text-slate-300">
                <thead class="border-b border-slate-800 text-xs uppercase text-slate-500">
                    <tr>
                        <th class="py-3">ID</th>
                        <th class="py-3">Email</th>
                        <th class="py-3">Tanggal Daftar</th>
                        <th class="py-3 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subscribers as $sub)
                    <tr class="border-b border-slate-800/50">
                        <td class="py-3">{{ $sub->id }}</td>
                        <td class="py-3">{{ $sub->email }}</td>
                        <td class="py-3">{{ $sub->created_at }}</td>
                        <td class="py-3 text-right">
                            <form action="{{ route('admin.subscriber.destroy', $sub->id) }}" method="POST"
                                class="inline">
                                @csrf @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500/20 text-red-400 px-3 py-1 rounded-lg text-xs hover:bg-red-500 hover:text-white transition">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- TABEL CONTACT US -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">
            <h2 class="text-xl font-semibold mb-4">Pesan Masuk (Contact Us)</h2>
            <table class="w-full text-left text-sm text-slate-300">
                <thead class="border-b border-slate-800 text-xs uppercase text-slate-500">
                    <tr>
                        <th class="py-3">Nama</th>
                        <th class="py-3">Email</th>
                        <th class="py-3">Subjek & Pesan</th>
                        <th class="py-3">Status</th>
                        <th class="py-3 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr class="border-b border-slate-800/50">
                        <td class="py-3 font-medium text-white">{{ $contact->nama_lengkap }}</td>
                        <td class="py-3">{{ $contact->email }}</td>
                        <td class="py-3">
                            <span class="font-bold text-blue-400 block">{{ $contact->subjek }}</span>
                            <span class="text-slate-400 text-xs">{{ $contact->pesan }}</span>
                        </td>
                        <td class="py-3">
                            <span
                                class="px-2 py-1 rounded text-xs {{ $contact->status == 'Sudah Dibaca' ? 'bg-green-500/20 text-green-400' : 'bg-yellow-500/20 text-yellow-400' }}">
                                {{ $contact->status }}
                            </span>
                        </td>
                        <td class="py-3 text-right space-x-2">
                            @if($contact->status == 'Belum Dibaca')
                            <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST"
                                class="inline">
                                @csrf @method('PATCH')
                                <button type="submit"
                                    class="bg-blue-500/20 text-blue-400 px-3 py-1 rounded-lg text-xs hover:bg-blue-500 hover:text-white transition">Tandai
                                    Dibaca</button>
                            </form>
                            @endif
                            <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST"
                                class="inline">
                                @csrf @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500/20 text-red-400 px-3 py-1 rounded-lg text-xs hover:bg-red-500 hover:text-white transition">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>