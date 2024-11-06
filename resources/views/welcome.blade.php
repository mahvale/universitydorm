<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/sweetalert2.min.css">
     <script type="text/javascript" src="/js/sweetalert2.all.min.js"></script>
</head>
<body>
    

    <script>
         Swal.fire({
                  title: 'UniversityDorm ',
                  text: "Choisir un compte",
                  icon: 'success',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#077467',
                  confirmButtonText: 'Admin, valider!',
                  cancelButtonText: 'Etudiant, valider!',
                  allowOutsideClick: false 
              }).then((result) => {
                  if (result.isConfirmed) {
                      location.href = '/loginadmin';
                  } else if (result.dismiss === Swal.DismissReason.cancel) {
                     location.href = '/login';
                  }
              })
    </script>
</body>
</html>

