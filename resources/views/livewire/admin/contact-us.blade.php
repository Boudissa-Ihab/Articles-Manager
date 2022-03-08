<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Messages</li>
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
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Messages des clients</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-table-border-none" id="recent-orders">
                                <div class="table-responsive" style="min-height: 20rem">
                                    <table id="tableMessages" class="table card-table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th></th>
                                                <th scope="col">Nom</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Message</th>
                                                <th scope="col">Date d'envoi</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            @foreach ($this->contacts as $contact)
                                                <tr>
                                                    <td></td>
                                                    <td>{{ $contact->name }}</td>
                                                    <td>{{ $contact->email }}</td>
                                                    <td>{{ Str::limit($contact->message, 35) }}</td>
                                                    <td>{{ $contact->created_at }}</td>
                                                    <td class="text-right">
                                                        <a href="" class="btn btn-info btn-sm" data-target="#view-message-modal"
                                                            data-toggle="modal" wire:click="setContact({{ $contact->id }})" title="Message"
                                                            role="button" aria-pressed="true"><i class="fas fa-info-circle"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination justify-content-center mt-3">
                                        {{ $this->contacts->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- View message content -->
	<div wire:ignore.self class="modal fade" id="view-message-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="contact-name">{{ $this->contact->name ?? "" }} : {{ $this->contact->email ?? "" }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <span style="display: block;" role="alert">
                        {{ $this->contact->message ?? "" }}
                    </span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button class="btn btn-primary btn-lg" role="button">
                        <a href="mailto:{{ $this->contact->email ?? '' }}" style="color: white;">
                            Répondre
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------- END MODALS ---------------------------------->
</div>
