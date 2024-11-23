<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse shadow-sm" style="background:#ffffff" ;>
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('admin*') ? 'active' : '' }}"
                    href="{{ route('admin') }}" style="color: #000000;">
                    <i class="fas fa-home me-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('categoryadmin*') ? 'active' : '' }}"
                    href="{{ route('categoryadmin') }}" style="color: #000000;">
                    <i class="fas fa-chart-bar me-2"></i>
                    Category
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('productadmin*') ? 'active' : '' }}"
                    href="{{ route('productadmin') }}" style="color: #000000;">
                    <i class="fas fa-box me-2"></i>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('category_sv_admin*') ? 'active' : '' }}"
                    href="{{ route('category_sv_admin') }}" style="color: #000000;">
                    <i class="fa-solid fa-list me-2"></i>
                    Category service
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('service_admin*') ? 'active' : '' }}"
                    href="{{ route('service_admin') }}" style="color: #000000;">
                    <i class="fa-solid fa-truck-fast me-2"></i>

                    Service
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('packageadmin*') ? 'active' : '' }}"
                    href="{{ route('packageadmin') }}" style="color: #000000;">
                    <i class="fas fa-boxes me-2 "></i>

                    Package
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('orders*') ? 'active' : '' }}"
                    href="{{ route('order') }}" style="color: #000000;">
                    <i class="fas fa-shopping-cart me-2"></i>
                    Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('bookings*') ? 'active' : '' }}"
                    href="{{ route('admin.bookings') }}" style="color: #000000;">
                    <i class="fas fa-calendar-check me-2"></i>
                    Bookings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('useradmin*') ? 'active' : '' }}"
                    href="{{ route('useradmin') }}" style="color: #000000;">
                    <i class="fas fa-users me-2"></i>
                    Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('blog*') ? 'active' : '' }}"
                    href="{{ url('blogadmin') }}" style="color: #000000;">
                    <i class="fas fa-tags me-2"></i>
                    Blog
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('admin/comments*') ? 'active' : '' }}"
                    href="{{ route('admin.comments') }}" style="color: #000000;">
                    <i class="fa fa-commenting"></i>
                    Bình luận
                </a>
            </li>

        </ul>
    </div>
</nav>



<style>
    #sidebarMenu .nav-link.active {
        background-color: #FF9999;
        /* Màu xanh Bootstrap */
        color: #ffffff;
        font-weight: 500;
    }

    #sidebarMenu .nav-link:hover {
        background-color: #ffe0e0;
        color: #ffffff;
    }
</style>

<script>
    // Lấy tất cả các mục nav-link
    let navLinks = document.querySelectorAll('#sidebarMenu .nav-link');

    // Lặp qua từng mục và lắng nghe sự kiện click
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Xóa class 'active' khỏi tất cả các mục
            navLinks.forEach(link => link.classList.remove('active'));

            // Thêm class 'active' vào mục được click
            this.classList.add('active');
        });
    });
</script>
