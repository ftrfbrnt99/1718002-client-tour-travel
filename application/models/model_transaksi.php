<?php 
use GuzzleHttp\Client;
class model_Transaksi extends CI_model {
    
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/CI_travel/index.php/',
           
         ]);
    }


    public function getAllTransaksi()
    {
       
        $response = $this->_client->request('GET', 'Transaksi', [
            'query' => [
                'API-TOKEN' => '123456'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
    }

    public function getTransaksiById($id)
    {
        $response = $this->_client->request('GET', 'Transaksi', [
            'query' => [
                'API-TOKEN' => '123456',
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
        
    }


    public function tambahDataTransaksi()
    {
   
        $data = [
            'id' =>$this->input->post('id', true),
            'nama' =>$this->input->post('nama', true),
            'kendaraan' =>$this->input->post('kendaraan', true),
            'tujuan' =>$this->input->post('tujuan', true),
            'biaya' =>$this->input->post('biaya', true),
            'API-TOKEN' => '123456'
        ];
        $response = $this->_client->request('POST', 'Transaksi', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 
    }

    public function hapusDataTransaksi($id)
    {
        $response = $this->_client->request('DELETE', 'Transaksi', [
            'form_params' => [
                'id' => $id,
                'API-TOKEN' => '123456'
                
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;

    }

    public function ubahDataTransaksi()
    {
        $data = [
         
            'id' =>$this->input->post('id', true),
            'nama' =>$this->input->post('nama', true),
            'kendaraan' =>$this->input->post('kendaraan', true),
            'tujuan' =>$this->input->post('tujuan', true),
            'biaya' =>$this->input->post('biaya', true),
            'API-TOKEN' => '123456'
        ];

        $response = $this->_client->request('PUT', 'Transaksi', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 


    }

  
}