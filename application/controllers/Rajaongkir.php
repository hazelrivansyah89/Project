<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Rajaongkir extends CI_Controller
{

    private $api_key = '736b6b6bcfbc3f552d9e173ddc24b09b';
    public function provinsi()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: $this->api_key"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // echo $response;
            $array_response = json_decode($response, true);
            // echo '<pre>';
            // print_r($array_response['rajaongkir']['results']);
            // echo '
            // </pre>';
            $data_provinsi = $array_response['rajaongkir']['results'];
            echo "<option value=''>-- Pilih Provinsi --</option>";
            foreach ($data_provinsi as $key => $value) {
                echo "<option value='" . $value['province_id'] . "'id_provinsi='" . $value['province_id'] . "' >" . $value['province'] . "</option>";
            }
        }
    }
    public function kota()
    {
        $id_provinsi_terpilih = $this->input->post('id_provinsi');

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=" . $id_provinsi_terpilih,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: $this->api_key"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {

            $array_response = json_decode($response, true);

            $data_kota = $array_response['rajaongkir']['results'];
            echo "<option value=''>-- Pilih kota --</option>";
            foreach ($data_kota as $key => $value) {
                echo "<option value='" . $value['city_id'] . "'>" . $value['city_name'] . "</option>";
            }
        }
    }
    public function expedisi(){
        echo '<option value="">----Pilih Expedisi---</option>';
        echo '<option value="jne">JNE</option>';
        echo '<option value="tiki">Tiki</option>';
        echo '<option value="pos">Pos Indonesia</option>';
    }
}
        
    /* End of file  rajaongkir.php */
