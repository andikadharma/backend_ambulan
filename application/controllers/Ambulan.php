<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ambulan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ambulan_model');
	}

	public function list_ambulan()
	{
		$data_ambulan = $this->Ambulan_model->get_ambulan();

		$konten = '<tr>
			<td>Instansi</td>
			<td>Nomor</td>
			<td>Status</td>
			<td>Aksi</td>
		</tr>';

		foreach ($data_ambulan->result() as $key => $value) {
			$konten .= '<tr>
							<td>' . $value->instansi . '</td>
							<td>' . $value->no_ambulan . '</td>
							<td>' . $value->status . '</td>
							<td>Read | Hapus | Edit</td>
						</tr>';
		}

		$data_json = array(
			'konten' => $konten,
		);

		echo json_encode($data_json);
	}
}
