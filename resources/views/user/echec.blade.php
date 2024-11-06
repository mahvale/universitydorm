<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/sweetalert2.min.css">
     <script type="text/javascript" src="/js/sweetalert2.all.min.js"></script>
</head>
<body>
    

    <script>
         Swal.fire({
                title: 'Le payement a echoué?',
                text: "Continuer vers une reservation manuel !",
                icon: 'error',
                showCancelButton: false,
                confirmButtonText: 'OK',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                	var room = @json(session('room'));
					var url = '{{ url("room") }}/'+room;
					window.location.href = url;
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Annulé',
                        'Votre action a été annulée.',
                        'error'
                    );
                }
            });
    </script>
</body>
</html>


