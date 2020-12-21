@extends('layouts.base')

@section('title')
    entreprises
@endsection


@section('contenue')
    <div class="card mb-3" id="customersTable"
         data-list='{"valueNames":["name","email","phone","address","joined"],"page":10,"pagination":true}'>
        <div class="card-header">
            <div class="row flex-between-center">
                <div class="col-4 col-sm-auto d-flex align-items-center pr-0">
                    <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Liste des entreprises</h5>
                </div>
                <div class="col-8 col-sm-auto text-right pl-2">
                    {{--                    <div class="d-none" id="table-customers-actions">--}}
                    {{--                        <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">--}}
                    {{--                                <option selected="">Bulk actions</option>--}}
                    {{--                                <option value="Refund">Refund</option>--}}
                    {{--                                <option value="Delete">Delete</option>--}}
                    {{--                                <option value="Archive">Archive</option>--}}
                    {{--                            </select>--}}
                    {{--                            <button class="btn btn-falcon-default btn-sm ml-2" type="button">Apply</button>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div id="table-customers-replace-element">
                        <button class="btn btn-falcon-default btn-sm" type="button">
                            <span class="fas fa-add" data-fa-transform="shrink-3 down-2"></span>
                            <span class="d-none d-sm-inline-block ml-1">Ajouter</span>
                        </button>
                        <button class="btn btn-falcon-default btn-sm" type="button">
                            <span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span>
                            <span class="d-none d-sm-inline-block ml-1">Export</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-sm table-striped fs--1 mb-0">
                    <thead class="bg-200 text-900">
                    <tr>
                        <th class="sort pr-1 align-middle white-space-nowrap" data-sort="name">Name</th>
                        <th class="sort pr-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                        <th class="sort pr-1 align-middle white-space-nowrap" data-sort="phone">Phone</th>
                        <th class="sort pr-1 align-middle white-space-nowrap pl-5" data-sort="address"
                            style="min-width: 200px;"> Address
                        </th>
                        <th class="sort pr-1 align-middle white-space-nowrap" data-sort="joined">créé</th>
                        <th class="align-middle no-sort"></th>
                    </tr>
                    </thead>
                    <tbody class="list" id="table-customers-body">
                    @foreach($entreprises as $entreprise)
                        <tr class="btn-reveal-trigger">
                            <td class="name align-middle white-space-nowrap py-2"><a
                                    href="e-commerce/customer-details.html">
                                    <div class="d-flex d-flex align-items-center">
                                        <div class="avatar avatar-xl mr-2">
                                            <div class="avatar-name rounded-circle">
                                                <img src="{{ $entreprise->logo }}" class="rounded-circle" alt="{{ $entreprise->nom }}" >
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <h5 class="mb-0 fs--1">{{ $entreprise->nom }}</h5>
                                        </div>
                                    </div>
                                </a></td>
                            <td class="email align-middle py-2">
                                <a href="mailto:{{ $entreprise->email }}">{{ $entreprise->email }}</a>
                            </td>
                            <td class="phone align-middle white-space-nowrap py-2">
                                <a href="tel:{{$entreprise->telephone}}">{{$entreprise->telephone}}</a>
                            </td>
                            <td class="address align-middle white-space-nowrap pl-5 py-2">
                                {{ $entreprise->adresse }}
                            </td>
                            <td class="joined align-middle py-2">{{ date_format($entreprise->created_at,'Y/m/d')  }}</td>
                            <td class="align-middle white-space-nowrap py-2 text-right">
                                <div class="dropdown font-sans-serif">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                                            type="button"
                                            id="customer-dropdown-0" data-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false"><span
                                            class="fas fa-ellipsis-h fs--1"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right border py-0"
                                         aria-labelledby="customer-dropdown-0">
                                        <div class="bg-white py-2"><a class="dropdown-item" href="{{ route('entreprise.edit',['id'=>$entreprise->id]) }}">Edit</a><a
                                                class="dropdown-item text-danger" href="#!">Delete</a></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-center">
            <button class="btn btn-sm btn-falcon-default mr-1" type="button" title="Previous"
                    data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
            <ul class="pagination mb-0"></ul>
            <button class="btn btn-sm btn-falcon-default ml-1" type="button" title="Next" data-list-pagination="next">
                <span class="fas fa-chevron-right"></span></button>
        </div>
    </div>
@endsection
