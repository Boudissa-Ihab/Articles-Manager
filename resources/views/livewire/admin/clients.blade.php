<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Clients</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row mt-5 ">
            <div class="col mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Liste des clients</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive" style="min-height: 20rem">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort">ID</th>
                                    <th scope="col" class="sort">Nom & Prénom</th>
                                    <th scope="col" class="sort">Téléphone 1</th>
                                    <th scope="col" class="sort">Téléphone 2</th>
                                    <th scope="col" class="sort">Email</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                {{-- @foreach ($clients as $client) --}}
                                    <tr>
                                        <th>
                                            {{-- {{ $client->id }} --}}
                                        </th>
                                        <td>
                                            <a href="{{-- {{ route('admin.clients.show', $client->id) }} --}}">
                                                {{-- {{ $client->full_name }} --}}
                                            </a>
                                        </td>
                                        <td>
                                            {{-- {{ $client->phone_number }} --}}
                                        </td>
                                        <td>
                                            {{-- {{ $client->phone2 ?? '/' }} --}}
                                        </td>
                                        <td>
                                            {{-- {{ $client->email ?? '/' }} --}}
                                        </td>
                                        {{-- <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.clients.show', $client->id) }}">{{ __('View') }}
                                                    </a>
                                                    @if ($client->status == '1')
                                                        <a href="#" class="dropdown-item text-danger"
                                                            onclick="event.preventDefault();
                                                                        document.getElementById('ban-client-form-{{ $client->id }}').submit();">
                                                            <span>{{ __('Ban') }}</span>
                                                        </a>
                                                        <form id="ban-client-form-{{ $client->id }}"
                                                            action="{{ route('admin.clients.ban', $client->id) }}"
                                                            method="POST" style="display: none;">
                                                        </form>
                                                    @else
                                                        <a href="#" class="dropdown-item text-success"
                                                            onclick="event.preventDefault();
                                                                        document.getElementById('activate-client-form-{{ $client->id }}').submit();">
                                                            <span>{{ __('Activate') }}</span>
                                                        </a>
                                                        <form id="activate-client-form-{{ $client->id }}"
                                                            action="{{ route('admin.clients.activate', $client->id) }}"
                                                            method="POST" style="display: none;">
                                                        </form>
                                                    @endif
                                                    <a href="#" class="dropdown-item text-danger" onclick="showDeleteAlert({
                                                            event:event,
                                                            formId:'delete-client-form-{{ $client->id }}',
                                                            confirmButtonText:'{{ __('Yes, delete') }}',
                                                            cancelButtonText:'{{ __('Cancel') }}',
                                                            title:'{{ __('Are you sure') }}',
                                                            text:'{{ __('This record and its details will be permanently deleted') }}'
                                                        })">
                                                        <span>{{ __('Delete user') }}</span>
                                                    </a>
                                                    <form id="delete-client-form-{{ $client->id }}"
                                                        action="{{ route('admin.clients.delete', $client->id) }}" method="POST"
                                                        style="display: none;">
                                                    </form>
                                                </div>
                                            </div>
                                        </td> --}}
                                    </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                        <div class="pagination justify-content-center mt-3">
                            {{-- {{ $clients->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
