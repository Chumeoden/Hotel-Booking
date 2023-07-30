<nav>
            <div class="nav__logo"><a href="/">Booking.Com</a></div>
            <ul class="nav__links">
                <li class="link"><a href="/">Home</a></li>
                <li class="link"><a href="#">Book</a></li>
                @auth

                

@if (Auth::check())
    <p>Xin chào, {{ Auth::user()->name }}!</p>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit" value="Đăng xuất">
    </form>
@else
    <p>Bạn chưa đăng nhập!</p>
    <!-- Thêm các phần tử khác ở đây nếu cần -->
@endif

                @else
                    <li class="link"><a href="/login">Login</a></li>
                    <li class="link"><a href="/register">Register</a></li>
                @endauth
            </ul>
        </nav>