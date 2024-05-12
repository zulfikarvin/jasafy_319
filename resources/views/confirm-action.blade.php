@extends('layouts.app')

@section('content')
    <button onclick="confirmAction()">Logout</button>

    <script>
        function confirmAction() {
            Swal.fire({
                title: "Apakah Anda Ingin Logout?",
                text: "Sesi akan segera diakhiri!",
                iconHtml: '<img src="{{ asset('images/logo.jpeg') }}" class="rounded-icon">', // Use custom image as icon
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Tidak",
                cancelButtonText: "Logout"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('actual.action') }}";
                } else {
                    Swal.fire("Logout", "Sesi Anda Berakhir!", "info");
                }
            });
        }
    </script>
@endsection
