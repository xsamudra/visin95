<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart extends CI_Controller {
	public function index()
	{
		$jsonData='[{
		"Daerah": "Kab. Cilacap",
		"Suara": "975156"
	},
	{
		"Daerah": "Kab. Banyumas",
		"Suara": "968266"
	},
	{
		"Daerah": "Kab. Purbalingga",
		"Suara": "510579"
	},
	{
		"Daerah": "Kab. Banjarnegara",
		"Suara": "526415"
	},
	{
		"Daerah": "Kab. Kebumen",
		"Suara": "687672"
	},
	{
		"Daerah": "Kab. Purworejo",
		"Suara": "434024"
	},
	{
		"Daerah": "Kab. Wonosobo",
		"Suara": "476602"
	},
	{
		"Daerah": "Kab. Magelang",
		"Suara": "767911"
	},
	{
		"Daerah": "Kab. Boyolali",
		"Suara": "609377"
	},
	{
		"Daerah": "Kab. Klaten",
		"Suara": "759528"
	},
	{
		"Daerah": "Kab. Sukoharjo",
		"Suara": "523004"
	},
	{
		"Daerah": "Kab. Wonogiri",
		"Suara": "607328"
	},
	{
		"Daerah": "Kab. Karanganyar",
		"Suara": "538435"
	},
	{
		"Daerah": "Kab. Sragen",
		"Suara": "550403"
	},
	{
		"Daerah": "Kab. Grobogan",
		"Suara": "734289"
	},
	{
		"Daerah": "Kab. Blora",
		"Suara": "504505"
	},
	{
		"Daerah": "Kab. Rembang",
		"Suara": "375271"
	},
	{
		"Daerah": "Kab. Pati",
		"Suara": "743466"
	},
	{
		"Daerah": "Kab. Kudus",
		"Suara": "460705"
	},
	{
		"Daerah": "Kab. Jepara",
		"Suara": "622010"
	},
	{
		"Daerah": "Kab. Demak",
		"Suara": "598973"
	},
	{
		"Daerah": "Kab. Semarang",
		"Suara": "595873"
	},
	{
		"Daerah": "Kab. Temanggung",
		"Suara": "485608"
	},
	{
		"Daerah": "Kab. Kendal",
		"Suara": "567488"
	},
	{
		"Daerah": "Kab. Batang",
		"Suara": "430067"
	},
	{
		"Daerah": "Kab. Pekalongan",
		"Suara": "481479"
	},
	{
		"Daerah": "Kab. Pemalang",
		"Suara": "692539"
	},
	{
		"Daerah": "Kab. Tegal",
		"Suara": "756644"
	},
	{
		"Daerah": "Kab. Brebes",
		"Suara": "927895"
	},
	{
		"Daerah": "Kota Magelang",
		"Suara": "75585"
	},
	{
		"Daerah": "Kota Surakarta",
		"Suara": "340811"
	},
	{
		"Daerah": "Kota Salatiga",
		"Suara": "108664"
	},
	{
		"Daerah": "Kota Semarang",
		"Suara": "927941"
	},
	{
		"Daerah": "Kota Pekalongan",
		"Suara": "167356"
	},
	{
		"Daerah": "Kota Tegal",
		"Suara": "136535"
	}]';
	$jsonData2='[{
		"Daerah": "Daerah",
		"Suara": "Suara"
	},
	{
		"Daerah": "Kab. Cilacap",
		"Suara": "967115"
	},
	{
		"Daerah": "Kab. Banyumas",
		"Suara": "959571"
	},
	{
		"Daerah": "Kab. Purbalingga",
		"Suara": "504577"
	},
	{
		"Daerah": "Kab. Banjarnegara",
		"Suara": "519296"
	},
	{
		"Daerah": "Kab. Kebumen",
		"Suara": "680019"
	},
	{
		"Daerah": "Kab. Purworejo",
		"Suara": "428436"
	},
	{
		"Daerah": "Kab. Wonosobo",
		"Suara": "465595"
	},
	{
		"Daerah": "Kab. Magelang",
		"Suara": "752863"
	},
	{
		"Daerah": "Kab. Boyolali",
		"Suara": "603267"
	},
	{
		"Daerah": "Kab. Klaten",
		"Suara": "751666"
	},
	{
		"Daerah": "Kab. Sukoharjo",
		"Suara": "517315"
	},
	{
		"Daerah": "Kab. Wonogiri",
		"Suara": "602257"
	},
	{
		"Daerah": "Kab. Karanganyar",
		"Suara": "532711"
	},
	{
		"Daerah": "Kab. Sragen",
		"Suara": "545470"
	},
	{
		"Daerah": "Kab. Grobogan",
		"Suara": "729109"
	},
	{
		"Daerah": "Kab. Blora",
		"Suara": "499882"
	},
	{
		"Daerah": "Kab. Rembang",
		"Suara": "371847"
	},
	{
		"Daerah": "Kab. Pati",
		"Suara": "737562"
	},
	{
		"Daerah": "Kab. Kudus",
		"Suara": "455555"
	},
	{
		"Daerah": "Kab. Jepara",
		"Suara": "617151"
	},
	{
		"Daerah": "Kab. Demak",
		"Suara": "593802"
	},
	{
		"Daerah": "Kab. Semarang",
		"Suara": "587030"
	},
	{
		"Daerah": "Kab. Temanggung",
		"Suara": "476330"
	},
	{
		"Daerah": "Kab. Kendal",
		"Suara": "558189"
	},
	{
		"Daerah": "Kab. Batang",
		"Suara": "423725"
	},
	{
		"Daerah": "Kab. Pekalongan",
		"Suara": "476837"
	},
	{
		"Daerah": "Kab. Pemalang",
		"Suara": "686161"
	},
	{
		"Daerah": "Kab. Tegal",
		"Suara": "748394"
	},
	{
		"Daerah": "Kab. Brebes",
		"Suara": "919081"
	},
	{
		"Daerah": "Kota Magelang",
		"Suara": "74229"
	},
	{
		"Daerah": "Kota Surakarta",
		"Suara": "336902"
	},
	{
		"Daerah": "Kota Salatiga",
		"Suara": "107292"
	},
	{
		"Daerah": "Kota Semarang",
		"Suara": "916785"
	},
	{
		"Daerah": "Kota Pekalongan",
		"Suara": "164552"
	},
	{
		"Daerah": "Kota Tegal",
		"Suara": "134687"
	}]';
	$jsonData3='[{
		"Daerah": "Kab. Cilacap",
		"Suara": "381863"
	},
	{
		"Daerah": "Kab. Banyumas",
		"Suara": "346345"
	},
	{
		"Daerah": "Kab. Purbalingga",
		"Suara": "183873"
	},
	{
		"Daerah": "Kab. Banjarnegara",
		"Suara": "196898"
	},
	{
		"Daerah": "Kab. Kebumen",
		"Suara": "257306"
	},
	{
		"Daerah": "Kab. Purworejo",
		"Suara": "166190"
	},
	{
		"Daerah": "Kab. Wonosobo",
		"Suara": "169209"
	},
	{
		"Daerah": "Kab. Magelang",
		"Suara": "345405"
	},
	{
		"Daerah": "Kab. Boyolali",
		"Suara": "145353"
	},
	{
		"Daerah": "Kab. Klaten",
		"Suara": "189035"
	},
	{
		"Daerah": "Kab. Sukoharjo",
		"Suara": "105817"
	},
	{
		"Daerah": "Kab. Wonogiri",
		"Suara": "139522"
	},
	{
		"Daerah": "Kab. Karanganyar",
		"Suara": "145555"
	},
	{
		"Daerah": "Kab. Sragen",
		"Suara": "131045"
	},
	{
		"Daerah": "Kab. Grobogan",
		"Suara": "192547"
	},
	{
		"Daerah": "Kab. Blora",
		"Suara": "164706"
	},
	{
		"Daerah": "Kab. Rembang",
		"Suara": "126454"
	},
	{
		"Daerah": "Kab. Pati",
		"Suara": "197058"
	},
	{
		"Daerah": "Kab. Kudus",
		"Suara": "195171"
	},
	{
		"Daerah": "Kab. Jepara",
		"Suara": "180741"
	},
	{
		"Daerah": "Kab. Demak",
		"Suara": "224076"
	},
	{
		"Daerah": "Kab. Semarang",
		"Suara": "227602"
	},
	{
		"Daerah": "Kab. Temanggung",
		"Suara": "167212"
	},
	{
		"Daerah": "Kab. Kendal",
		"Suara": "228708"
	},
	{
		"Daerah": "Kab. Batang",
		"Suara": "145019"
	},
	{
		"Daerah": "Kab. Pekalongan",
		"Suara": "148592"
	},
	{
		"Daerah": "Kab. Pemalang",
		"Suara": "232693"
	},
	{
		"Daerah": "Kab. Tegal",
		"Suara": "297100"
	},
	{
		"Daerah": "Kab. Brebes",
		"Suara": "317975"
	},
	{
		"Daerah": "Kota Magelang",
		"Suara": "32173"
	},
	{
		"Daerah": "Kota Surakarta",
		"Suara": "52703"
	},
	{
		"Daerah": "Kota Salatiga",
		"Suara": "38628"
	},
	{
		"Daerah": "Kota Semarang",
		"Suara": "292496"
	},
	{
		"Daerah": "Kota Pekalongan",
		"Suara": "64738"
	},
	{
		"Daerah": "Kota Tegal",
		"Suara": "55912"
	}]';
	$jsonData4='[
	{
		"Daerah": "Kab. Cilacap",
		"Suara": "585252"
	},
	{
		"Daerah": "Kab. Banyumas",
		"Suara": "613226"
	},
	{
		"Daerah": "Kab. Purbalingga",
		"Suara": "320704"
	},
	{
		"Daerah": "Kab. Banjarnegara",
		"Suara": "322398"
	},
	{
		"Daerah": "Kab. Kebumen",
		"Suara": "422713"
	},
	{
		"Daerah": "Kab. Purworejo",
		"Suara": "262246"
	},
	{
		"Daerah": "Kab. Wonosobo",
		"Suara": "296386"
	},
	{
		"Daerah": "Kab. Magelang",
		"Suara": "407458"
	},
	{
		"Daerah": "Kab. Boyolali",
		"Suara": "457914"
	},
	{
		"Daerah": "Kab. Klaten",
		"Suara": "562631"
	},
	{
		"Daerah": "Kab. Sukoharjo",
		"Suara": "411498"
	},
	{
		"Daerah": "Kab. Wonogiri",
		"Suara": "462735"
	},
	{
		"Daerah": "Kab. Karanganyar",
		"Suara": "387156"
	},
	{
		"Daerah": "Kab. Sragen",
		"Suara": "414425"
	},
	{
		"Daerah": "Kab. Grobogan",
		"Suara": "536562"
	},
	{
		"Daerah": "Kab. Blora",
		"Suara": "335176"
	},
	{
		"Daerah": "Kab. Rembang",
		"Suara": "245393"
	},
	{
		"Daerah": "Kab. Pati",
		"Suara": "540504"
	},
	{
		"Daerah": "Kab. Kudus",
		"Suara": "260384"
	},
	{
		"Daerah": "Kab. Jepara",
		"Suara": "436410"
	},
	{
		"Daerah": "Kab. Demak",
		"Suara": "369726"
	},
	{
		"Daerah": "Kab. Semarang",
		"Suara": "359428"
	},
	{
		"Daerah": "Kab. Temanggung",
		"Suara": "309118"
	},
	{
		"Daerah": "Kab. Kendal",
		"Suara": "329481"
	},
	{
		"Daerah": "Kab. Batang",
		"Suara": "278706"
	},
	{
		"Daerah": "Kab. Pekalongan",
		"Suara": "328245"
	},
	{
		"Daerah": "Kab. Pemalang",
		"Suara": "453468"
	},
	{
		"Daerah": "Kab. Tegal",
		"Suara": "451294"
	},
	{
		"Daerah": "Kab. Brebes",
		"Suara": "601106"
	},
	{
		"Daerah": "Kota Magelang",
		"Suara": "42056"
	},
	{
		"Daerah": "Kota Surakarta",
		"Suara": "284199"
	},
	{
		"Daerah": "Kota Salatiga",
		"Suara": "68664"
	},
	{
		"Daerah": "Kota Semarang",
		"Suara": "624289"
	},
	{
		"Daerah": "Kota Pekalongan",
		"Suara": "99814"
	},
	{
		"Daerah": "Kota Tegal",
		"Suara": "78775"
	}]';
		$jsonDataArray=json_decode($jsonData);
		$grafik_data=[];
		foreach($jsonDataArray as $row)
		{
			$grafik_data[]=array($row->Daerah,intval($row->Suara));
			//array_push($grafik_data, $dt);
		}
		$data['grafik_data']=json_encode($grafik_data);
		$this->load->view('chart',$data);

		$jsonDataArray2=json_decode($jsonData2);
		$grafik_data2=[];
		foreach($jsonDataArray2 as $row)
		{
			$grafik_data2[]=array($row->Daerah,intval($row->Suara));
			//array_push($grafik_data, $dt);
		}
		$data2['grafik_data2']=json_encode($grafik_data2);
		$this->load->view('chart',$data2);

		$jsonDataArray3=json_decode($jsonData3);
		$grafik_data3=[];
		foreach($jsonDataArray3 as $row)
		{
			$grafik_data3[]=array($row->Daerah,intval($row->Suara));
			//array_push($grafik_data, $dt);
		}
		$data3['grafik_data3']=json_encode($grafik_data3);
		$this->load->view('chart',$data3);

		$jsonDataArray4=json_decode($jsonData4);
		$grafik_data4=[];
		foreach($jsonDataArray4 as $row)
		{
			$grafik_data4[]=array($row->Daerah,intval($row->Suara));
			//array_push($grafik_data, $dt);
		}
		$data4['grafik_data4']=json_encode($grafik_data4);
		$this->load->view('chart',$data4);
	}
}
