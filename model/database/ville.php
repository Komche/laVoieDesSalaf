
<?php 
class ville {
	 public $idVille;
	 public $nomVille;
	 public $country;
	 public $ville=array();



                public function __construct($ville=null) {
                    $this->ville = $ville;
                         
                }

                public function all()
                {
                    return $this->ville;
                }

                public function role($idVille, $nomVille, $country)
                    {
                        $this->idVille = $idVille;
$this->nomVille = $nomVille;
$this->country = $country;

                    }
                


                    /**
                    * Get the value of idVille
                    */ 
                    public function getIdVille($idVille=null)
                    {
                        if ($idVille != null && is_array($this->ville) && count($this->ville)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE idVille = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$idVille]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdVille($d['idVille']);
$this->setNomVille($d['nomVille']);
$this->setCountry($d['country']);
$this->ville =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->idVille;
                        }
                        
                    }
                    /**
                    * Get the value of nomVille
                    */ 
                    public function getNomVille($nomVille=null)
                    {
                        if ($nomVille != null && is_array($this->ville) && count($this->ville)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nomVille = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nomVille]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdVille($d['idVille']);
$this->setNomVille($d['nomVille']);
$this->setCountry($d['country']);
$this->ville =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nomVille;
                        }
                        
                    }
                    /**
                    * Get the value of country
                    */ 
                    public function getCountry($country=null)
                    {
                        if ($country != null && is_array($this->ville) && count($this->ville)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE country = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$country]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdVille($d['idVille']);
$this->setNomVille($d['nomVille']);
$this->setCountry($d['country']);
$this->ville =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->country;
                        }
                        
                    }


                    /**
                    * Set the value of idVille
                    *
                    * @return  self
                    */ 
                   public function setIdVille($idVille)
                   {
                    $this->idVille = $idVille;
               
                       return $this;
                   }
                    /**
                    * Set the value of nomVille
                    *
                    * @return  self
                    */ 
                   public function setNomVille($nomVille)
                   {
                    $this->nomVille = $nomVille;
               
                       return $this;
                   }
                    /**
                    * Set the value of country
                    *
                    * @return  self
                    */ 
                   public function setCountry($country)
                   {
                    $this->country = $country;
               
                       return $this;
                   }
}
