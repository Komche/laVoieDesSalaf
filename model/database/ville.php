
<?php 
class ville {
	 public $id;
	 public $tittre;
	 public $country;
	 public $ville=array();



                public function __construct($ville=null) {
                    $this->ville = $ville;
                         
                }

                public function all()
                {
                    return $this->ville;
                }

                public function role($id, $tittre, $country)
                    {
                        $this->id = $id;
$this->tittre = $tittre;
$this->country = $country;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->ville) && count($this->ville)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTittre($d['tittre']);
$this->setCountry($d['country']);
$this->ville =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of tittre
                    */ 
                    public function getTittre($tittre=null)
                    {
                        if ($tittre != null && is_array($this->ville) && count($this->ville)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE tittre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$tittre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTittre($d['tittre']);
$this->setCountry($d['country']);
$this->ville =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->tittre;
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
$this->setId($d['id']);
$this->setTittre($d['tittre']);
$this->setCountry($d['country']);
$this->ville =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->country;
                        }
                        
                    }


                    /**
                    * Set the value of id
                    *
                    * @return  self
                    */ 
                   public function setId($id)
                   {
                    $this->id = $id;
               
                       return $this;
                   }
                    /**
                    * Set the value of tittre
                    *
                    * @return  self
                    */ 
                   public function setTittre($tittre)
                   {
                    $this->tittre = $tittre;
               
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
