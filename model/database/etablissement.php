
<?php 
class etablissement {
	 public $idEtablissement;
	 public $nom;
	 public $adresse;
	 public $ville;
	 public $etablissement=array();



                public function __construct($etablissement=null) {
                    $this->etablissement = $etablissement;
                         
                }

                public function all()
                {
                    return $this->etablissement;
                }

                public function role($idEtablissement, $nom, $adresse, $ville)
                    {
                        $this->idEtablissement = $idEtablissement;
$this->nom = $nom;
$this->adresse = $adresse;
$this->ville = $ville;

                    }
                


                    /**
                    * Get the value of idEtablissement
                    */ 
                    public function getIdEtablissement($idEtablissement=null)
                    {
                        if ($idEtablissement != null && is_array($this->etablissement) && count($this->etablissement)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE idEtablissement = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$idEtablissement]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdEtablissement($d['idEtablissement']);
$this->setNom($d['nom']);
$this->setAdresse($d['adresse']);
$this->setVille($d['ville']);
$this->etablissement =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->idEtablissement;
                        }
                        
                    }
                    /**
                    * Get the value of nom
                    */ 
                    public function getNom($nom=null)
                    {
                        if ($nom != null && is_array($this->etablissement) && count($this->etablissement)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdEtablissement($d['idEtablissement']);
$this->setNom($d['nom']);
$this->setAdresse($d['adresse']);
$this->setVille($d['ville']);
$this->etablissement =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom;
                        }
                        
                    }
                    /**
                    * Get the value of adresse
                    */ 
                    public function getAdresse($adresse=null)
                    {
                        if ($adresse != null && is_array($this->etablissement) && count($this->etablissement)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE adresse = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$adresse]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdEtablissement($d['idEtablissement']);
$this->setNom($d['nom']);
$this->setAdresse($d['adresse']);
$this->setVille($d['ville']);
$this->etablissement =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->adresse;
                        }
                        
                    }
                    /**
                    * Get the value of ville
                    */ 
                    public function getVille($ville=null)
                    {
                        if ($ville != null && is_array($this->etablissement) && count($this->etablissement)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE ville = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$ville]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdEtablissement($d['idEtablissement']);
$this->setNom($d['nom']);
$this->setAdresse($d['adresse']);
$this->setVille($d['ville']);
$this->etablissement =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->ville;
                        }
                        
                    }


                    /**
                    * Set the value of idEtablissement
                    *
                    * @return  self
                    */ 
                   public function setIdEtablissement($idEtablissement)
                   {
                    $this->idEtablissement = $idEtablissement;
               
                       return $this;
                   }
                    /**
                    * Set the value of nom
                    *
                    * @return  self
                    */ 
                   public function setNom($nom)
                   {
                    $this->nom = $nom;
               
                       return $this;
                   }
                    /**
                    * Set the value of adresse
                    *
                    * @return  self
                    */ 
                   public function setAdresse($adresse)
                   {
                    $this->adresse = $adresse;
               
                       return $this;
                   }
                    /**
                    * Set the value of ville
                    *
                    * @return  self
                    */ 
                   public function setVille($ville)
                   {
                    $this->ville = $ville;
               
                       return $this;
                   }
}
