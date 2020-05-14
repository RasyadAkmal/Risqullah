<?php
class userServiceta
{
    protected $merk;   
    protected $nomor; 
    protected $dataUser; 
    protected $getPajak;
    protected $getPemilik;
    protected $getTahun;
    protected $getWarna; 
    protected $getRangka; 
    private $nama;

    #Constructor
    public function __construct($merk, $nomor) 
    {   #Array
        $this->_dataUser = [
            (object) [
                'merk'    => "Toyota Kijang",
                'nomor'   => "B7383RK",
                'tahun'   => "2011",
                'rangka'  => "233EBK6722XOP",
                'pemilik' => "Rasyad Akmal",
                'warna'   => "Hitam Glossy",
                'pajak'   => "9 Desember 2020"
            ],
            (object) [
                'merk'    => "Daihatsu Xenia",
                'nomor'   => "B1139ABK",
                'tahun'   => "2016",
                'rangka'  => "293KYO6442JKT",
                'pemilik' => "Ardi Pramonoto",
                'warna'   => "Abu Metalik",
                'pajak'   => "13 Oktober 2020"
            ]
        ];
       $this->merk = $merk;
       $this->nomor = $nomor;
    }
    public function login()
    {
        $user = $this->checkCredentials();
        if($user) {
            $this->getPajak = $user->pajak;
            $this->getTahun = $user->tahun;
            $this->getPemilik = $user->pemilik;
            $this->getWarna = $user->warna;
            $this->getRangka = $user->rangka;
            return $get_data = $user->merk;
        } else {
            return false;
        }
    }
    protected function checkCredentials()
    {   #perulangan
        foreach($this->_dataUser as $key => $value) {
            if($value->merk == $this->merk && $value->nomor == $this->nomor) {
                return $value; 
            }
        }
        return false;
    }
    public function getPajak()
    {
        return $this->getPajak;
    }
    public function getPemilik()
    {
        return $this->getPemilik;
    }
    public function getTahun()
    {
        return $this->getTahun;
    }
    public function getWarna()
    {
        return $this->getWarna;
    }
    public function getRangka()
    {
        return $this->getRangka;
    }

    #Setter Getter
    function setNama($nama) {
		$this->nama = $nama;
    }
    function getnama() {
		return $this->nama;
	}
}
?>

