<x-app-layout>

    <x-slot name="header">
        <div class="col-12 text-center dark-grey-text" id="">
            <!-- Section heading -->
            <h2 class="h2 font-weight-bold mb-4 pb-2 font2">Admin <span
                    class="text-primary text-uppercase">Messages</span></h2>
        </div>
    </x-slot>

    <form method="POST" action="{{ route('admin_messages_remove') }}" id="messages-remove-form" class="">
        @csrf

        <div class="container-fluid my-5" id="admin_messages" onclick="getRowContent(event)">

            <div class="row">

                <div class="col-12">

                    <div class="datatable" data-mdb-pagination="true" data-mdb-striped="true"
                         data-mdb-noFoundMessage="You Do Not Currently Have Any Received Messages">
                        <table>
                            <thead>
                            <tr>
                                <th class="th-sm"></th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Email Address</th>
                                <th class="th-sm">Phone</th>
                                <th class="th-sm">Organization</th>
                                <th class="th-sm">Reason</th>
                                <th class="th-sm">Received date</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($messages as $message)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="message_id[]"
                                                   value="{{ $message->id }}" id="checkbox{{ $message->id }}"
                                                   onchange="addDeleteMessagesBtn()"/>
                                            <label class="form-check-label" for="checkbox{{ $message->id }}"></label>
                                        </div>
                                    </td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->concat_phone() }}</td>
                                    <td>{{ $message->organization }}</td>
                                    <td>{{ $message->reason }}</td>
                                    <td>{{ $message->created_at->format('m/d/Y') }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="messagesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @section('additional_scripts')
        <script type="text/javascript" src="{{ asset('js/myjs.js') }}"></script>
        <script type="text/javascript">
            function getRowContent(event) {
                var element = event.target;

                if(element.nodeName != 'TH') {
                    var rowElement = element.parentElement;
                    var rowNameField = rowElement.children[1].textContent;
                    var rowEmailField = rowElement.children[2].textContent;
                    var rowPhoneField = rowElement.children[3].textContent;
                    var rowOrganizationField = rowElement.children[4].textContent;
                    var rowReasonField = rowElement.children[5].textContent;
                    var rowDateField = rowElement.children[6].textContent;

                    const myModalEl = document.getElementById('messagesModal')
                    const modal = new mdb.Modal(myModalEl);

                    document.getElementsByClassName('modal-title')[0].innerHTML = rowNameField;
                    document.getElementsByClassName('modal-body')[0].innerHTML = rowReasonField;

                    modal.show()
                }
            }
        </script>
    @endsection

</x-app-layout>
