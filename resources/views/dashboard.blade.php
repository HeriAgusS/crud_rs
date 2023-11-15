<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </x-slot>

    <div class="py-12">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <button type="button" class="btn btn-success">Tambah Data</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Function</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Heri</td>
                    <td>Magelang</td>
                    <td>23</td>
                    <td>
                        <button type="button" class="btn btn-info">Info Data</button>
                    <td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Aria</td>
                    <td>Yogyakarta</td>
                    <td>23</td>
                    <td>
                        <button type="button" class="btn btn-info">Info Data</button>
                    <td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Mustopa</td>
                    <td>Rembang</td>
                    <td>69</td>
                    <td>
                        <button type="button" class="btn btn-info">Info Data</button>
                    <td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
