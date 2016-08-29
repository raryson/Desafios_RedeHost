<?php
class Validacao{

	public function validarNome($valor){
		$exp = '/^[a-zA-Z]{2,10}$/';
		
		if(preg_match($exp,$valor)){
			return true;
		}else{
			return false;
		}
	}		
	
	public static function validarSexo($valor){
		$exp = '/^(masculino|feminino)$/';
		
		if(preg_match($exp,$valor)){
			return true;
		}else{
			return false;
		}
	}
	
	public static function validarEstadoCivil($valor){
		$exp = '/^(solteiro\(a\)|casado\(a\))$/';
		
		if(preg_match($exp,$valor)){
			return true;
		}else{
			return false;
		}
	}
	
	public static function validarObs($valor){
		$exp = '/^.{0,145}$/';
		
		if(preg_match($exp,$valor)){
			return true;
		}else{
			return false;
		}
	}	
	
	public static function validarIdade($valor){
		$exp = '/^[0-9]{1}[0-9]{1}$/';
		
		if(preg_match($exp,$valor)){
			return true;
		}else{
			return false;
		}
	}	
	
}
?>