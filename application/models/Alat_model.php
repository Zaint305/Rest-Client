<?php 
use GuzzleHttp\Client;

class Alat_model extends CI_model {

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8080/Mhs_Rest_Server/index.php/'
        ]);
    }

    public function getAllAlat()
    {
        $response = $this->_client->request('GET', 'alat',[
            'query' => [
                'API-KEY' => '1234'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function tambahDataAlat()
    {
        $data = [
            "kode" => $this->input->post('kode', true),
            "Alat" => $this->input->post('Alat', true),
            "harga" => $this->input->post('harga', true),
            "waktu_sewa" => $this->input->post('waktu_sewa', true),
            'API-KEY' => '1234'
        ];

        $response = $this->_client->request('POST', 'alat', [
            'form_params' => $data
            
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusDataAlat($id)
    {
        $response = $this->_client->request('DELETE', 'alat', [
            'form_params' => [
                'kode' => $id,
                'API-KEY' => '1234'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function getAlatById($id)
    {
        $response = $this->_client->request('GET', 'alat',[
            'query' => [
                'API-KEY' => '1234',
                'kode' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function ubahDataAlat()
    {
        $data = [
            "Alat" => $this->input->post('Alat', true),
            "harga" => $this->input->post('harga', true),
            "waktu_sewa" => $this->input->post('waktu_sewa', true),
            "kode" => $this->input->post('kode', true),
            'API-KEY' => '1234'
        ];

        $response = $this->_client->request('PUT', 'alat', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    
}