<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UniversityDorm</title>
	    
       <link rel="stylesheet" href="/user/css/animate.css">
       <link rel="stylesheet" href="/css/bootstrap.min.css">

       <style type="text/css">
       	.watermark-table {
  width: 100%;
  border-collapse: collapse;
  background-image: url('chemin/vers/votre/image/filigrane.png');
  background-repeat: repeat;
}

.watermark-table td {
  border: 1px solid #000;
  padding: 10px;
}

/* Si vous ne voulez pas que l'image se répète */
   </style>
</head>
<body style="background-color: #fff;">
@include('php/php')
<div style="position: absolute;top: 10px;left:0px;width: 200px;">
	<p style="font-size: 12px;text-align: center;">REPUBLIQUE DU CAMEROUN</p> 
	<p style="font-size: 12px;text-align: center;">Paix-Travail-Patrie</p> 
	<p style="font-size: 12px;text-align: center;">****************</p> 
	<p style="font-size: 12px;text-align: center;">MINISTERE DE L’ENSEIGNEMENT SUPERIEUR</p> 
	<p style="font-size: 12px;text-align: center;">UNIVERSITE DE YAOUNDE I</p> 
	<p style="font-size: 12px;text-align: center;">****************</p> 
       
</div>

<div style="position: absolute;top: 10px;right:0px;width: 200px;">
	<p style="font-size: 12px;text-align: center;">REPUBLIC OF CAMEROON</p> 
	<p style="font-size: 12px;text-align: center;">Peace-Work-Fatherland</p> 
	<p style="font-size: 12px;text-align: center;">****************</p> 
	<p style="font-size: 12px;text-align: center;">MINISTRY OF HIGHER EDUCATION</p> 
	<p style="font-size: 12px;text-align: center;">UNIVERSITY OF YAOUNDE I</p> 
	<p style="font-size: 12px;text-align: center;">****************</p> 
       
</div>

<div style="position: absolute;top: 10px;left:570px;width: 200px;">
	<img style="width: 100px;height: 100px;" src="/logo.png" alt="logo">
</div>
<table class="watermark-table" style="margin-top:200px;border: 1px solid #000;margin-left:300px;width: 50%;">
	<tbody>
		<tr style="border: 1px solid #000;">
			<th style="border: 1px solid #000;">NOMS ET PRENOMS</th>
			<th style="border: 1px solid #000;">{{user_name(session('reservation')->studentId)->name}}</th>
		</tr>

		<tr style="border: 1px solid #000;">
			<th style="border: 1px solid #000;">MATRICULE </th>
			<th style="border: 1px solid #000;">{{user_name(session('reservation')->studentId)->matricule}}</th>
		</tr>

		<tr style="border: 1px solid #000;">
			<th style="border: 1px solid #000;">NIVEAU </th>
			<th style="border: 1px solid #000;">{{user_name(session('reservation')->studentId)->niveau}}</th>
		</tr>

		<tr style="border: 1px solid #000;">
			<th style="border: 1px solid #000;">FILIÈRE  </th>
			<th style="border: 1px solid #000;">{{user_name(session('reservation')->studentId)->filiere}}</th>
		</tr>

		<tr style="border: 1px solid #000;">
			<th style="border: 1px solid #000;">TELEPHONE  </th>
			<th style="border: 1px solid #000;">{{user_name(session('reservation')->studentId)->tel}}</th>
		</tr>

		<tr style="border: 1px solid #000;">
			<th style="border: 1px solid #000;">SEXE  </th>
			<th style="border: 1px solid #000;">{{user_name(session('reservation')->studentId)->sexe}}</th>
		</tr>
		<tr style="border: 1px solid #000;">
			<th style="border: 1px solid #000;">EMAIL  </th>
			<th style="border: 1px solid #000;">{{user_name(session('reservation')->studentId)->email}}</th>
		</tr>

		<tr style="border: 1px solid #000;">
			<th style="border: 1px solid #000;">DATE RESERVATION  </th>
			<th style="border: 1px solid #000;">{{session('reservation')->date}}</th>
		</tr>

		<tr style="border: 1px solid #000;">
			<th style="border: 1px solid #000;">MONTANT  </th>
			<th style="border: 1px solid #000;">{{session('reservation')->montant}}</th>
		</tr>

		<tr style="border: 1px solid #000;">
			<th style="border: 1px solid #000;">NOM DE LA RESIDENCE  </th>
			<th style="border: 1px solid #000;">{{residence_chambre(session('reservation')->room)->name}}</th>
		</tr>

		<tr style="border: 1px solid #000;">
			<th style="border: 1px solid #000;">NUM DE LA CHAMBRE  </th>
			<th style="border: 1px solid #000;">{{chambre_name(session('reservation')->room)->name}}</th>
		</tr>
		<tr style="border: 1px solid #000;" >
			<th colspan="2">
				<img src="{{ asset('storage/' . session('reservation')->signature) }}" style="width:450px;height: 200px;position: relative;top: 0;" alt="Signature Image">
			</th>
		</tr>
	</tbody>
</table>



  <script src="/user/js/jquery.min.js"></script>
<script type="text/javascript">
	$('title').text('{{user_name(session("reservation")->studentId)->name}}')

         window.print();

        setTimeout(function(){
                location.href = "/mail"
            }, 5000);
</script>
</body>
</html> 

