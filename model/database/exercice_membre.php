
<?php 
class exercice_membre {
	 public $id_exercice_membre;
	 public $membre;
	 public $exercice;
	 public $exercice_membre=array();



                public function __construct($exercice_membre=null) {
                    $this->exercice_membre = $exercice_membre;
                         
                }

                public function all()
                {
                    return $this->exercice_membre;
                }

                public function role($id_exercice_membre, $membre, $exercice)
                    {
                        $this->id_exercice_membre = $id_exercice_membre;
$this->membre = $membre;
$this->exercice = $exercice;

                    }
                


                    /**
                    * Get the value of id_exercice_membre
                    */ 
                    public function getId_exercice_membre($id_exercice_membre=null)
                    {
                        if ($id_exercice_membre != null && is_array($this->exercice_membre) && count($this->exercice_membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_exercice_membre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_exercice_membre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_exercice_membre($d['id_exercice_membre']);
$this->setMembre($d['membre']);
$this->setExercice($d['exercice']);
$this->exercice_membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_exercice_membre;
                        }
                        
                    }
                    /**
                    * Get the value of membre
                    */ 
                    public function getMembre($membre=null)
                    {
                        if ($membre != null && is_array($this->exercice_membre) && count($this->exercice_membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE membre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$membre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_exercice_membre($d['id_exercice_membre']);
$this->setMembre($d['membre']);
$this->setExercice($d['exercice']);
$this->exercice_membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->membre;
                        }
                        
                    }
                    /**
                    * Get the value of exercice
                    */ 
                    public function getExercice($exercice=null)
                    {
                        if ($exercice != null && is_array($this->exercice_membre) && count($this->exercice_membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE exercice = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$exercice]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_exercice_membre($d['id_exercice_membre']);
$this->setMembre($d['membre']);
$this->setExercice($d['exercice']);
$this->exercice_membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->exercice;
                        }
                        
                    }


                    /**
                    * Set the value of id_exercice_membre
                    *
                    * @return  self
                    */ 
                   public function setId_exercice_membre($id_exercice_membre)
                   {
                    $this->id_exercice_membre = $id_exercice_membre;
               
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
                    * Set the value of exercice
                    *
                    * @return  self
                    */ 
                   public function setExercice($exercice)
                   {
                    $this->exercice = $exercice;
               
                       return $this;
                   }
}
