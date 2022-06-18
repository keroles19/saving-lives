

@if (\Illuminate\Support\Facades\Session::has('success'))
    <script>
        Swal.fire({
            title: 'Good job!',
            text: "{{\Illuminate\Support\Facades\Session::get('success')}}",
            icon: 'success',
            customClass: {
                confirmButton: 'btn btn-primary'
            },
            buttonsStyling: false
        });
    </script>
@endif

