@if($errors->any())
    @foreach($errors->all() as $err)
        <script>
            UIkit.notification({
                message: "Ошибка: {{ $err }}",
                status: 'warning',
                pos: 'bottom-center',
                timeout: 5000
            });
        </script>
    @endforeach 
@endif

@if(session('success'))
    <script>
        let err_mes =  " {{ session('success') }} ";

        UIkit.notification({
            message: err_mes,
            status: 'success',
            pos: 'bottom-center',
            timeout: 5000
        });
    </script>
@endif