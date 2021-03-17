@if (session('fails'))

    <script>

        new Noty({
            theme:'metroui',
            type: 'error',
            layout: 'topRight',
            text: "{{ session('fails') }}",
            timeout: 2000,
            killer: true
        }).show();
    </script>

@endif
