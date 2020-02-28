<aside class="sidebar">
    <a href="{{ route('doc') }}" class="logo">
        <img class="mark" src="{{ asset('wolf/logo.svg') }}" alt="wolframium">
        <div class="type">WOLFRAM</div>
    </a>
    <nav>
        <div class="navigation">
            <div class="menu">
                <div id="navbar-nav" class="items">
                    <div class="item sub--on">
                        <div class="title">Product</div>
                        <div class="childs">
                            <div class="child {{ Route::currentRouteName() == 'admin.product' ? 'active' : '' }}">
                                <a href="{{ route('admin.product') }}">All products</a>
                            </div>
                            <div class="child {{ Route::currentRouteName() == 'admin.product.create' ? 'active' : '' }}">
                                <a href="{{ route('admin.product.create') }}">Create product</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="title">Doc</div>
                        <div class="childs">
                            <div class="child {{ Route::currentRouteName() == 'doc.navbar' ? 'active' : '' }}">
                                <a href="{{ route('doc.navbar') }}">Navbar</a>
                            </div>
                            <div class="child {{ Route::currentRouteName() == 'doc.button' ? 'active' : '' }}">
                                <a href="{{ route('doc.button') }}">Buttons</a>
                            </div>
                            <div class="child {{ Route::currentRouteName() == 'doc.typography' ? 'active' : '' }}">
                                <a href="{{ route('doc.typography') }}">Typography</a>
                            </div>
                            <div class="child {{ Route::currentRouteName() == 'doc.table' ? 'active' : '' }}">
                                <a href="{{ route('doc.table') }}">Table</a>
                            </div>
                            <div class="child {{ Route::currentRouteName() == 'doc.form' ? 'active' : '' }}">
                                <a href="{{ route('doc.form') }}">Forms</a>
                            </div>
                            <div class="child {{ Route::currentRouteName() == 'doc.nav' ? 'active' : '' }}">
                                <a href="{{ route('doc.nav') }}">Navs</a>
                            </div>
                            <div class="child {{ Route::currentRouteName() == 'doc.indicator' ? 'active' : '' }}">
                                <a href="{{ route('doc.indicator') }}">Indicators</a>
                            </div>
                            <div class="child {{ Route::currentRouteName() == 'doc.progress' ? 'active' : '' }}">
                                <a href="{{ route('doc.progress') }}">Progress</a>
                            </div>
                            <div class="child {{ Route::currentRouteName() == 'doc.container' ? 'active' : '' }}">
                                <a href="{{ route('doc.container') }}">Containers</a>
                            </div>
                            <div class="child {{ Route::currentRouteName() == 'doc.dialog' ? 'active' : '' }}">
                                <a href="{{ route('doc.dialog') }}">Dialogs</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#!" class="link">Exit</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="trigger" class="trigger">
        <a href="#!" class="nav_trigger">
            <div id="bar" class="bar"></div>
        </a>
    </div>
</aside>