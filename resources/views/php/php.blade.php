<?php  
use App\Models\User;
use App\Models\Residence;
use App\Models\Block;
use App\Models\Chambre;
use App\Models\Reservation;

function count_block($id){
	$block = Block::where('residence',$id)->count();
	return $block;
}

function count_chambre($id){
	$chambre = Chambre::where('residence',$id)->count();
	return $chambre;
}

function residence_chambre($id){
	$chambre = Chambre::join('residences','residences.id','=','chambre.residence')
						->where("chambre.id",$id)
						->first(["residences.name as name"]);
	return $chambre;
}

function count_chambre_block($id){
	$chambre = Chambre::where('block',$id)->count();
	return $chambre;
}

function chambre_name($id){
	$chambre = Chambre::where('id',$id)->first();
	return $chambre;
}

function name_residence($id){
	$chambre = Residence::where('id',$id)->first();
	return @$chambre->name;
}

function name_block($id){
	$chambre = Block::where('id',$id)->first();
	return @$chambre->name;
}

function name_block_chambre($id){
	$chambre = Block::join('chambre',"block.id","=","chambre.block")
	->where("chambre.id",$id)
	->first(["block.name as name_block"]);
	return @$chambre;
}

function name_residense_chambre($id){
	$chambre = Residence::join('chambre',"residences.id","=","chambre.residence")
	->where("chambre.id",$id)
	->first(["residences.name as name_residence"]);
	return @$chambre;
}

function nbre_residence($id){

$etudiants = Reservation::leftJoin('users','reservations.studentId','=','users.id')
						  ->leftJoin('chambre','reservations.room','=','chambre.id')
						  ->leftJoin('block','chambre.block','=','block.id')
						  ->leftJoin('residences','residences.id','=','block.residence')
						  ->where('residences.id',$id)
						  ->count();
return $etudiants;
} 

function pourcentage($p1,$p2)
{
	return ($p1 * 100) / $p2;
}

function count_block_residence($id){
	$block = Block::where('residence',$id)->count();
	return $block;
}

function block_residence($id){
	$block = Residence::where('id',$id)->first();
	return $block;
}

function user_name($id){
	$block = User::find($id);
	return $block;
}

function reservation_name($id){
	$reservation = Reservation::where('room',$id)->count();
	return $reservation;
}
?>