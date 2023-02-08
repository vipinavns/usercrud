<div>
<title>User management</title>

<div class="card card-body shadow border-0 table-wrapper table-responsive">
    <table class="table user-table table-hover align-items-center">
        <thead>
            <tr>
                <th class="border-bottom">Name</th>
                <th class="border-bottom">Email</th>
                <th class="border-bottom">Gender</th>
                <th class="border-bottom">Date Created</th>
                <th class="border-bottom">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>
                    <a href="#" class="d-flex align-items-center">
                        <img src="../assets/img/team/profile-picture-1.jpg" class="avatar rounded-circle me-3"
                            alt="Avatar">
                        <div class="d-block">
                            <span class="fw-bold">{{ $user->first_name }}</span>
                            <div class="small text-gray">{{ $user->last_name }}</div>
                        </div>
                    </a>
                </td>
                <td><span class="fw-normal">{{ $user->email }}</span></td>
                <td><span class="fw-normal">{{ $user->gender }}</span></td>
                <td><span class="fw-normal d-flex align-items-center">{{ $user->created_at }}</span></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                </path>
                            </svg>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                            <button type="button" wire:click="deleteId({{ $user->id }})" class="dropdown-item text-danger d-flex align-items-center">
                                <span class="fas fa-user-times me-2"></span>
                                Delete user
                            </button>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>