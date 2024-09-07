<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SMS History') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-7xl">
                    <table class="table table-bordered" id="sms_datatable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Requested System</th>
                                <th>Requested By</th>
                                <th>Campaign Id</th>
                                <th>Contact Number</th>
                                <th>Type</th>
                                <th>Text</th>
                                <th>Status</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#sms_datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('sms-history.index') }}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'requested_system',
                            name: 'requested_system'
                        },
                        {
                            data: 'requested_by',
                            name: 'requested_by'
                        },
                        {
                            data: 'campaign_id',
                            name: 'campaign_id',
                            render: function(data) {
                                return data ? data :
                                    '<span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">NULL</span>';
                            }
                        },
                        {
                            data: 'contact_no',
                            name: 'contact_no'
                        },
                        {
                            data: 'type',
                            name: 'type',
                            render: function(data) {
                                return data ? data :
                                    '<span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">NULL</span>';
                            }
                        },
                        {
                            data: 'text',
                            name: 'text'
                        },
                        {
                            data: 'is_sent',
                            name: 'is_sent',
                            render: function(data) {
                                if (data) {
                                    return '<span class="text-no-wrap bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-1 rounded-full dark:bg-green-900 dark:text-green-300">Sent</span>';
                                } else {
                                    return '<span class="text-no-wrap bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-1 rounded-full dark:bg-red-900 dark:text-red-300">Not Sent</span>';
                                }
                            }
                        },
                        {
                            data: 'created_at',
                            name: 'created_at',
                            className: 'text-center',
                            render: function(data) {
                                return new Date(data).toLocaleString('en-US', {
                                    month: '2-digit',
                                    day: '2-digit',
                                    year: 'numeric',
                                    hour: '2-digit',
                                    minute: '2-digit',
                                    hour12: true
                                });
                            }
                        }
                    ]
                });
            });
        </script>
    @endpush
</x-app-layout>
