
<?php 
class roles {
	 public $id;
	 public $name;
	 public $description;
	 public $roles=array();



                public function __construct($roles=null) {
                    $this->roles = $roles;
                         
                }

                public function all()
                {
                    return $this->roles;
                }

                public function role($id, $name, $description)
                    {
                        $this->id = $id;
$this->name = $name;
$this->description = $description;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->roles) && count($this->roles)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setDescription($d['description']);
$this->roles =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of name
                    */ 
                    public function getName($name=null)
                    {
                        if ($name != null && is_array($this->roles) && count($this->roles)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE name = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$name]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setDescription($d['description']);
$this->roles =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->name;
                        }
                        
                    }
                    /**
                    * Get the value of description
                    */ 
                    public function getDescription($description=null)
                    {
                        if ($description != null && is_array($this->roles) && count($this->roles)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE description = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$description]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setDescription($d['description']);
$this->roles =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->description;
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
                    * Set the value of name
                    *
                    * @return  self
                    */ 
                   public function setName($name)
                   {
                    $this->name = $name;
               
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
}
