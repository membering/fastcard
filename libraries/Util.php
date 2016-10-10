<?php
/**
 * Created by PhpStorm.
 * User: HOME
 * Date: 10/11/2016
 * Time: 2:04 AM
 */

namespace Libraries;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class Util
{
    const API_URL = 'http://api.fastcard.vn';

    public static function sendGet($uri, $data)
    {
        try {
            $headers = [
                'Content-Type' => 'application/json',
//                'Authorization' => 'Bearer ' . $this->config->ionic->apiToken
            ];
            $request = new Request('GET', self::API_URL . '/' . $uri, $headers, json_encode($data));
            $client = new Client();
            return $client->send($request);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public static function sendPost($uri, $data)
    {
        try {
            $headers = [
                'Content-Type' => 'application/json',
//                'Authorization' => 'Bearer ' . $this->config->ionic->apiToken
            ];
            $request = new Request('POST', self::API_URL . '/' . $uri, $headers, json_encode($data));
            $client = new Client();
            return $client->send($request);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}