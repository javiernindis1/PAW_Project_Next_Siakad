<x-student-layout>
    <x-layout>
        <main class="ml-20 mr-20 mt-5">
            <div class="bg-white rounded-lg shadow-lg">
                <h1 class="text-2xl font-bold text-gray-800 ml-5 mt-5">Daftar Absensi</h1>
                <div class="p-5 grid grid-cols-1 md:grid-cols-2 gap-4 m-3 mx-auto">

                    <div class="bg-slate-100 rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow duration-200 space-y-4">
                        <div class="text-center space-y-1">
                            <h2 class="text-lg font-semibold text-gray-800">Matkul 1</h2>
                            <p class="text-gray-600">Kelas A</p>
                        </div>
                        
                        <div class="space-y-2">
                            <a href="../student/absensi" class="block w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200 text-center">
                                ABSENSI →
                            </a>
                            
                            <a href="../student/materi" class="block w-full bg-emerald-500 hover:bg-emerald-600 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200 text-center">
                                Materi
                            </a>

                            <a href="../student/eval-dosen" class="block w-full bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200 text-center">
                                Form Evaluasi
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </main>
    </x-layout>
</x-student-layout>