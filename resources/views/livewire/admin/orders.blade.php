<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Commandes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row mt-5 ">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow  ">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Liste des commandes</h3>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="card card-table-border-none" id="recent-orders">
                                    <div class="card-header justify-content-between">
                                        <form method="GET" id="form">
                                            <div class="form-row">
                                                <div class="form-group col-xl-4 col-md-6">
                                                    <label for="from_date">Date de début</label>
                                                    <input type="date" name="from_date" id="from_date" class="form-control"/>
                                                </div>
                                                <div class="form-group col-xl-4 col-md-6">
                                                    <label for="to_date">Date de fin</label>
                                                    <input type="date" name="to_date" id="to_date" class="form-control"/>
                                                </div>
                                                <div class="form-group col-xl-4 text-right">
                                                    <br>
                                                    <button class="btn btn-primary mt-2"
                                                        type="submit">Filtrer</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="table-responsive" style="min-height: 20rem">
                                        <table id="tableOrder" class="table card-table table-hover">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Client</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Livraison</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Address</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($orders as $order) --}}
                                                    <tr {{-- data-href="{{ route('admin.order.show', $order->id) }}" --}}
                                                        class="link" style="cursor: pointer;">
                                                        <td>{{-- {{ $order->client_name }} <br>
                                                            {{ $order->client_phone }}{{ $order->client_phone2 ? '/' . $order->client_phone2 : '' }} --}}
                                                        </td>

                                                        <td>
                                                            {{-- {{ $order->pre_order ? 'Pre commande' : 'Commande simple' }} --}}
                                                        </td>

                                                        <td>{{-- {{ $order->getTotal() }} DA --}}</td>

                                                        <td>
                                                            {{-- @isset($order->status)
                                                                <span
                                                                    class="badge badge-{{ $order->status == 'Returned' ? 'danger' : ($order->status == 'Pending' ? 'warning' : ($order->status == 'In delivery' ? 'info' : 'success')) }}">
                                                                    {{ __($order->status) }}
                                                                </span>
                                                            @endisset --}}
                                                        </td>
                                                        <td>
                                                            {{-- @if ($order->deliveryAgent)
                                                                Dar el sinjad
                                                            @elseif ($order->yalidine_tracking)
                                                                Yalidine
                                                                <br>
                                                                {{$order->yalidine_tracking}}
                                                            @else
                                                                /
                                                            @endif --}}
                                                        </td>
                                                        <td>{{-- {{ date('Y-m-d', strtotime($order->created_at)) }} --}}</td>
                                                        <td>{{-- {{ $order->client_address }} <br>
                                                            {{ $order->city->state->name }} --}}
                                                        </td>
                                                    </tr>
                                                {{-- @endforeach --}}
                                            </tbody>
                                        </table>
                                        <div class="pagination justify-content-center mt-3">
                                            {{-- {{ $orders->links() }} --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
