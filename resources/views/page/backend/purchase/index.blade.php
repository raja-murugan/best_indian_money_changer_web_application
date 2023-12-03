@extends('layout.backend.auth')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="content-page-header">
                    <h6>Purchase</h6>
                    <div class="list-btn">
                        <div style="display: flex;">
                            <form autocomplete="off" method="POST" action="{{ route('purchase.index') }}">
                                @method('PUT')
                                @csrf
                                <div style="display: flex">
                                    <div style="margin-right: 10px;"><input type="date" name="from_date"
                                            class="form-control from_date" value="{{ $today_date }}"></div>
                                    <div style="margin-right: 10px;"><input type="submit" class="btn btn-success"
                                            value="Filter" /></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover datatable table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width:20%">S.No</th>
                                            <th style="width:20%">Created On</th>
                                            <th style="width:35%">Currency</th>
                                            <th style="width:35%">Count</th>
                                            <th style="width:35%">Price Per Curreny in INR</th>
                                            <th style="width:35%">Total</th>
                                            <th style="width:25%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($purchase_index_data as $keydata => $purchase_index_datas)
                                            <tr>
                                                <td>{{ ++$keydata }}</td>
                                                <td>{{ date('h:i A', strtotime($purchase_index_datas->time)) }}</td>
                                                <td>{{ $purchase_index_datas->currency->name }}</td>
                                                <td>{{ $purchase_index_datas->purchases_count }}</td>
                                                <td>{{ $purchase_index_datas->purchases_count_per_price }}</td>
                                                <td>{{ $purchase_index_datas->total }}</td>
                                                <td>
                                                    <ul class="list-unstyled hstack gap-1 mb-0">
                                                        <li>
                                                            <a class="badge bg-warning"
                                                                href="#edit{{ $purchase_index_datas->unique_id }}"
                                                                data-bs-toggle="modal"
                                                                data-bs-target=".purchaseedit-modal-xl{{ $purchase_index_datas->unique_id }}"
                                                                style="color: white;">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#delete{{ $purchase_index_datas->unique_id }}"
                                                                data-bs-toggle="modal"
                                                                data-bs-target=".purchasedelete-modal-xl{{ $purchase_index_datas->unique_id }}"
                                                                class="badge bg-danger" style="color: white;">Delete</a>
                                                        </li>
                                                    </ul>

                                                </td>
                                            </tr>

                                            <div class="modal fade purchaseedit-modal-xl{{ $purchase_index_datas->unique_id }}"
                                                tabindex="-1" role="dialog" data-bs-backdrop="static"
                                                aria-labelledby="purchaseeditLargeModalLabel{{ $purchase_index_datas->unique_id }}"
                                                aria-hidden="true">
                                                @include('page.backend.purchase.edit')
                                            </div>
                                            <div class="modal fade purchasedelete-modal-xl{{ $purchase_index_datas->unique_id }}"
                                                tabindex="-1" role="dialog"data-bs-backdrop="static"
                                                aria-labelledby="purchasedeleteLargeModalLabel{{ $purchase_index_datas->unique_id }}"
                                                aria-hidden="true">
                                                @include('page.backend.purchase.delete')
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3">
                    @include('page.backend.purchase.create')
                </div>


            </div>

        </div>
    </div>
@endsection
