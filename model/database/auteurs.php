
<?php 
class auteurs {
	 public $id;
	 public $nom;
	 public $prenom;
	 public $statut;
	 public $ville;
	 public $description;
	 public $photo;
	 public $auteurs=array();



                public function __construct($auteurs=null) {
                    $this->auteurs = $auteurs;
                         
                }

                public function all()
                {
                    return $this->auteurs;
                }

                public function role($id, $nom, $prenom, $statut, $ville, $description, $photo)
                    {
                        $this->id = $id;
$this->nom = $nom;
$this->prenom = $prenom;
$this->statut = $statut;
$this->ville = $ville;
$this->description = $description;
$this->photo = $photo;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->auteurs) && count($this->auteurs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setDescription($d['description']);
$this->setPhoto($d['photo']);
$this->auteurs =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of nom
                    */ 
                    public function getNom($nom=null)
                    {
                        if ($nom != null && is_array($this->auteurs) && count($this->auteurs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setDescription($d['description']);
$this->setPhoto($d['photo']);
$this->auteurs =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom;
                        }
                        
                    }
                    /**
                    * Get the value of prenom
                    */ 
                    public function getPrenom($prenom=null)
                    {
                        if ($prenom != null && is_array($this->auteurs) && count($this->auteurs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE prenom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$prenom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setDescription($d['description']);
$this->setPhoto($d['photo']);
$this->auteurs =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->prenom;
                        }
                        
                    }
                    /**
                    * Get the value of statut
                    */ 
                    public function getStatut($statut=null)
                    {
                        if ($statut != null && is_array($this->auteurs) && count($this->auteurs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setDescription($d['description']);
$this->setPhoto($d['photo']);
$this->auteurs =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->statut;
                        }
                        
                    }
                    /**
                    * Get the value of ville
                    */ 
                    public function getVille($ville=null)
                    {
                        if ($ville != null && is_array($this->auteurs) && count($this->auteurs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE ville = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$ville]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setDescription($d['description']);
$this->setPhoto($d['photo']);
$this->auteurs =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->ville;
                        }
                        
                    }
                    /**
                    * Get the value of description
                    */ 
                    public function getDescription($description=null)
                    {
                        if ($description != null && is_array($this->auteurs) && count($this->auteurs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE description = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$description]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setDescription($d['description']);
$this->setPhoto($d['photo']);
$this->auteurs =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->description;
                        }
                        
                    }
                    /**
                    * Get the value of photo
                    */ 
                    public function getPhoto($photo=null)
                    {
                        if ($photo != null && is_array($this->auteurs) && count($this->auteurs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE photo = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$photo]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setDescription($d['description']);
$this->setPhoto($d['photo']);
$this->auteurs =$data; 
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
                    * Set the value of prenom
                    *
                    * @return  self
                    */ 
                   public function setPrenom($prenom)
                   {
                    $this->prenom = $prenom;
               
                       return $this;
                   }
                    /**
                    * Set the value of statut
                    *
                    * @return  self
                    */ 
                   public function setStatut($statut)
                   {
                    $this->statut = $statut;
               
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
