<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.clients') }}">Clients</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{-- {{ $client->full_name }} --}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row mt-5 ">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('argon/img/theme/team-4-800x800.jpg') }}" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pt-8 pt-md-4 pb-0 pb-md-4"></div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading">{{-- {{ $client->order()->count() }} --}}</span>
                                        <span class="description">Commande</span>
                                    </div>
                                    <div>
                                        <span class="heading">{{-- {{ $nb_messages }} --}}</span>
                                        <span class="description">Messages</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center col-12">
                                <h3>{{-- {{ $client->full_name }} --}}</h3>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>{{-- {{ $client->address }} --}}
                                </div>
                                <div class="h5">
                                    <i class="ni business_briefcase-24 mr-2"></i>{{-- {{ $client->ville . __(', ') . $client->wilaya }} --}}
                                </div>
                                <div class="h5 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i>{{-- {{ $client->email }} --}}
                                </div>
                                <div>
                                    <i class="ni education_hat mr-2"></i>{{ $client->phone_number }}
                                </div>
                                <br>
                                <form id="delete-client-form-{{ $client->id }}"
                                    action="{{ route('admin.clients.delete', $client->id) }}" method="POST"
                                    style="display: none">
                                </form>
                                <hr class="my-4" />
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-1">
                        {{-- <div class="row align-items-center">
                            <h3 class="mb-0">{{ $client->full_name . __(' #') . $client->id }}</h3>
                            <div class="mx-auto"></div>
                            @if ($client->status == '1')
                                <button type="button" class="btn btn-warning" onclick="event.preventDefault();
                                 document.getElementById('ban-client-form-{{ $client->id }}').submit();">
                                    <span>{{ __('Ban') }}</span>
                                </button>
                                <form id="ban-client-form-{{ $client->id }}"
                                    action="{{ route('admin.clients.ban', $client->id) }}" method="POST"
                                    style="display: none;">
                                </form>
                            @else
                                <button type="button" class="btn btn-success"
                                    onclick="event.preventDefault();
                                                                                                                                                        document.getElementById('activate-client-form-{{ $client->id }}').submit();"><span>{{ __('Activate') }}</span></button>
                                <form id="activate-client-form-{{ $client->id }}"
                                    action="{{ route('admin.clients.activate', $client->id) }}" method="POST"
                                    style="display: none;">
                                </form>
                            @endif
                            <button type="button" class="btn btn-danger"
                                    onclick="showDeleteAlert({
                                        event:event,
                                        formId:'delete-client-form-{{ $client->id }}',
                                        confirmButtonText:'{{ __('Supprimer') }}',
                                        cancelButtonText:'{{ __('Annuler') }}',
                                        title:'{{ __('Êtes vous sûr ?') }}',
                                        text:'{{ __('This record and its details will be permanently deleted') }}'
                                    })">
                                Supprimer l'utilisateur
                            </button>
                        </div> --}}
                    </div>
                    <div class="card-body p-0">
                        <div class="bg-white p-3 mt-3">
                            <h6 class="heading-small text-muted mb-4">{{ __('Orders') }}</h6>
                            <div class="table-responsive " style="min-height: 20rem">
                                @if ($orders->count())
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="name">
                                                    #
                                                </th>
                                                <th scope="col" class="sort" data-sort="budget">
                                                    Somme
                                                </th>
                                                <th scope="col" class="sort" data-sort="budget">
                                                    Date
                                                </th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            {{-- @foreach ($orders as $order)
                                                <tr>
                                                    <th>
                                                        {{ $order->id }}
                                                    </th>
                                                    <td>
                                                        {{ $order->created_at }}
                                                    </td>
                                                    <td>
                                                        {{ $order->status }}
                                                    </td>
                                                    <td>
                                                        {{ $order->orderHasProduct->sum(function ($element) {
                                                            return $element['quantity'] * $element['price'];
                                                        }) }}
                                                        DA
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="{{ route('admin.order.show', $order->id) }}"
                                                            class="btn btn-info btn-sm" role="button"
                                                            aria-pressed="true">Détails</a>
                                                    </td>
                                                </tr>
                                            @endforeach --}}
                                        </tbody>
                                    </table>
                                    <div class="pagination justify-content-center mt-3">
                                        {{-- {{ $orders->links() }} --}}
                                    </div>
                                @else
                                    <div class="d-flex flex-column align-items-center justify-content-center"
                                        style="height: 20rem">
                                        <span style="font-size: 5em;" class="text-danger">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <div>Aucune commande trouvée</div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
