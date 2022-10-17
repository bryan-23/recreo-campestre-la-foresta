<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="shortcut icon" href="{{ asset('images/033.png') }}" type="image/png" />

    <meta name="userId" content="{{ Auth::check() ? Auth::user()->id : '' }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LA FORESTA</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
    <link href="{{ asset('./css/styles.css') }}" rel="stylesheet" />


    <script data-search-pseudo-elements="" defer=""
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="nav-fixed">

    @yield('content')


    {{--  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    {{--  <script src="{{ asset('/js/scripts.js') }}"></script>  --}}

    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>  --}}
    {{--  <script src="{{asset('/js/chart-area-demo.js')}}"></script>  --}}
    {{--  <script src="{{asset('/js/chart-bar-demo.js')}}"></script>  --}}
    {{--  <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>  --}}
    {{--  <script src="{{asset('/js/litepicker.js')}}"></script>  --}}

    {{--  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  --}}
    {{--  <script src="{{asset('/js/datatable.js')}}"></script>  --}}

    {{--  <script src="https://assets.startbootstrap.com/js/sb-customizer.js"></script>  --}}
    {{--  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"70c6d5733dff56b8","token":"6e2c2575ac8f44ed824cef7899ba8463","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>  --}}
    @stack('scripts')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{--  <script>
            (function () {
            'use strict'
        //debemos crear la clase formEliminar dentro del form del boton borrar
        //recordar que cada registro a eliminar esta contenido en un form
        var forms = document.querySelectorAll('.formEliminar')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault()
                event.stopPropagation()
                Swal.fire({
                        title: '¿Estás seguro de eliminar el registro?',
                        text:  '!No podrás revertir esto!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: '!Sí, eliminar!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                            Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                        }
                    })
            }, false)
            })
        })()
        </script>  --}}

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let productsSelected = [];
        let productFinalSelected = [];

        function handleTypeSelected(e) {
            const element = document.querySelector("#reserva");
            if (e.target.value === "reserva") {
                element.classList.remove('d-none');
                element.classList.add("d-block");
            } else {
                element.classList.remove('d-block');
                element.classList.add("d-none");
            }
        }

        function handleProductLooking(e) {
            const tablebody = document.querySelector("#databody");
            var keycode = e.keyCode || e.which;
            if (keycode == 13) {
                const value = e.target.value;
                fetch('http://127.0.0.1:8000/admin/recerva/' + value)
                    .then((response) => response.json())
                    .then((data) => {
                        if (data.length > 0) {
                            productsSelected.push(data[0]);
                            let tr = document.createElement("tr");
                            let totalInitial = 0;
                            productsSelected.forEach(item => {
                                tr.innerHTML = `
                                <td>${item.codigo}</td>
                                <td>${item.nombre}</td>
                                <td>Descripcion arroz chaufa</td>
                                <td>
                                    <input onchange="calculateSubTotal(event);" id=${item.codigo} type="text" class="form-control" value=${item.stock}>
                                </td>
                                <td>${item.precio}</td>
                                <td>
                                    <span class=${item.codigo} >${item.precio * item.stock}</span>
                                </td>
                                `;
                                if (!item.hasOwnProperty('subTotal')) {
                                    item.subTotal = item.precio * item.stock;
                                }
                                //Calculate Total
                                totalInitial = totalInitial + item.subTotal;
                                document.querySelector("#total").innerHTML = totalInitial;
                            })
                            productFinalSelected = [...productsSelected];
                            tablebody.appendChild(tr);
                        } else {
                            handleMessage('error','Oops...','El producto que intenta buscar no existe!' )
                        }
                    });
            }
        }

        function calculateSubTotal(e) {
            let value = e.target.value;
            let codigo = e.target.id;
            //TODO: Validar que el input solo acepte numeros

            /*****/


            let existingError = false;
            let quantity = Number(value);
            let subTotal = 0;
            productFinalSelected.forEach(item => {
                if (Number(value) > Number(item.stock)) { 
                    handleMessage('error','Oops...','La cantidad ingresada supera al stock!' )
                    existingError = true;
                    e.target.value = item.stock;
                    return;
                }
    
                if (Number(value) <= 0) { 
                    handleMessage('error','Oops...','No puede ingresar un numero negativo!' )
                    existingError = true;
                    e.target.value = item.stock;
                    return;
                } 

                if (item.codigo === codigo) {
                    subTotal = item.precio * quantity;
                    item.subTotal = subTotal;
                }
            })
            if (!existingError) {
                document.querySelector("." + codigo).innerHTML = subTotal;

                //Calculate Total
                let total = 0;
                productFinalSelected.forEach(item => {
                    total = total + item.subTotal;
                })
                document.querySelector("#total").innerHTML = total;
            }
        }


        function handleMessage(type, title, message){
            Swal.fire({
                icon: type,
                title: title,
                text: message,
            })
        }
    </script>
</body>

</html>
