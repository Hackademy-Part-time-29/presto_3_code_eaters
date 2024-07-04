
{{-- NON TOCCARE, SOLO EMANUELE PUO' BASTARDI --}}


<x-h-t-m-l>
    <x-layout>

<div class="container">
    <h1>Lista Revisioni</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Articolo</th>
                <th>Revisione</th>
                <th>Stato</th>
                <th>Revisionato alle :</th>
                <th>Azioni</th> <!-- Aggiunto il titolo per la colonna delle azioni -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sedia</td>
                <td>Marzio</td>
                <td>Accettato</td>
                <td>11:34 04/07/2024</td>
                <td>
                    <!-- Form per revocare la possibilità di revisione -->
                    {{-- <form action="{{ route('admin.revokeReviewAccess', ['id' => $reviewer->id]) }}" method="POST">
                        @csrf --}}
                        <button type="submit" class="btn btn-danger btn-sm">Revoca accesso revisione</button>
                        <button type="submit" class="btn btn-info btn-sm">Vedi dettagli</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>












    </x-layout>
</x-h-t-m-l>