<?php

namespace App\Http\Util;
class Jwt {

    private $header;
    private $payload;
    private $signature;
    private $chave = 'macaco123';


    
    private function base64ErlEncode($data){
        return str_replace(['+','/','='],['-','_',''],base64_encode($data));
    }
    public  function gerarToken($nome,$id,$tipoUser){
        $this->header = $this->base64ErlEncode('{"alg" : "HS256", "typ" : "JWT"}');
        $this->payload= $this->base64ErlEncode('{"sub": "'.md5(time()).'", "name" : "'.$nome.'","id" : "'.$id.'", "tipoUser" : "'.$tipoUser.'"}');
        $this->signature = $this->base64ErlEncode(
            hash_hmac('sha256', $this->header.'.'.$this->payload,$this->chave, true)
        );
        return trim($this->header.'.'.$this->payload.'.'.$this->signature);
    }
    public function verificarToken($token){
        $parts = explode('.',$token);
        $signature = $this->base64ErlEncode(
            hash_hmac('sha256', $parts[0].'.'.$parts[1],$this->chave, true)
        );
        if($signature == $parts['2']){
            $payload = json_decode(
                base64_decode($parts[1])
            );
            return $payload;
        }else{
            return false;
        }
    }

}