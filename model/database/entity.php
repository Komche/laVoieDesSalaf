
<?php 
class entity {
	 public $id_entity;
	 public $label;
	 public $domaine;
	 public $email;
	 public $phone_number;
	 public $bp;
	 public $localisation;
	 public $ville;
	 public $uniqueId;
	 public $created_at;
	 public $created_by;
	 public $update_at;
	 public $update_by;
	 public $entity=array();



                public function __construct($entity=null) {
                    $this->entity = $entity;
                         
                }

                public function all()
                {
                    return $this->entity;
                }

                public function role($id_entity, $label, $domaine, $email, $phone_number, $bp, $localisation, $ville, $uniqueId, $created_at, $created_by, $update_at, $update_by)
                    {
                        $this->id_entity = $id_entity;
$this->label = $label;
$this->domaine = $domaine;
$this->email = $email;
$this->phone_number = $phone_number;
$this->bp = $bp;
$this->localisation = $localisation;
$this->ville = $ville;
$this->uniqueId = $uniqueId;
$this->created_at = $created_at;
$this->created_by = $created_by;
$this->update_at = $update_at;
$this->update_by = $update_by;

                    }
                


                    /**
                    * Get the value of id_entity
                    */ 
                    public function getId_entity($id_entity=null)
                    {
                        if ($id_entity != null && is_array($this->entity) && count($this->entity)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_entity = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_entity]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_entity($d['id_entity']);
$this->setLabel($d['label']);
$this->setDomaine($d['domaine']);
$this->setEmail($d['email']);
$this->setPhone_number($d['phone_number']);
$this->setBp($d['bp']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setUniqueId($d['uniqueId']);
$this->setCreated_at($d['created_at']);
$this->setCreated_by($d['created_by']);
$this->setUpdate_at($d['update_at']);
$this->setUpdate_by($d['update_by']);
$this->entity =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_entity;
                        }
                        
                    }
                    /**
                    * Get the value of label
                    */ 
                    public function getLabel($label=null)
                    {
                        if ($label != null && is_array($this->entity) && count($this->entity)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE label = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$label]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_entity($d['id_entity']);
$this->setLabel($d['label']);
$this->setDomaine($d['domaine']);
$this->setEmail($d['email']);
$this->setPhone_number($d['phone_number']);
$this->setBp($d['bp']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setUniqueId($d['uniqueId']);
$this->setCreated_at($d['created_at']);
$this->setCreated_by($d['created_by']);
$this->setUpdate_at($d['update_at']);
$this->setUpdate_by($d['update_by']);
$this->entity =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->label;
                        }
                        
                    }
                    /**
                    * Get the value of domaine
                    */ 
                    public function getDomaine($domaine=null)
                    {
                        if ($domaine != null && is_array($this->entity) && count($this->entity)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE domaine = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$domaine]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_entity($d['id_entity']);
$this->setLabel($d['label']);
$this->setDomaine($d['domaine']);
$this->setEmail($d['email']);
$this->setPhone_number($d['phone_number']);
$this->setBp($d['bp']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setUniqueId($d['uniqueId']);
$this->setCreated_at($d['created_at']);
$this->setCreated_by($d['created_by']);
$this->setUpdate_at($d['update_at']);
$this->setUpdate_by($d['update_by']);
$this->entity =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->domaine;
                        }
                        
                    }
                    /**
                    * Get the value of email
                    */ 
                    public function getEmail($email=null)
                    {
                        if ($email != null && is_array($this->entity) && count($this->entity)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE email = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$email]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_entity($d['id_entity']);
$this->setLabel($d['label']);
$this->setDomaine($d['domaine']);
$this->setEmail($d['email']);
$this->setPhone_number($d['phone_number']);
$this->setBp($d['bp']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setUniqueId($d['uniqueId']);
$this->setCreated_at($d['created_at']);
$this->setCreated_by($d['created_by']);
$this->setUpdate_at($d['update_at']);
$this->setUpdate_by($d['update_by']);
$this->entity =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->email;
                        }
                        
                    }
                    /**
                    * Get the value of phone_number
                    */ 
                    public function getPhone_number($phone_number=null)
                    {
                        if ($phone_number != null && is_array($this->entity) && count($this->entity)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE phone_number = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$phone_number]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_entity($d['id_entity']);
$this->setLabel($d['label']);
$this->setDomaine($d['domaine']);
$this->setEmail($d['email']);
$this->setPhone_number($d['phone_number']);
$this->setBp($d['bp']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setUniqueId($d['uniqueId']);
$this->setCreated_at($d['created_at']);
$this->setCreated_by($d['created_by']);
$this->setUpdate_at($d['update_at']);
$this->setUpdate_by($d['update_by']);
$this->entity =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->phone_number;
                        }
                        
                    }
                    /**
                    * Get the value of bp
                    */ 
                    public function getBp($bp=null)
                    {
                        if ($bp != null && is_array($this->entity) && count($this->entity)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE bp = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$bp]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_entity($d['id_entity']);
$this->setLabel($d['label']);
$this->setDomaine($d['domaine']);
$this->setEmail($d['email']);
$this->setPhone_number($d['phone_number']);
$this->setBp($d['bp']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setUniqueId($d['uniqueId']);
$this->setCreated_at($d['created_at']);
$this->setCreated_by($d['created_by']);
$this->setUpdate_at($d['update_at']);
$this->setUpdate_by($d['update_by']);
$this->entity =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->bp;
                        }
                        
                    }
                    /**
                    * Get the value of localisation
                    */ 
                    public function getLocalisation($localisation=null)
                    {
                        if ($localisation != null && is_array($this->entity) && count($this->entity)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE localisation = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$localisation]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_entity($d['id_entity']);
$this->setLabel($d['label']);
$this->setDomaine($d['domaine']);
$this->setEmail($d['email']);
$this->setPhone_number($d['phone_number']);
$this->setBp($d['bp']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setUniqueId($d['uniqueId']);
$this->setCreated_at($d['created_at']);
$this->setCreated_by($d['created_by']);
$this->setUpdate_at($d['update_at']);
$this->setUpdate_by($d['update_by']);
$this->entity =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->localisation;
                        }
                        
                    }
                    /**
                    * Get the value of ville
                    */ 
                    public function getVille($ville=null)
                    {
                        if ($ville != null && is_array($this->entity) && count($this->entity)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE ville = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$ville]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_entity($d['id_entity']);
$this->setLabel($d['label']);
$this->setDomaine($d['domaine']);
$this->setEmail($d['email']);
$this->setPhone_number($d['phone_number']);
$this->setBp($d['bp']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setUniqueId($d['uniqueId']);
$this->setCreated_at($d['created_at']);
$this->setCreated_by($d['created_by']);
$this->setUpdate_at($d['update_at']);
$this->setUpdate_by($d['update_by']);
$this->entity =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->ville;
                        }
                        
                    }
                    /**
                    * Get the value of uniqueId
                    */ 
                    public function getUniqueId($uniqueId=null)
                    {
                        if ($uniqueId != null && is_array($this->entity) && count($this->entity)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE uniqueId = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$uniqueId]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_entity($d['id_entity']);
$this->setLabel($d['label']);
$this->setDomaine($d['domaine']);
$this->setEmail($d['email']);
$this->setPhone_number($d['phone_number']);
$this->setBp($d['bp']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setUniqueId($d['uniqueId']);
$this->setCreated_at($d['created_at']);
$this->setCreated_by($d['created_by']);
$this->setUpdate_at($d['update_at']);
$this->setUpdate_by($d['update_by']);
$this->entity =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->uniqueId;
                        }
                        
                    }
                    /**
                    * Get the value of created_at
                    */ 
                    public function getCreated_at($created_at=null)
                    {
                        if ($created_at != null && is_array($this->entity) && count($this->entity)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_entity($d['id_entity']);
$this->setLabel($d['label']);
$this->setDomaine($d['domaine']);
$this->setEmail($d['email']);
$this->setPhone_number($d['phone_number']);
$this->setBp($d['bp']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setUniqueId($d['uniqueId']);
$this->setCreated_at($d['created_at']);
$this->setCreated_by($d['created_by']);
$this->setUpdate_at($d['update_at']);
$this->setUpdate_by($d['update_by']);
$this->entity =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->created_at;
                        }
                        
                    }
                    /**
                    * Get the value of created_by
                    */ 
                    public function getCreated_by($created_by=null)
                    {
                        if ($created_by != null && is_array($this->entity) && count($this->entity)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_by = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_by]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_entity($d['id_entity']);
$this->setLabel($d['label']);
$this->setDomaine($d['domaine']);
$this->setEmail($d['email']);
$this->setPhone_number($d['phone_number']);
$this->setBp($d['bp']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setUniqueId($d['uniqueId']);
$this->setCreated_at($d['created_at']);
$this->setCreated_by($d['created_by']);
$this->setUpdate_at($d['update_at']);
$this->setUpdate_by($d['update_by']);
$this->entity =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->created_by;
                        }
                        
                    }
                    /**
                    * Get the value of update_at
                    */ 
                    public function getUpdate_at($update_at=null)
                    {
                        if ($update_at != null && is_array($this->entity) && count($this->entity)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE update_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$update_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_entity($d['id_entity']);
$this->setLabel($d['label']);
$this->setDomaine($d['domaine']);
$this->setEmail($d['email']);
$this->setPhone_number($d['phone_number']);
$this->setBp($d['bp']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setUniqueId($d['uniqueId']);
$this->setCreated_at($d['created_at']);
$this->setCreated_by($d['created_by']);
$this->setUpdate_at($d['update_at']);
$this->setUpdate_by($d['update_by']);
$this->entity =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->update_at;
                        }
                        
                    }
                    /**
                    * Get the value of update_by
                    */ 
                    public function getUpdate_by($update_by=null)
                    {
                        if ($update_by != null && is_array($this->entity) && count($this->entity)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE update_by = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$update_by]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_entity($d['id_entity']);
$this->setLabel($d['label']);
$this->setDomaine($d['domaine']);
$this->setEmail($d['email']);
$this->setPhone_number($d['phone_number']);
$this->setBp($d['bp']);
$this->setLocalisation($d['localisation']);
$this->setVille($d['ville']);
$this->setUniqueId($d['uniqueId']);
$this->setCreated_at($d['created_at']);
$this->setCreated_by($d['created_by']);
$this->setUpdate_at($d['update_at']);
$this->setUpdate_by($d['update_by']);
$this->entity =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->update_by;
                        }
                        
                    }


                    /**
                    * Set the value of id_entity
                    *
                    * @return  self
                    */ 
                   public function setId_entity($id_entity)
                   {
                    $this->id_entity = $id_entity;
               
                       return $this;
                   }
                    /**
                    * Set the value of label
                    *
                    * @return  self
                    */ 
                   public function setLabel($label)
                   {
                    $this->label = $label;
               
                       return $this;
                   }
                    /**
                    * Set the value of domaine
                    *
                    * @return  self
                    */ 
                   public function setDomaine($domaine)
                   {
                    $this->domaine = $domaine;
               
                       return $this;
                   }
                    /**
                    * Set the value of email
                    *
                    * @return  self
                    */ 
                   public function setEmail($email)
                   {
                    $this->email = $email;
               
                       return $this;
                   }
                    /**
                    * Set the value of phone_number
                    *
                    * @return  self
                    */ 
                   public function setPhone_number($phone_number)
                   {
                    $this->phone_number = $phone_number;
               
                       return $this;
                   }
                    /**
                    * Set the value of bp
                    *
                    * @return  self
                    */ 
                   public function setBp($bp)
                   {
                    $this->bp = $bp;
               
                       return $this;
                   }
                    /**
                    * Set the value of localisation
                    *
                    * @return  self
                    */ 
                   public function setLocalisation($localisation)
                   {
                    $this->localisation = $localisation;
               
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
                    * Set the value of uniqueId
                    *
                    * @return  self
                    */ 
                   public function setUniqueId($uniqueId)
                   {
                    $this->uniqueId = $uniqueId;
               
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
                    * Set the value of update_at
                    *
                    * @return  self
                    */ 
                   public function setUpdate_at($update_at)
                   {
                    $this->update_at = $update_at;
               
                       return $this;
                   }
                    /**
                    * Set the value of update_by
                    *
                    * @return  self
                    */ 
                   public function setUpdate_by($update_by)
                   {
                    $this->update_by = $update_by;
               
                       return $this;
                   }
}
