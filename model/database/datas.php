
<?php 
class datas {
	 public $id;
	 public $titre;
	 public $date;
	 public $fikr;
	 public $chemin;
	 public $datas=array();



                public function __construct($datas=null) {
                    $this->datas = $datas;
                         
                }

                public function all()
                {
                    return $this->datas;
                }

                public function role($id, $titre, $date, $fikr, $chemin)
                    {
                        $this->id = $id;
$this->titre = $titre;
$this->date = $date;
$this->fikr = $fikr;
$this->chemin = $chemin;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->datas) && count($this->datas)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDate($d['date']);
$this->setFikr($d['fikr']);
$this->setChemin($d['chemin']);
$this->datas =$data; 
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
                        if ($titre != null && is_array($this->datas) && count($this->datas)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDate($d['date']);
$this->setFikr($d['fikr']);
$this->setChemin($d['chemin']);
$this->datas =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
                        }
                        
                    }
                    /**
                    * Get the value of date
                    */ 
                    public function getDate($date=null)
                    {
                        if ($date != null && is_array($this->datas) && count($this->datas)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDate($d['date']);
$this->setFikr($d['fikr']);
$this->setChemin($d['chemin']);
$this->datas =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date;
                        }
                        
                    }
                    /**
                    * Get the value of fikr
                    */ 
                    public function getFikr($fikr=null)
                    {
                        if ($fikr != null && is_array($this->datas) && count($this->datas)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE fikr = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$fikr]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDate($d['date']);
$this->setFikr($d['fikr']);
$this->setChemin($d['chemin']);
$this->datas =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->fikr;
                        }
                        
                    }
                    /**
                    * Get the value of chemin
                    */ 
                    public function getChemin($chemin=null)
                    {
                        if ($chemin != null && is_array($this->datas) && count($this->datas)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE chemin = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$chemin]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDate($d['date']);
$this->setFikr($d['fikr']);
$this->setChemin($d['chemin']);
$this->datas =$data; 
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
                    * Set the value of fikr
                    *
                    * @return  self
                    */ 
                   public function setFikr($fikr)
                   {
                    $this->fikr = $fikr;
               
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
