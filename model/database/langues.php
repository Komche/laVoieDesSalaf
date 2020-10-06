
<?php 
class langues {
	 public $id;
	 public $code;
	 public $titre;
	 public $langues=array();



                public function __construct($langues=null) {
                    $this->langues = $langues;
                         
                }

                public function all()
                {
                    return $this->langues;
                }

                public function role($id, $code, $titre)
                    {
                        $this->id = $id;
$this->code = $code;
$this->titre = $titre;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->langues) && count($this->langues)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode($d['code']);
$this->setTitre($d['titre']);
$this->langues =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of code
                    */ 
                    public function getCode($code=null)
                    {
                        if ($code != null && is_array($this->langues) && count($this->langues)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE code = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$code]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode($d['code']);
$this->setTitre($d['titre']);
$this->langues =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->code;
                        }
                        
                    }
                    /**
                    * Get the value of titre
                    */ 
                    public function getTitre($titre=null)
                    {
                        if ($titre != null && is_array($this->langues) && count($this->langues)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode($d['code']);
$this->setTitre($d['titre']);
$this->langues =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
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
                    * Set the value of code
                    *
                    * @return  self
                    */ 
                   public function setCode($code)
                   {
                    $this->code = $code;
               
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
}
