<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/sweetalert2.min.css">
     <script type="text/javascript" src="/js/sweetalert2.all.min.js"></script>
</head>
<body>
    

    <script>
         Swal.fire({
                title: 'reservation effectuée avec succès ',
                text: "EN ATTENDANT Une Probable confirmation  !",
                icon: 'success',
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
					window.location.href = "/etudiant";
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
