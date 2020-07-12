
<?php 
class actions {
	 public $id;
	 public $name;
	 public $description;
	 public $action_url;
	 public $module;
	 public $actions=array();



                public function __construct($actions=null) {
                    $this->actions = $actions;
                         
                }

                public function all()
                {
                    return $this->actions;
                }

                public function role($id, $name, $description, $action_url, $module)
                    {
                        $this->id = $id;
$this->name = $name;
$this->description = $description;
$this->action_url = $action_url;
$this->module = $module;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->actions) && count($this->actions)!=0) {
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
$this->setAction_url($d['action_url']);
$this->setModule($d['module']);
$this->actions =$data; 
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
                        if ($name != null && is_array($this->actions) && count($this->actions)!=0) {
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
$this->setAction_url($d['action_url']);
$this->setModule($d['module']);
$this->actions =$data; 
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
                        if ($description != null && is_array($this->actions) && count($this->actions)!=0) {
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
$this->setAction_url($d['action_url']);
$this->setModule($d['module']);
$this->actions =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->description;
                        }
                        
                    }
                    /**
                    * Get the value of action_url
                    */ 
                    public function getAction_url($action_url=null)
                    {
                        if ($action_url != null && is_array($this->actions) && count($this->actions)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE action_url = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$action_url]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setModule($d['module']);
$this->actions =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->action_url;
                        }
                        
                    }
                    /**
                    * Get the value of module
                    */ 
                    public function getModule($module=null)
                    {
                        if ($module != null && is_array($this->actions) && count($this->actions)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE module = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$module]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setModule($d['module']);
$this->actions =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->module;
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
                    /**
                    * Set the value of action_url
                    *
                    * @return  self
                    */ 
                   public function setAction_url($action_url)
                   {
                    $this->action_url = $action_url;
               
                       return $this;
                   }
                    /**
                    * Set the value of module
                    *
                    * @return  self
                    */ 
                   public function setModule($module)
                   {
                    $this->module = $module;
               
                       return $this;
                   }
}
