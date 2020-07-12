
<?php 
class bureau {
	 public $idBureau;
	 public $libellebureau;
	 public $typebureau;
	 public $idVille;
	 public $sub_bureau;
	 public $bureau=array();



                public function __construct($bureau=null) {
                    $this->bureau = $bureau;
                         
                }

                public function all()
                {
                    return $this->bureau;
                }

                public function role($idBureau, $libellebureau, $typebureau, $idVille, $sub_bureau)
                    {
                        $this->idBureau = $idBureau;
$this->libellebureau = $libellebureau;
$this->typebureau = $typebureau;
$this->idVille = $idVille;
$this->sub_bureau = $sub_bureau;

                    }
                


                    /**
                    * Get the value of idBureau
                    */ 
                    public function getIdBureau($idBureau=null)
                    {
                        if ($idBureau != null && is_array($this->bureau) && count($this->bureau)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE idBureau = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$idBureau]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdBureau($d['idBureau']);
$this->setLibellebureau($d['libellebureau']);
$this->setTypebureau($d['typebureau']);
$this->setIdVille($d['idVille']);
$this->setSub_bureau($d['sub_bureau']);
$this->bureau =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->idBureau;
                        }
                        
                    }
                    /**
                    * Get the value of libellebureau
                    */ 
                    public function getLibellebureau($libellebureau=null)
                    {
                        if ($libellebureau != null && is_array($this->bureau) && count($this->bureau)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE libellebureau = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$libellebureau]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdBureau($d['idBureau']);
$this->setLibellebureau($d['libellebureau']);
$this->setTypebureau($d['typebureau']);
$this->setIdVille($d['idVille']);
$this->setSub_bureau($d['sub_bureau']);
$this->bureau =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->libellebureau;
                        }
                        
                    }
                    /**
                    * Get the value of typebureau
                    */ 
                    public function getTypebureau($typebureau=null)
                    {
                        if ($typebureau != null && is_array($this->bureau) && count($this->bureau)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE typebureau = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$typebureau]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdBureau($d['idBureau']);
$this->setLibellebureau($d['libellebureau']);
$this->setTypebureau($d['typebureau']);
$this->setIdVille($d['idVille']);
$this->setSub_bureau($d['sub_bureau']);
$this->bureau =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->typebureau;
                        }
                        
                    }
                    /**
                    * Get the value of idVille
                    */ 
                    public function getIdVille($idVille=null)
                    {
                        if ($idVille != null && is_array($this->bureau) && count($this->bureau)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE idVille = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$idVille]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdBureau($d['idBureau']);
$this->setLibellebureau($d['libellebureau']);
$this->setTypebureau($d['typebureau']);
$this->setIdVille($d['idVille']);
$this->setSub_bureau($d['sub_bureau']);
$this->bureau =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->idVille;
                        }
                        
                    }
                    /**
                    * Get the value of sub_bureau
                    */ 
                    public function getSub_bureau($sub_bureau=null)
                    {
                        if ($sub_bureau != null && is_array($this->bureau) && count($this->bureau)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE sub_bureau = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$sub_bureau]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdBureau($d['idBureau']);
$this->setLibellebureau($d['libellebureau']);
$this->setTypebureau($d['typebureau']);
$this->setIdVille($d['idVille']);
$this->setSub_bureau($d['sub_bureau']);
$this->bureau =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->sub_bureau;
                        }
                        
                    }


                    /**
                    * Set the value of idBureau
                    *
                    * @return  self
                    */ 
                   public function setIdBureau($idBureau)
                   {
                    $this->idBureau = $idBureau;
               
                       return $this;
                   }
                    /**
                    * Set the value of libellebureau
                    *
                    * @return  self
                    */ 
                   public function setLibellebureau($libellebureau)
                   {
                    $this->libellebureau = $libellebureau;
               
                       return $this;
                   }
                    /**
                    * Set the value of typebureau
                    *
                    * @return  self
                    */ 
                   public function setTypebureau($typebureau)
                   {
                    $this->typebureau = $typebureau;
               
                       return $this;
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
                    * Set the value of sub_bureau
                    *
                    * @return  self
                    */ 
                   public function setSub_bureau($sub_bureau)
                   {
                    $this->sub_bureau = $sub_bureau;
               
                       return $this;
                   }
}
