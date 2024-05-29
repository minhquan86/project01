<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link {{
                        Route::current()->getName() == 'users.index'
                        ? 'active': '' }}">
                        <p>
                          Quản Lý Nhân Viên
                        </p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link {{
                        Route::current()->getName() == 'products.index'
                        ? 'active': '' }}">
                        <p>
                          Quản Lý Sản Phẩm
                        </p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link {{
                        Route::current()->getName() == 'users.index'
                        ? 'active': '' }}">
                        <p>
                          Quản Lý Đơn Hàng
                        </p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
