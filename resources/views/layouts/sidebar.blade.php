<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active ">
                <a class="nav-link" href="{{route('admin.index')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Admin</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.yayinevi.index')}}">
                    <i class="material-icons">person</i>
                    <p>Yayınevi</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.yazar.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Yazarlar</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.kitap.index')}}">
                    <i class="material-icons">library_books</i>
                    <p>Kitaplar</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.kategori.index')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Kategoriler</p>
                </a>
            </li>
        </ul>
    </div>
</div>
