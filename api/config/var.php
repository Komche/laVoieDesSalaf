<?php
        //Pour la connexion à la base de donnée
        $this->config["host"] = 'localhost';
        $this->config["db_name"] = 'checker';
        $this->config["username"] = 'root';
        $this->config["password_"] = '';
$this->config["tables"] = ['actions','bureau','etablissement','exercice','exercice_membre','files','filiere','membre','module','module_role','niveau','poste','roles','type_agent','users','ville',];

$this->config['tables']['actions'] = ['id','name','description','action_url','module',];

$this->config['tables']['actions']['id'] = ['id'];

$this->config['tables']['bureau'] = ['idBureau','libellebureau','typebureau','idVille','sub_bureau',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];

$this->config['tables']['etablissement'] = ['idEtablissement','nom','adresse','ville',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];

$this->config['tables']['exercice'] = ['id_exercice','libelle','bureau','pv_exercice','date_debut','date_fin',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['exercice']['id'] = ['id_exercice'];

$this->config['tables']['exercice_membre'] = ['id_exercice_membre','membre','exercice',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['exercice']['id'] = ['id_exercice'];$this->config['tables']['exercice_membre']['id'] = ['id_exercice_membre'];

$this->config['tables']['files'] = ['id','file_name','file_url','file_type','file_size',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['exercice']['id'] = ['id_exercice'];$this->config['tables']['exercice_membre']['id'] = ['id_exercice_membre'];$this->config['tables']['files']['id'] = ['id'];

$this->config['tables']['filiere'] = ['id_filiere','libelle',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['exercice']['id'] = ['id_exercice'];$this->config['tables']['exercice_membre']['id'] = ['id_exercice_membre'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];

$this->config['tables']['membre'] = ['id_membre','matricule','nom','card_membre','card_membre_verso','prenom','adresse','numero','created_by','created_at','photo','niveau','cqr',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['exercice']['id'] = ['id_exercice'];$this->config['tables']['exercice_membre']['id'] = ['id_exercice_membre'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];

$this->config['tables']['module'] = ['id','name','icon','description','action_url','sub_module',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['exercice']['id'] = ['id_exercice'];$this->config['tables']['exercice_membre']['id'] = ['id_exercice_membre'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];

$this->config['tables']['module_role'] = ['id','role_id','module',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['exercice']['id'] = ['id_exercice'];$this->config['tables']['exercice_membre']['id'] = ['id_exercice_membre'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];

$this->config['tables']['niveau'] = ['id_niveau','filiere','etablissement','libelle_niveau',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['exercice']['id'] = ['id_exercice'];$this->config['tables']['exercice_membre']['id'] = ['id_exercice_membre'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['niveau']['id'] = ['id_niveau'];

$this->config['tables']['poste'] = ['id_poste','bureau','membre','libelle',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['exercice']['id'] = ['id_exercice'];$this->config['tables']['exercice_membre']['id'] = ['id_exercice_membre'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['niveau']['id'] = ['id_niveau'];$this->config['tables']['poste']['id'] = ['id_poste'];

$this->config['tables']['roles'] = ['id','name','description',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['exercice']['id'] = ['id_exercice'];$this->config['tables']['exercice_membre']['id'] = ['id_exercice_membre'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['niveau']['id'] = ['id_niveau'];$this->config['tables']['poste']['id'] = ['id_poste'];$this->config['tables']['roles']['id'] = ['id'];

$this->config['tables']['type_agent'] = ['id','label',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['exercice']['id'] = ['id_exercice'];$this->config['tables']['exercice_membre']['id'] = ['id_exercice_membre'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['niveau']['id'] = ['id_niveau'];$this->config['tables']['poste']['id'] = ['id_poste'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];

$this->config['tables']['users'] = ['id','first_name','last_name','matricule','phone_number','type_agent','created_at','updated_at','photo','role','status','password_',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['exercice']['id'] = ['id_exercice'];$this->config['tables']['exercice_membre']['id'] = ['id_exercice_membre'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['niveau']['id'] = ['id_niveau'];$this->config['tables']['poste']['id'] = ['id_poste'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];

$this->config['tables']['ville'] = ['idVille','nomVille',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['exercice']['id'] = ['id_exercice'];$this->config['tables']['exercice_membre']['id'] = ['id_exercice_membre'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['niveau']['id'] = ['id_niveau'];$this->config['tables']['poste']['id'] = ['id_poste'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];$this->config['tables']['ville']['id'] = ['idVille'];
