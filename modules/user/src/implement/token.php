<?php

namespace User\implement;

class token
{

    public function createToken($userId)
    {
        
        $token = auth('api')->tokenById($userId);
        return $this->respondWithToken($token);
    }


    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            //'expires_in' => auth()->Carbon::now()->subDays(30)
        ]);
    }
}
