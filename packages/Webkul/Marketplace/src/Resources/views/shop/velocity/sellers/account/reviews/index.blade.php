@extends('shop::customers.account.index')

@section('page_title')
    {{ __('marketplace::app.shop.sellers.account.reviews.title') }}
@endsection

@section('page-detail-wrapper')

    <div class="account-layout">

        <div class="account-head mb-10">
            <span class="account-heading">
                {{ __('marketplace::app.shop.sellers.account.reviews.title') }}
            </span>

            <div class="horizontal-rule"></div>
        </div>

        {!! view_render_event('marketplace.sellers.account.reviews.list.before') !!}

        <div class="account-items-list">
            <div class="account-table-content">

                <datagrid-plus src="{{ route('marketplace.account.reviews.index') }}"></datagrid-plus>

            </div>
        </div>

        {!! view_render_event('marketplace.sellers.account.reviews.list.after') !!}

    </div>

@endsection