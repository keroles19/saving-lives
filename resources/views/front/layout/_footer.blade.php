<footer class="page-footer">
    <div class="container">
        <p>{{$setting->team_name}}</p>
        <p id="copyright">Copyright &copy; 2022 <a>{{$setting->copyright}}</a>. All right reserved</p>
    </div>
</footer>

<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('assets/js/theme.js')}}"></script>

@yield('js')
</body>
</html>
