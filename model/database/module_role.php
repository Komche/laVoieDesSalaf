
<?php 
class module_role {
	 public $id;
	 public $role_id;
	 public $module;
	 public $module_role=array();



                public function __construct($module_role=null) {
                    $this->module_role = $module_role;
                         
                }

                public function all()
                {
                    return $this->module_role;
                }

                public function role($id, $role_id, $module)
                    {
                        $this->id = $id;
$this->role_id = $role_id;
$this->module = $module;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->module_role) && count($this->module_role)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setRole_id($d['role_id']);
$this->setModule($d['module']);
$this->module_role =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of role_id
                    */ 
                    public function getRole_id($role_id=null)
                    {
                        if ($role_id != null && is_array($this->module_role) && count($this->module_role)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE role_id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$role_id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setRole_id($d['role_id']);
$this->setModule($d['module']);
$this->module_role =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->role_id;
                        }
                        
                    }
                    /**
                    * Get the value of module
                    */ 
                    public function getModule($module=null)
                    {
                        if ($module != null && is_array($this->module_role) && count($this->module_role)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE module = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$module]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setRole_id($d['role_id']);
$this->setModule($d['module']);
$this->module_role =$data; 
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
                    * Set the value of role_id
                    *
                    * @return  self
                    */ 
                   public function setRole_id($role_id)
                   {
                    $this->role_id = $role_id;
               
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
