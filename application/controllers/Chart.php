<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart extends CI_Controller {
	public function index()
	{
		$jsonData=file_get_contents('assets/suara1.json');
		$jsonDataArray=json_decode($jsonData);
		$grafik_data=[];
		foreach($jsonDataArray as $row)
		{
			$grafik_data[]=array($row->Daerah,intval($row->Suara));
			//array_push($grafik_data, $dt);
		}
		$data['grafik_data']=json_encode($grafik_data);

		$jsonData2=file_get_contents('assets/suara2.json');
		$jsonDataArray2=json_decode($jsonData2);
		$grafik_data2=[];
		foreach($jsonDataArray2 as $row)
		{
			$grafik_data2[]=array($row->Daerah,intval($row->Suara));
			//array_push($grafik_data, $dt);
		}
		$data['grafik_data2']=json_encode($grafik_data2);

		$jsonData3=file_get_contents('assets/no1.json');
		$jsonDataArray3=json_decode($jsonData3);
		$grafik_data3=[];
		foreach($jsonDataArray3 as $row)
		{
			$grafik_data3[]=array($row->Daerah,intval($row->Suara));
			//array_push($grafik_data, $dt);
		}
		$data['grafik_data3']=json_encode($grafik_data3);

		$jsonData4=file_get_contents('assets/no2.json');
		$jsonDataArray4=json_decode($jsonData4);
		$grafik_data4=[];
		foreach($jsonDataArray4 as $row)
		{
			$grafik_data4[]=array($row->Daerah,intval($row->Suara));
			//array_push($grafik_data, $dt);
		}
		$data['grafik_data4']=json_encode($grafik_data4);

		$jsonData5=file_get_contents('assets/total.json');
		$jsonDataArray5=json_decode($jsonData5);
		$grafik_data5=[];
		foreach($jsonDataArray5 as $row)
		{
			$grafik_data5[]=array($row->Nomor,intval($row->Jumlah));
			//array_push($grafik_data, $dt);
		}
		$data['grafik_data5']=json_encode($grafik_data5);

		$this->load->view('chart',$data);
	}
}
