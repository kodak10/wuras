@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h1>Gestion des Permissions</h1>
    <form action="{{ route('admin.permissions.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="role">Choisissez un rôle</label>
            <select name="role_id" id="role" class="form-control" required>
                <option value="">-- Sélectionnez un rôle --</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                @endforeach
            </select>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Menu</th>
                    <th>Liste</th>
                    <th>Ajouter</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach($groupedPermissions as $menu => $permissions)
                    <tr>
                        <td>{{ ucfirst($menu) }}</td>
                        @foreach(['index', 'create', 'edit', 'delete'] as $action)
                            <td>
                                <input type="checkbox" name="permissions[]" value="{{ $menu . '.' . $action }}"
                                    id="{{ $menu . '.' . $action }}">
                            </td>
                        @endforeach
                    </tr>
                @endforeach

            </tbody>
        </table>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>

    
    
</div>
@endsection

@push('scripts')
<script>
document.getElementById('role').addEventListener('change', function () {
    let roleId = this.value;

    // Vérifier si un rôle est sélectionné
    if (!roleId) return;

    // Récupérer les permissions du rôle via l'API
    fetch(`/admin/api/roles/${roleId}/permissions`)
        .then(response => response.json())
        .then(data => {
            // Vérifier si une erreur est retournée
            if (data.error) {
                alert(data.error);
                return;
            }

            // Désélectionner toutes les cases
            document.querySelectorAll('input[type=checkbox]').forEach(checkbox => checkbox.checked = false);

            // Sélectionner les permissions du rôle
            data.forEach(permission => {
                let checkbox = document.getElementById(permission);
                if (checkbox) checkbox.checked = true;
            });

            // Afficher les permissions dans la liste des accès accordés
            let accessList = document.getElementById('access-list');
            accessList.innerHTML = ''; // Réinitialiser la liste

            if (data.length > 0) {
                data.forEach(permission => {
                    let listItem = document.createElement('li');
                    listItem.textContent = permission; // Affiche le nom de la permission
                    accessList.appendChild(listItem);
                });
            } else {
                let listItem = document.createElement('li');
                listItem.textContent = 'Aucune permission accordée.';
                accessList.appendChild(listItem);
            }
        })
        .catch(error => {
            alert('Une erreur est survenue lors de la récupération des permissions.');
            console.error(error);
        });
});


</script>

@endpush
