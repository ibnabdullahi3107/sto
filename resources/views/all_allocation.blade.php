<x-app-layout>
    <div class="content-body">
        <div class="col-lg-12 p-4">
            <div class="card">
                <div class="card-header mt-3">
                    <h4 class="card-title">Allocation and Store Items</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Source Store</th>
                                    <th>Destination Store</th>
                                    <th>Acceptance Status</th>
                                    <th>Accepted By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=0;
                                @endphp
                                @foreach($allocations as $allocation)
                                <tr>

                                    {{-- <td>{{ $storeItems[$i]->quantity }}</td> --}}
                                    {{-- <td><td>{{'optional'. optional($storeItems)[$i]->user->name.' ID:'.optional($storeItems)[$i]->accepted_by}}</td></td> --}}
                                    <td>{{$allocation->created_at->format('Y-m-d H:i:s') }}</td>

                                    <td>{{ $allocation->product->name }}</td>
                                    <td>{{ $allocation->quantity }}</td>


                                    <td>{{ optional($allocation)->transaction->sourceStore->name }}</td>
                                    <td>{{ optional($allocation)->store->name}}</td>
                                    {{-- <td>{{ $allocation->sender->name }}</td> --}}
                                    <td>
                                        @if (optional($allocation)->acceptance === 'accepted')
                                            <span class="badge badge-success">Accepted</span>
                                        @elseif (optional($allocation)->acceptance === 'rejected')
                                            <span class="badge badge-danger">Rejected</span>
                                        @else
                                            <span class="badge badge-warning">Pending</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{$allocation->accepted_by}}
                                    </td>

                                    <td>
                                        @if (!$allocation->acceptance=='accepted')
                                        <a class="btn btn-primary" href="{{route('allocation.accept',$allocation->id)}}" data-toggle="tooltip" data-placement="top" title="Edit" >
                                            Accept
                                        </a>

                                        @else
                                            <span class="badge badge-warning">Signed</span>
                                        @endif


                                </tr>
                                @php
                                    $i++
                                @endphp
                                @endforeach

                                {{-- @foreach($storeItems as $storeItem)
                                <tr>
                                    <td>{{ $storeItem->product->name }}</td>
                                    <td>{{ $storeItem->quantity }}</td>
                                    <td>{{ optional($storeItem->store)->name }}</td>
                                    <td>{{ optional($storeItem->toStore)->name }}</td>
                                    <td>{{ $storeItem->created_at->format('Y-m-d H:i:s') }}</td>
                                    <td>
                                        @if ($storeItem->acceptance_status === 'accepted')
                                            <span class="badge badge-success">Accepted</span>
                                        @elseif ($storeItem->acceptance_status === 'rejected')
                                            <span class="badge badge-danger">Rejected</span>
                                        @else
                                            <span class="badge badge-warning">Pending</span>
                                        @endif
                                    </td>


                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
