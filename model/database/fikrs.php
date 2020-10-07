
<?php 
class fikrs {
	 public $id;
	 public $titre;
	 public $livre;
	 public $cfikr;
	 public $auteur;
	 public $ville;
	 public $date_ajout;
	 public $langue;
	 public $photo;
	 public $fikrs=array();



                public function __construct($fikrs=null) {
                    $this->fikrs = $fikrs;
                         
                }

                public function all()
                {
                    return $this->fikrs;
                }

                public function role($id, $titre, $livre, $cfikr, $auteur, $ville, $date_ajout, $langue, $photo)
                    {
                        $this->id = $id;
$this->titre = $titre;
$this->livre = $livre;
$this->cfikr = $cfikr;
$this->auteur = $auteur;
$this->ville = $ville;
$this->date_ajout = $date_ajout;
$this->langue = $langue;
$this->photo = $photo;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->fikrs) && count($this->fikrs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setLivre($d['livre']);
$this->setCfikr($d['cfikr']);
$this->setAuteur($d['auteur']);
$this->setVille($d['ville']);
$this->setDate_ajout($d['date_ajout']);
$this->setLangue($d['langue']);
$this->setPhoto($d['photo']);
$this->fikrs =$data; 
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
                        if ($titre != null && is_array($this->fikrs) && count($this->fikrs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setLivre($d['livre']);
$this->setCfikr($d['cfikr']);
$this->setAuteur($d['auteur']);
$this->setVille($d['ville']);
$this->setDate_ajout($d['date_ajout']);
$this->setLangue($d['langue']);
$this->setPhoto($d['photo']);
$this->fikrs =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
                        }
                        
                    }
                    /**
                    * Get the value of livre
                    */ 
                    public function getLivre($livre=null)
                    {
                        if ($livre != null && is_array($this->fikrs) && count($this->fikrs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE livre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$livre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setLivre($d['livre']);
$this->setCfikr($d['cfikr']);
$this->setAuteur($d['auteur']);
$this->setVille($d['ville']);
$this->setDate_ajout($d['date_ajout']);
$this->setLangue($d['langue']);
$this->setPhoto($d['photo']);
$this->fikrs =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->livre;
                        }
                        
                    }
                    /**
                    * Get the value of cfikr
                    */ 
                    public function getCfikr($cfikr=null)
                    {
                        if ($cfikr != null && is_array($this->fikrs) && count($this->fikrs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE cfikr = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$cfikr]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setLivre($d['livre']);
$this->setCfikr($d['cfikr']);
$this->setAuteur($d['auteur']);
$this->setVille($d['ville']);
$this->setDate_ajout($d['date_ajout']);
$this->setLangue($d['langue']);
$this->setPhoto($d['photo']);
$this->fikrs =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->cfikr;
                        }
                        
                    }
                    /**
                    * Get the value of auteur
                    */ 
                    public function getAuteur($auteur=null)
                    {
                        if ($auteur != null && is_array($this->fikrs) && count($this->fikrs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE auteur = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$auteur]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setLivre($d['livre']);
$this->setCfikr($d['cfikr']);
$this->setAuteur($d['auteur']);
$this->setVille($d['ville']);
$this->setDate_ajout($d['date_ajout']);
$this->setLangue($d['langue']);
$this->setPhoto($d['photo']);
$this->fikrs =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->auteur;
                        }
                        
                    }
                    /**
                    * Get the value of ville
                    */ 
                    public function getVille($ville=null)
                    {
                        if ($ville != null && is_array($this->fikrs) && count($this->fikrs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE ville = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$ville]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setLivre($d['livre']);
$this->setCfikr($d['cfikr']);
$this->setAuteur($d['auteur']);
$this->setVille($d['ville']);
$this->setDate_ajout($d['date_ajout']);
$this->setLangue($d['langue']);
$this->setPhoto($d['photo']);
$this->fikrs =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->ville;
                        }
                        
                    }
                    /**
                    * Get the value of date_ajout
                    */ 
                    public function getDate_ajout($date_ajout=null)
                    {
                        if ($date_ajout != null && is_array($this->fikrs) && count($this->fikrs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_ajout = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_ajout]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setLivre($d['livre']);
$this->setCfikr($d['cfikr']);
$this->setAuteur($d['auteur']);
$this->setVille($d['ville']);
$this->setDate_ajout($d['date_ajout']);
$this->setLangue($d['langue']);
$this->setPhoto($d['photo']);
$this->fikrs =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_ajout;
                        }
                        
                    }
                    /**
                    * Get the value of langue
                    */ 
                    public function getLangue($langue=null)
                    {
                        if ($langue != null && is_array($this->fikrs) && count($this->fikrs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE langue = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$langue]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setLivre($d['livre']);
$this->setCfikr($d['cfikr']);
$this->setAuteur($d['auteur']);
$this->setVille($d['ville']);
$this->setDate_ajout($d['date_ajout']);
$this->setLangue($d['langue']);
$this->setPhoto($d['photo']);
$this->fikrs =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->langue;
                        }
                        
                    }
                    /**
                    * Get the value of photo
                    */ 
                    public function getPhoto($photo=null)
                    {
                        if ($photo != null && is_array($this->fikrs) && count($this->fikrs)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE photo = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$photo]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setLivre($d['livre']);
$this->setCfikr($d['cfikr']);
$this->setAuteur($d['auteur']);
$this->setVille($d['ville']);
$this->setDate_ajout($d['date_ajout']);
$this->setLangue($d['langue']);
$this->setPhoto($d['photo']);
$this->fikrs =$data; 
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
                    * Set the value of livre
                    *
                    * @return  self
                    */ 
                   public function setLivre($livre)
                   {
                    $this->livre = $livre;
               
                       return $this;
                   }
                    /**
                    * Set the value of cfikr
                    *
                    * @return  self
                    */ 
                   public function setCfikr($cfikr)
                   {
                    $this->cfikr = $cfikr;
               
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
                    * Set the value of date_ajout
                    *
                    * @return  self
                    */ 
                   public function setDate_ajout($date_ajout)
                   {
                    $this->date_ajout = $date_ajout;
               
                       return $this;
                   }
                    /**
                    * Set the value of langue
                    *
                    * @return  self
                    */ 
                   public function setLangue($langue)
                   {
                    $this->langue = $langue;
               
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
