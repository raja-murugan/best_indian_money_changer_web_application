<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <a href="javascript::void(o);">
                <img src="{{ asset('assets/backend/img/logo.png') }}" class="img-fluid logo" alt="">
            </a>
            <a href="javascript::void(o);">
                <img src="{{ asset('assets/backend/img/logo-small.png') }}" class="img-fluid logo-small" alt="">
            </a>
        </div>
    </div>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">

            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="{{ Route::is('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}"><i class="fe fe-home"></i><span>Dashboard</span></a>
                </li>
            </ul>

            <ul>
                <li class="menu-title"><span>Inventory</span></li>
                <li class="{{ Route::is('currency.index', 'currency.store', 'currency.edit', 'currency.delete') ? 'active' : '' }}">
                    <a href="{{ route('currency.index') }}"><i class="fe fe-dollar-sign"></i><span>Currency</span></a>
                </li>
                <li class="{{ Route::is('purchase.index', 'purchase.store', 'purchase.edit', 'purchase.delete') ? 'active' : '' }}">
                    <a href="{{ route('purchase.index') }}"><i class="fe fe-download"></i><span>Purchase</span></a>
                </li>
                <li class="{{ Route::is('sale.index', 'sale.store', 'sale.edit', 'sale.delete') ? 'active' : '' }}">
                    <a href="{{ route('sale.index') }}"><i class="fe fe-upload"></i><span>Sale</span></a>
                </li>
            </ul>

            <ul>
                <li class="menu-title"><span>Finance & Accounts</span></li>
                <li class="{{ Route::is('expense.index', 'expense.store', 'expense.edit', 'expense.delete') ? 'active' : '' }}">
                    <a href="{{ route('expense.index') }}"><i class="fe fe-book"></i><span>Debit Notes</span></a>
                </li>
            </ul>

        </div>
    </div>
</div>
