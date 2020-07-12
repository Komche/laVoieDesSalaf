
<?php 
class files {
	 public $id;
	 public $file_name;
	 public $file_url;
	 public $file_type;
	 public $file_size;
	 public $files=array();



                public function __construct($files=null) {
                    $this->files = $files;
                         
                }

                public function all()
                {
                    return $this->files;
                }

                public function role($id, $file_name, $file_url, $file_type, $file_size)
                    {
                        $this->id = $id;
$this->file_name = $file_name;
$this->file_url = $file_url;
$this->file_type = $file_type;
$this->file_size = $file_size;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->files) && count($this->files)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFile_name($d['file_name']);
$this->setFile_url($d['file_url']);
$this->setFile_type($d['file_type']);
$this->setFile_size($d['file_size']);
$this->files =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of file_name
                    */ 
                    public function getFile_name($file_name=null)
                    {
                        if ($file_name != null && is_array($this->files) && count($this->files)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE file_name = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$file_name]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFile_name($d['file_name']);
$this->setFile_url($d['file_url']);
$this->setFile_type($d['file_type']);
$this->setFile_size($d['file_size']);
$this->files =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->file_name;
                        }
                        
                    }
                    /**
                    * Get the value of file_url
                    */ 
                    public function getFile_url($file_url=null)
                    {
                        if ($file_url != null && is_array($this->files) && count($this->files)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE file_url = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$file_url]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFile_name($d['file_name']);
$this->setFile_url($d['file_url']);
$this->setFile_type($d['file_type']);
$this->setFile_size($d['file_size']);
$this->files =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->file_url;
                        }
                        
                    }
                    /**
                    * Get the value of file_type
                    */ 
                    public function getFile_type($file_type=null)
                    {
                        if ($file_type != null && is_array($this->files) && count($this->files)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE file_type = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$file_type]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFile_name($d['file_name']);
$this->setFile_url($d['file_url']);
$this->setFile_type($d['file_type']);
$this->setFile_size($d['file_size']);
$this->files =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->file_type;
                        }
                        
                    }
                    /**
                    * Get the value of file_size
                    */ 
                    public function getFile_size($file_size=null)
                    {
                        if ($file_size != null && is_array($this->files) && count($this->files)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE file_size = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$file_size]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFile_name($d['file_name']);
$this->setFile_url($d['file_url']);
$this->setFile_type($d['file_type']);
$this->setFile_size($d['file_size']);
$this->files =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->file_size;
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
                    * Set the value of file_name
                    *
                    * @return  self
                    */ 
                   public function setFile_name($file_name)
                   {
                    $this->file_name = $file_name;
               
                       return $this;
                   }
                    /**
                    * Set the value of file_url
                    *
                    * @return  self
                    */ 
                   public function setFile_url($file_url)
                   {
                    $this->file_url = $file_url;
               
                       return $this;
                   }
                    /**
                    * Set the value of file_type
                    *
                    * @return  self
                    */ 
                   public function setFile_type($file_type)
                   {
                    $this->file_type = $file_type;
               
                       return $this;
                   }
                    /**
                    * Set the value of file_size
                    *
                    * @return  self
                    */ 
                   public function setFile_size($file_size)
                   {
                    $this->file_size = $file_size;
               
                       return $this;
                   }
}
