
<?php 
class annonces {
	 public $id;
	 public $titre;
	 public $description;
	 public $auteur;
	 public $date;
	 public $lieu;
	 public $cannonces;
	 public $photo;
	 public $annonces=array();



                public function __construct($annonces=null) {
                    $this->annonces = $annonces;
                         
                }

                public function all()
                {
                    return $this->annonces;
                }

                public function role($id, $titre, $description, $auteur, $date, $lieu, $cannonces, $photo)
                    {
                        $this->id = $id;
$this->titre = $titre;
$this->description = $description;
$this->auteur = $auteur;
$this->date = $date;
$this->lieu = $lieu;
$this->cannonces = $cannonces;
$this->photo = $photo;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->annonces) && count($this->annonces)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setAuteur($d['auteur']);
$this->setDate($d['date']);
$this->setLieu($d['lieu']);
$this->setCannonces($d['cannonces']);
$this->setPhoto($d['photo']);
$this->annonces =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of titre
                    */ 
                    public function getTitre($titre=null)
                    {
                        if ($titre != null && is_array($this->annonces) && count($this->annonces)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setAuteur($d['auteur']);
$this->setDate($d['date']);
$this->setLieu($d['lieu']);
$this->setCannonces($d['cannonces']);
$this->setPhoto($d['photo']);
$this->annonces =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
                        }
                        
                    }
                    /**
                    * Get the value of description
                    */ 
                    public function getDescription($description=null)
                    {
                        if ($description != null && is_array($this->annonces) && count($this->annonces)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE description = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$description]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setAuteur($d['auteur']);
$this->setDate($d['date']);
$this->setLieu($d['lieu']);
$this->setCannonces($d['cannonces']);
$this->setPhoto($d['photo']);
$this->annonces =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->description;
                        }
                        
                    }
                    /**
                    * Get the value of auteur
                    */ 
                    public function getAuteur($auteur=null)
                    {
                        if ($auteur != null && is_array($this->annonces) && count($this->annonces)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE auteur = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$auteur]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setAuteur($d['auteur']);
$this->setDate($d['date']);
$this->setLieu($d['lieu']);
$this->setCannonces($d['cannonces']);
$this->setPhoto($d['photo']);
$this->annonces =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->auteur;
                        }
                        
                    }
                    /**
                    * Get the value of date
                    */ 
                    public function getDate($date=null)
                    {
                        if ($date != null && is_array($this->annonces) && count($this->annonces)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setAuteur($d['auteur']);
$this->setDate($d['date']);
$this->setLieu($d['lieu']);
$this->setCannonces($d['cannonces']);
$this->setPhoto($d['photo']);
$this->annonces =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date;
                        }
                        
                    }
                    /**
                    * Get the value of lieu
                    */ 
                    public function getLieu($lieu=null)
                    {
                        if ($lieu != null && is_array($this->annonces) && count($this->annonces)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE lieu = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$lieu]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setAuteur($d['auteur']);
$this->setDate($d['date']);
$this->setLieu($d['lieu']);
$this->setCannonces($d['cannonces']);
$this->setPhoto($d['photo']);
$this->annonces =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->lieu;
                        }
                        
                    }
                    /**
                    * Get the value of cannonces
                    */ 
                    public function getCannonces($cannonces=null)
                    {
                        if ($cannonces != null && is_array($this->annonces) && count($this->annonces)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE cannonces = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$cannonces]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setAuteur($d['auteur']);
$this->setDate($d['date']);
$this->setLieu($d['lieu']);
$this->setCannonces($d['cannonces']);
$this->setPhoto($d['photo']);
$this->annonces =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->cannonces;
                        }
                        
                    }
                    /**
                    * Get the value of photo
                    */ 
                    public function getPhoto($photo=null)
                    {
                        if ($photo != null && is_array($this->annonces) && count($this->annonces)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE photo = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$photo]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setAuteur($d['auteur']);
$this->setDate($d['date']);
$this->setLieu($d['lieu']);
$this->setCannonces($d['cannonces']);
$this->setPhoto($d['photo']);
$this->annonces =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->photo;
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
                    * Set the value of titre
                    *
                    * @return  self
                    */ 
                   public function setTitre($titre)
                   {
                    $this->titre = $titre;
               
                       return $this;
                   }
                    /**
                    * Set the value of description
                    *
                    * @return  self
                    */ 
                   public function setDescription($description)
                   {
                    $this->description = $description;
               
                       return $this;
                   }
                    /**
                    * Set the value of auteur
                    *
                    * @return  self
                    */ 
                   public function setAuteur($auteur)
                   {
                    $this->auteur = $auteur;
               
                       return $this;
                   }
                    /**
                    * Set the value of date
                    *
                    * @return  self
                    */ 
                   public function setDate($date)
                   {
                    $this->date = $date;
               
                       return $this;
                   }
                    /**
                    * Set the value of lieu
                    *
                    * @return  self
                    */ 
                   public function setLieu($lieu)
                   {
                    $this->lieu = $lieu;
               
                       return $this;
                   }
                    /**
                    * Set the value of cannonces
                    *
                    * @return  self
                    */ 
                   public function setCannonces($cannonces)
                   {
                    $this->cannonces = $cannonces;
               
                       return $this;
                   }
                    /**
                    * Set the value of photo
                    *
                    * @return  self
                    */ 
                   public function setPhoto($photo)
                   {
                    $this->photo = $photo;
               
                       return $this;
                   }
}
