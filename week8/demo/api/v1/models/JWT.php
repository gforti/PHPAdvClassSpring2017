<?php

/**
 * Description of JWT
 *
 * @author User
 */
class JWT {

    private $algo = 'sha512';

    public function generateJWT($payload, $secrect_key) {

        /*
         * In minutes : (m * 60) m = number of minutes
         * In days : (n * 24 * 60 * 60 ) n = no of days            
         */
        $payload['exp'] = time() + (1 * 60); // expire in one minute

        $header = array('type' => 'JWT', 'algo' => $this->algo);

        $signature = $this->sign($header, $payload, $secrect_key);

        return base64_encode(json_encode($header)) . '.' . base64_encode(json_encode($payload)) . '.' . base64_encode($signature);
    }

    public function valididateJWT($token, $secrect_key) {

        $segments = explode('.', $token);

        $header = json_decode(base64_decode($segments[0]));
        $payload = json_decode(base64_decode($segments[1]));
        $signature = base64_decode($segments[2]);
        $verifySignature = $this->sign($header, $payload, $secrect_key);

        if (hash_equals($signature, $verifySignature) && $payload->exp > time()) {
            return true;
        }

        return false;
    }

    private function sign($header, $payload, $secrect_key) {
        return hash_hmac($this->algo, base64_encode(json_encode($header)) . base64_encode(json_encode($payload)), $secrect_key, true);
    }

}
