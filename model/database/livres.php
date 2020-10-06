
<?php 
class livres {
	 public $id;
	 public $titre;
	 public $description;
	 public $date;
	 public $clivres_id;
	 public $auteur;
	 public $photo;
	 public $chemin;
	 public $livres=array();



                public function __construct($livres=null) {
                    $this->livres = $livres;
                         
                }

                public function all()
                {
                    return $this->livres;
                }

                public function role($id, $titre, $description, $date, $clivres_id, $auteur, $photo, $chemin)
                    {
                        $this->id = $id;
$this->titre = $titre;
$this->description = $description;
$this->date = $date;
$this->clivres_id = $clivres_id;
$this->auteur = $auteur;
$this->photo = $photo;
$this->chemin = $chemin;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->livres) && count($this->livres)!=0) {
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
$this->setDate($d['date']);
$this->setClivres_id($d['clivres_id']);
$this->setAuteur($d['auteur']);
$this->setPhoto($d['photo']);
$this->setChemin($d['chemin']);
$this->livres =$data; 
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
                        if ($titre != null && is_array($this->livres) && count($this->livres)!=0) {
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
$this->setDate($d['date']);
$this->setClivres_id($d['clivres_id']);
$this->setAuteur($d['auteur']);
$this->setPhoto($d['photo']);
$this->setChemin($d['chemin']);
$this->livres =$data; 
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
                        if ($description != null && is_array($this->livres) && count($this->livres)!=0) {
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
$this->setDate($d['date']);
$this->setClivres_id($d['clivres_id']);
$this->setAuteur($d['auteur']);
$this->setPhoto($d['photo']);
$this->setChemin($d['chemin']);
$this->livres =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->description;
                        }
                        
                    }
                    /**
                    * Get the value of date
                    */ 
                    public function getDate($date=null)
                    {
                        if ($date != null && is_array($this->livres) && count($this->livres)!=0) {
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
$this->setDate($d['date']);
$this->setClivres_id($d['clivres_id']);
$this->setAuteur($d['auteur']);
$this->setPhoto($d['photo']);
$this->setChemin($d['chemin']);
$this->livres =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date;
                        }
                        
                    }
                    /**
                    * Get the value of clivres_id
                    */ 
                    public function getClivres_id($clivres_id=null)
                    {
                        if ($clivres_id != null && is_array($this->livres) && count($this->livres)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE clivres_id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$clivres_id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setDate($d['date']);
$this->setClivres_id($d['clivres_id']);
$this->setAuteur($d['auteur']);
$this->setPhoto($d['photo']);
$this->setChemin($d['chemin']);
$this->livres =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->clivres_id;
                        }
                        
                    }
                    /**
                    * Get the value of auteur
                    */ 
                    public function getAuteur($auteur=null)
                    {
                        if ($auteur != null && is_array($this->livres) && count($this->livres)!=0) {
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
$this->setDate($d['date']);
$this->setClivres_id($d['clivres_id']);
$this->setAuteur($d['auteur']);
$this->setPhoto($d['photo']);
$this->setChemin($d['chemin']);
$this->livres =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->auteur;
                        }
                        
                    }
                    /**
                    * Get the value of photo
                    */ 
                    public function getPhoto($photo=null)
                    {
                        if ($photo != null && is_array($this->livres) && count($this->livres)!=0) {
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
$this->setDate($d['date']);
$this->setClivres_id($d['clivres_id']);
$this->setAuteur($d['auteur']);
$this->setPhoto($d['photo']);
$this->setChemin($d['chemin']);
$this->livres =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->photo;
                        }
                        
                    }
                    /**
                    * Get the value of chemin
                    */ 
                    public function getChemin($chemin=null)
                    {
                        if ($chemin != null && is_array($this->livres) && count($this->livres)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE chemin = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$chemin]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setDate($d['date']);
$this->setClivres_id($d['clivres_id']);
$this->setAuteur($d['auteur']);
$this->setPhoto($d['photo']);
$this->setChemin($d['chemin']);
$this->livres =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->chemin;
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
                    * Set the value of clivres_id
                    *
                    * @return  self
                    */ 
                   public function setClivres_id($clivres_id)
                   {
                    $this->clivres_id = $clivres_id;
               
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
                    * Set the value of photo
                    *
                    * @return  self
                    */ 
                   public function setPhoto($photo)
                   {
                    $this->photo = $photo;
               
                       return $this;
                   }
                    /**
                    * Set the value of chemin
                    *
                    * @return  self
                    */ 
                   public function setChemin($chemin)
                   {
                    $this->chemin = $chemin;
               
                       return $this;
                   }
}
