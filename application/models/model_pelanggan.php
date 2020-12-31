<?php 
use GuzzleHttp\Client;
class model_Pelanggan extends CI_model {
    
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/CI_travel/index.php/',
           
         ]);
    }


    public function getAllPelanggan()
    {
       
        $response = $this->_client->request('GET', 'Pelanggan', [
            'query' => [
                'API-TOKEN' => '123456'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
    }

    public function getPelangganById($id)
    {
        $response = $this->_client->request('GET', 'Pelanggan', [
            'query' => [
                'API-TOKEN' => '123456',
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
        
    }


    public function tambahDataPelanggan()
    {
   
        $data = [
            'id' =>$this->input->post('id', true),
            'nama' =>$this->input->post('nama', true),
            'alamat' =>$this->input->post('alamat', true),
            'asal' =>$this->input->post('asal', true),
            'tujuan' =>$this->input->post('tujuan', true),
            'API-TOKEN' => '123456'
        ];
        $response = $this->_client->request('POST', 'Pelanggan', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 
    }

    public function hapusDataPelanggan($id)
    {
        $response = $this->_client->request('DELETE', 'Pelanggan', [
            'form_params' => [
                'id' => $id,
                'API-TOKEN' => '123456'
                
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;

    }

    public function ubahDataPelanggan()
    {
        $data = [
         
            'id' =>$this->input->post('id', true),
            'nama' =>$this->input->post('nama', true),
            'alamat' =>$this->input->post('alamat', true),
            'asal' =>$this->input->post('asal', true),
            'tujuan' =>$this->input->post('tujuan', true),
            'API-TOKEN' => '123456'
        ];

        $response = $this->_client->request('PUT', 'Pelanggan', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 


    }

  
}