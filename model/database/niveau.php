
<?php 
class niveau {
	 public $id_niveau;
	 public $filiere;
	 public $etablissement;
	 public $libelle_niveau;
	 public $niveau=array();



                public function __construct($niveau=null) {
                    $this->niveau = $niveau;
                         
                }

                public function all()
                {
                    return $this->niveau;
                }

                public function role($id_niveau, $filiere, $etablissement, $libelle_niveau)
                    {
                        $this->id_niveau = $id_niveau;
$this->filiere = $filiere;
$this->etablissement = $etablissement;
$this->libelle_niveau = $libelle_niveau;

                    }
                


                    /**
                    * Get the value of id_niveau
                    */ 
                    public function getId_niveau($id_niveau=null)
                    {
                        if ($id_niveau != null && is_array($this->niveau) && count($this->niveau)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_niveau = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_niveau]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_niveau($d['id_niveau']);
$this->setFiliere($d['filiere']);
$this->setEtablissement($d['etablissement']);
$this->setLibelle_niveau($d['libelle_niveau']);
$this->niveau =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_niveau;
                        }
                        
                    }
                    /**
                    * Get the value of filiere
                    */ 
                    public function getFiliere($filiere=null)
                    {
                        if ($filiere != null && is_array($this->niveau) && count($this->niveau)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE filiere = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$filiere]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_niveau($d['id_niveau']);
$this->setFiliere($d['filiere']);
$this->setEtablissement($d['etablissement']);
$this->setLibelle_niveau($d['libelle_niveau']);
$this->niveau =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->filiere;
                        }
                        
                    }
                    /**
                    * Get the value of etablissement
                    */ 
                    public function getEtablissement($etablissement=null)
                    {
                        if ($etablissement != null && is_array($this->niveau) && count($this->niveau)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE etablissement = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$etablissement]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_niveau($d['id_niveau']);
$this->setFiliere($d['filiere']);
$this->setEtablissement($d['etablissement']);
$this->setLibelle_niveau($d['libelle_niveau']);
$this->niveau =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->etablissement;
                        }
                        
                    }
                    /**
                    * Get the value of libelle_niveau
                    */ 
                    public function getLibelle_niveau($libelle_niveau=null)
                    {
                        if ($libelle_niveau != null && is_array($this->niveau) && count($this->niveau)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE libelle_niveau = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$libelle_niveau]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_niveau($d['id_niveau']);
$this->setFiliere($d['filiere']);
$this->setEtablissement($d['etablissement']);
$this->setLibelle_niveau($d['libelle_niveau']);
$this->niveau =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->libelle_niveau;
                        }
                        
                    }


                    /**
                    * Set the value of id_niveau
                    *
                    * @return  self
                    */ 
                   public function setId_niveau($id_niveau)
                   {
                    $this->id_niveau = $id_niveau;
               
                       return $this;
                   }
                    /**
                    * Set the value of filiere
                    *
                    * @return  self
                    */ 
                   public function setFiliere($filiere)
                   {
                    $this->filiere = $filiere;
               
                       return $this;
                   }
                    /**
                    * Set the value of etablissement
                    *
                    * @return  self
                    */ 
                   public function setEtablissement($etablissement)
                   {
                    $this->etablissement = $etablissement;
               
                       return $this;
                   }
                    /**
                    * Set the value of libelle_niveau
                    *
                    * @return  self
                    */ 
                   public function setLibelle_niveau($libelle_niveau)
                   {
                    $this->libelle_niveau = $libelle_niveau;
               
                       return $this;
                   }
}
