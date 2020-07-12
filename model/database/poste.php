
<?php 
class poste {
	 public $id_poste;
	 public $bureau;
	 public $membre;
	 public $libelle;
	 public $poste=array();



                public function __construct($poste=null) {
                    $this->poste = $poste;
                         
                }

                public function all()
                {
                    return $this->poste;
                }

                public function role($id_poste, $bureau, $membre, $libelle)
                    {
                        $this->id_poste = $id_poste;
$this->bureau = $bureau;
$this->membre = $membre;
$this->libelle = $libelle;

                    }
                


                    /**
                    * Get the value of id_poste
                    */ 
                    public function getId_poste($id_poste=null)
                    {
                        if ($id_poste != null && is_array($this->poste) && count($this->poste)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_poste = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_poste]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_poste($d['id_poste']);
$this->setBureau($d['bureau']);
$this->setMembre($d['membre']);
$this->setLibelle($d['libelle']);
$this->poste =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_poste;
                        }
                        
                    }
                    /**
                    * Get the value of bureau
                    */ 
                    public function getBureau($bureau=null)
                    {
                        if ($bureau != null && is_array($this->poste) && count($this->poste)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE bureau = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$bureau]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_poste($d['id_poste']);
$this->setBureau($d['bureau']);
$this->setMembre($d['membre']);
$this->setLibelle($d['libelle']);
$this->poste =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->bureau;
                        }
                        
                    }
                    /**
                    * Get the value of membre
                    */ 
                    public function getMembre($membre=null)
                    {
                        if ($membre != null && is_array($this->poste) && count($this->poste)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE membre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$membre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_poste($d['id_poste']);
$this->setBureau($d['bureau']);
$this->setMembre($d['membre']);
$this->setLibelle($d['libelle']);
$this->poste =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->membre;
                        }
                        
                    }
                    /**
                    * Get the value of libelle
                    */ 
                    public function getLibelle($libelle=null)
                    {
                        if ($libelle != null && is_array($this->poste) && count($this->poste)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE libelle = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$libelle]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_poste($d['id_poste']);
$this->setBureau($d['bureau']);
$this->setMembre($d['membre']);
$this->setLibelle($d['libelle']);
$this->poste =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->libelle;
                        }
                        
                    }


                    /**
                    * Set the value of id_poste
                    *
                    * @return  self
                    */ 
                   public function setId_poste($id_poste)
                   {
                    $this->id_poste = $id_poste;
               
                       return $this;
                   }
                    /**
                    * Set the value of bureau
                    *
                    * @return  self
                    */ 
                   public function setBureau($bureau)
                   {
                    $this->bureau = $bureau;
               
                       return $this;
                   }
                    /**
                    * Set the value of membre
                    *
                    * @return  self
                    */ 
                   public function setMembre($membre)
                   {
                    $this->membre = $membre;
               
                       return $this;
                   }
                    /**
                    * Set the value of libelle
                    *
                    * @return  self
                    */ 
                   public function setLibelle($libelle)
                   {
                    $this->libelle = $libelle;
               
                       return $this;
                   }
}
