
<?php 
class membre {
	 public $id_membre;
	 public $matricule;
	 public $nom;
	 public $card_membre;
	 public $card_membre_verso;
	 public $prenom;
	 public $adresse;
	 public $numero;
	 public $created_by;
	 public $created_at;
	 public $photo;
	 public $niveau;
	 public $cqr;
	 public $membre=array();



                public function __construct($membre=null) {
                    $this->membre = $membre;
                         
                }

                public function all()
                {
                    return $this->membre;
                }

                public function role($id_membre, $matricule, $nom, $card_membre, $card_membre_verso, $prenom, $adresse, $numero, $created_by, $created_at, $photo, $niveau, $cqr)
                    {
                        $this->id_membre = $id_membre;
$this->matricule = $matricule;
$this->nom = $nom;
$this->card_membre = $card_membre;
$this->card_membre_verso = $card_membre_verso;
$this->prenom = $prenom;
$this->adresse = $adresse;
$this->numero = $numero;
$this->created_by = $created_by;
$this->created_at = $created_at;
$this->photo = $photo;
$this->niveau = $niveau;
$this->cqr = $cqr;

                    }
                


                    /**
                    * Get the value of id_membre
                    */ 
                    public function getId_membre($id_membre=null)
                    {
                        if ($id_membre != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_membre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_membre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setCard_membre($d['card_membre']);
$this->setCard_membre_verso($d['card_membre_verso']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setCreated_by($d['created_by']);
$this->setCreated_at($d['created_at']);
$this->setPhoto($d['photo']);
$this->setNiveau($d['niveau']);
$this->setCqr($d['cqr']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_membre;
                        }
                        
                    }
                    /**
                    * Get the value of matricule
                    */ 
                    public function getMatricule($matricule=null)
                    {
                        if ($matricule != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE matricule = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$matricule]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setCard_membre($d['card_membre']);
$this->setCard_membre_verso($d['card_membre_verso']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setCreated_by($d['created_by']);
$this->setCreated_at($d['created_at']);
$this->setPhoto($d['photo']);
$this->setNiveau($d['niveau']);
$this->setCqr($d['cqr']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->matricule;
                        }
                        
                    }
                    /**
                    * Get the value of nom
                    */ 
                    public function getNom($nom=null)
                    {
                        if ($nom != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setCard_membre($d['card_membre']);
$this->setCard_membre_verso($d['card_membre_verso']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setCreated_by($d['created_by']);
$this->setCreated_at($d['created_at']);
$this->setPhoto($d['photo']);
$this->setNiveau($d['niveau']);
$this->setCqr($d['cqr']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom;
                        }
                        
                    }
                    /**
                    * Get the value of card_membre
                    */ 
                    public function getCard_membre($card_membre=null)
                    {
                        if ($card_membre != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE card_membre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$card_membre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setCard_membre($d['card_membre']);
$this->setCard_membre_verso($d['card_membre_verso']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setCreated_by($d['created_by']);
$this->setCreated_at($d['created_at']);
$this->setPhoto($d['photo']);
$this->setNiveau($d['niveau']);
$this->setCqr($d['cqr']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->card_membre;
                        }
                        
                    }
                    /**
                    * Get the value of card_membre_verso
                    */ 
                    public function getCard_membre_verso($card_membre_verso=null)
                    {
                        if ($card_membre_verso != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE card_membre_verso = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$card_membre_verso]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setCard_membre($d['card_membre']);
$this->setCard_membre_verso($d['card_membre_verso']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setCreated_by($d['created_by']);
$this->setCreated_at($d['created_at']);
$this->setPhoto($d['photo']);
$this->setNiveau($d['niveau']);
$this->setCqr($d['cqr']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->card_membre_verso;
                        }
                        
                    }
                    /**
                    * Get the value of prenom
                    */ 
                    public function getPrenom($prenom=null)
                    {
                        if ($prenom != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE prenom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$prenom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setCard_membre($d['card_membre']);
$this->setCard_membre_verso($d['card_membre_verso']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setCreated_by($d['created_by']);
$this->setCreated_at($d['created_at']);
$this->setPhoto($d['photo']);
$this->setNiveau($d['niveau']);
$this->setCqr($d['cqr']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->prenom;
                        }
                        
                    }
                    /**
                    * Get the value of adresse
                    */ 
                    public function getAdresse($adresse=null)
                    {
                        if ($adresse != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE adresse = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$adresse]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setCard_membre($d['card_membre']);
$this->setCard_membre_verso($d['card_membre_verso']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setCreated_by($d['created_by']);
$this->setCreated_at($d['created_at']);
$this->setPhoto($d['photo']);
$this->setNiveau($d['niveau']);
$this->setCqr($d['cqr']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->adresse;
                        }
                        
                    }
                    /**
                    * Get the value of numero
                    */ 
                    public function getNumero($numero=null)
                    {
                        if ($numero != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE numero = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$numero]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setCard_membre($d['card_membre']);
$this->setCard_membre_verso($d['card_membre_verso']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setCreated_by($d['created_by']);
$this->setCreated_at($d['created_at']);
$this->setPhoto($d['photo']);
$this->setNiveau($d['niveau']);
$this->setCqr($d['cqr']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->numero;
                        }
                        
                    }
                    /**
                    * Get the value of created_by
                    */ 
                    public function getCreated_by($created_by=null)
                    {
                        if ($created_by != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_by = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_by]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setCard_membre($d['card_membre']);
$this->setCard_membre_verso($d['card_membre_verso']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setCreated_by($d['created_by']);
$this->setCreated_at($d['created_at']);
$this->setPhoto($d['photo']);
$this->setNiveau($d['niveau']);
$this->setCqr($d['cqr']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->created_by;
                        }
                        
                    }
                    /**
                    * Get the value of created_at
                    */ 
                    public function getCreated_at($created_at=null)
                    {
                        if ($created_at != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setCard_membre($d['card_membre']);
$this->setCard_membre_verso($d['card_membre_verso']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setCreated_by($d['created_by']);
$this->setCreated_at($d['created_at']);
$this->setPhoto($d['photo']);
$this->setNiveau($d['niveau']);
$this->setCqr($d['cqr']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->created_at;
                        }
                        
                    }
                    /**
                    * Get the value of photo
                    */ 
                    public function getPhoto($photo=null)
                    {
                        if ($photo != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE photo = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$photo]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setCard_membre($d['card_membre']);
$this->setCard_membre_verso($d['card_membre_verso']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setCreated_by($d['created_by']);
$this->setCreated_at($d['created_at']);
$this->setPhoto($d['photo']);
$this->setNiveau($d['niveau']);
$this->setCqr($d['cqr']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->photo;
                        }
                        
                    }
                    /**
                    * Get the value of niveau
                    */ 
                    public function getNiveau($niveau=null)
                    {
                        if ($niveau != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE niveau = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$niveau]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setCard_membre($d['card_membre']);
$this->setCard_membre_verso($d['card_membre_verso']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setCreated_by($d['created_by']);
$this->setCreated_at($d['created_at']);
$this->setPhoto($d['photo']);
$this->setNiveau($d['niveau']);
$this->setCqr($d['cqr']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->niveau;
                        }
                        
                    }
                    /**
                    * Get the value of cqr
                    */ 
                    public function getCqr($cqr=null)
                    {
                        if ($cqr != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE cqr = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$cqr]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setCard_membre($d['card_membre']);
$this->setCard_membre_verso($d['card_membre_verso']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setCreated_by($d['created_by']);
$this->setCreated_at($d['created_at']);
$this->setPhoto($d['photo']);
$this->setNiveau($d['niveau']);
$this->setCqr($d['cqr']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->cqr;
                        }
                        
                    }


                    /**
                    * Set the value of id_membre
                    *
                    * @return  self
                    */ 
                   public function setId_membre($id_membre)
                   {
                    $this->id_membre = $id_membre;
               
                       return $this;
                   }
                    /**
                    * Set the value of matricule
                    *
                    * @return  self
                    */ 
                   public function setMatricule($matricule)
                   {
                    $this->matricule = $matricule;
               
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
                    * Set the value of card_membre
                    *
                    * @return  self
                    */ 
                   public function setCard_membre($card_membre)
                   {
                    $this->card_membre = $card_membre;
               
                       return $this;
                   }
                    /**
                    * Set the value of card_membre_verso
                    *
                    * @return  self
                    */ 
                   public function setCard_membre_verso($card_membre_verso)
                   {
                    $this->card_membre_verso = $card_membre_verso;
               
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
                    * Set the value of numero
                    *
                    * @return  self
                    */ 
                   public function setNumero($numero)
                   {
                    $this->numero = $numero;
               
                       return $this;
                   }
                    /**
                    * Set the value of created_by
                    *
                    * @return  self
                    */ 
                   public function setCreated_by($created_by)
                   {
                    $this->created_by = $created_by;
               
                       return $this;
                   }
                    /**
                    * Set the value of created_at
                    *
                    * @return  self
                    */ 
                   public function setCreated_at($created_at)
                   {
                    $this->created_at = $created_at;
               
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
                    * Set the value of niveau
                    *
                    * @return  self
                    */ 
                   public function setNiveau($niveau)
                   {
                    $this->niveau = $niveau;
               
                       return $this;
                   }
                    /**
                    * Set the value of cqr
                    *
                    * @return  self
                    */ 
                   public function setCqr($cqr)
                   {
                    $this->cqr = $cqr;
               
                       return $this;
                   }
}
