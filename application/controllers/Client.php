<?php
defined('BASEPATH') or exit('No direct scipt access allowed');

// require APPPATH . 'libraries/RestController.php';
// require APPPATH . 'libraries/Format.php';
// use chriskacerguis\RestServer\RestController;

class Client extends CI_Controller
{
    public function index()
    {
        $file = file_get_contents('http://localhost:8000/mahasiswa');
        $data = json_decode($file);

        if (is_object($data) && property_exists($data, 'data')) {
            $data_array = $data->data;

            if (is_array($data_array)) {
                echo '<table border="1">';
                echo '<tr><th>ID Mahasiswa</th><th>Nama Mahasiswa</th><th>ID Jurusan</th></tr>';

                foreach ($data_array as $item) {
                    echo '<tr>';
                    echo '<td>' . $item->id_mahasiswa . '</td>';
                    echo '<td>' . $item->nama_mahasiswa . '</td>';
                    echo '<td>' . $item->id_jurusan . '</td>';
                    echo '</tr.';
                }
                echo '</table>';
            } else {
                echo 'Data tidak valid.';
            }
        } else {
            echo 'Data tidak valid.';
        }
    }
}