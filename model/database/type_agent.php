
<?php 
class type_agent {
	 public $id;
	 public $label;
	 public $type_agent=array();



                public function __construct($type_agent=null) {
                    $this->type_agent = $type_agent;
                         
                }

                public function all()
                {
                    return $this->type_agent;
                }

                public function role($id, $label)
                    {
                        $this->id = $id;
$this->label = $label;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->type_agent) && count($this->type_agent)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLabel($d['label']);
$this->type_agent =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of label
                    */ 
                    public function getLabel($label=null)
                    {
                        if ($label != null && is_array($this->type_agent) && count($this->type_agent)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE label = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$label]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLabel($d['label']);
$this->type_agent =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->label;
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
                    * Set the value of label
                    *
                    * @return  self
                    */ 
                   public function setLabel($label)
                   {
                    $this->label = $label;
               
                       return $this;
                   }
}
