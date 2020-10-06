
<?php 
class statuts {
	 public $id;
	 public $grade;
	 public $statuts=array();



                public function __construct($statuts=null) {
                    $this->statuts = $statuts;
                         
                }

                public function all()
                {
                    return $this->statuts;
                }

                public function role($id, $grade)
                    {
                        $this->id = $id;
$this->grade = $grade;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->statuts) && count($this->statuts)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setGrade($d['grade']);
$this->statuts =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of grade
                    */ 
                    public function getGrade($grade=null)
                    {
                        if ($grade != null && is_array($this->statuts) && count($this->statuts)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE grade = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$grade]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setGrade($d['grade']);
$this->statuts =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->grade;
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
                    * Set the value of grade
                    *
                    * @return  self
                    */ 
                   public function setGrade($grade)
                   {
                    $this->grade = $grade;
               
                       return $this;
                   }
}
