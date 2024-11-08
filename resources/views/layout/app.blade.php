<html>
@include('layout.head')
<style>
  
    
</style>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<body class="">
    <div class=""> <!--begin::Header-->
    @include('layout.cabecera')
    @include('layout.menu')
    @yield('content')  
    
    @stack('third_party_scripts')
    @stack('page_scripts')
</div>  
@yield('js')
@include('layout.script')

@include('sweetalert::alert')
@include('layout.datatables_css')
@include('layout.datatables_js')
<script>
    // Escucha el evento 'input' en todos los campos de tipo text y textareas y convierte a mayúsculas
    document.addEventListener('DOMContentLoaded', function() {
        // Selecciona todos los inputs de tipo text y los textareas
        const textInputs = document.querySelectorAll('input[type="text"], textarea');

        // Itera sobre cada input y textarea y agrega el listener
        textInputs.forEach(function(input) {
            input.addEventListener('input', function() {
                // Convierte el valor del input o textarea a mayúsculas
                this.value = this.value.toUpperCase();
            });
        });
    });
</script>
</body>
</html>