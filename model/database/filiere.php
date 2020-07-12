
<?php 
class filiere {
	 public $id_filiere;
	 public $libelle;
	 public $filiere=array();



                public function __construct($filiere=null) {
                    $this->filiere = $filiere;
                         
                }

                public function all()
                {
                    return $this->filiere;
                }

                public function role($id_filiere, $libelle)
                    {
                        $this->id_filiere = $id_filiere;
$this->libelle = $libelle;

                    }
                


                    /**
                    * Get the value of id_filiere
                    */ 
                    public function getId_filiere($id_filiere=null)
                    {
                        if ($id_filiere != null && is_array($this->filiere) && count($this->filiere)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_filiere = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_filiere]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_filiere($d['id_filiere']);
$this->setLibelle($d['libelle']);
$this->filiere =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_filiere;
                        }
                        
                    }
                    /**
                    * Get the value of libelle
                    */ 
                    public function getLibelle($libelle=null)
                    {
                        if ($libelle != null && is_array($this->filiere) && count($this->filiere)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE libelle = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$libelle]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_filiere($d['id_filiere']);
$this->setLibelle($d['libelle']);
$this->filiere =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->libelle;
                        }
                        
                    }


                    /**
                    * Set the value of id_filiere
                    *
                    * @return  self
                    */ 
                   public function setId_filiere($id_filiere)
                   {
                    $this->id_filiere = $id_filiere;
               
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
