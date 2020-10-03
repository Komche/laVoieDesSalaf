
<?php 
class module {
	 public $id;
	 public $name;
	 public $icon;
	 public $description;
	 public $action_url;
	 public $sub_module;
	 public $is_menu;
	 public $module=array();



                public function __construct($module=null) {
                    $this->module = $module;
                         
                }

                public function all()
                {
                    return $this->module;
                }

                public function role($id, $name, $icon, $description, $action_url, $sub_module, $is_menu)
                    {
                        $this->id = $id;
$this->name = $name;
$this->icon = $icon;
$this->description = $description;
$this->action_url = $action_url;
$this->sub_module = $sub_module;
$this->is_menu = $is_menu;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->module =$data; 
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
                        if ($name != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE name = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$name]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->name;
                        }
                        
                    }
                    /**
                    * Get the value of icon
                    */ 
                    public function getIcon($icon=null)
                    {
                        if ($icon != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE icon = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$icon]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->icon;
                        }
                        
                    }
                    /**
                    * Get the value of description
                    */ 
                    public function getDescription($description=null)
                    {
                        if ($description != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE description = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$description]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->module =$data; 
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
                        if ($action_url != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE action_url = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$action_url]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->action_url;
                        }
                        
                    }
                    /**
                    * Get the value of sub_module
                    */ 
                    public function getSub_module($sub_module=null)
                    {
                        if ($sub_module != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE sub_module = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$sub_module]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->sub_module;
                        }
                        
                    }
                    /**
                    * Get the value of is_menu
                    */ 
                    public function getIs_menu($is_menu=null)
                    {
                        if ($is_menu != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE is_menu = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$is_menu]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->is_menu;
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
                    * Set the value of icon
                    *
                    * @return  self
                    */ 
                   public function setIcon($icon)
                   {
                    $this->icon = $icon;
               
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
                    * Set the value of sub_module
                    *
                    * @return  self
                    */ 
                   public function setSub_module($sub_module)
                   {
                    $this->sub_module = $sub_module;
               
                       return $this;
                   }
                    /**
                    * Set the value of is_menu
                    *
                    * @return  self
                    */ 
                   public function setIs_menu($is_menu)
                   {
                    $this->is_menu = $is_menu;
               
                       return $this;
                   }
}
