<?php
        //Pour la connexion à la base de donnée
        $this->config["host"] = 'localhost';
        $this->config["db_name"] = 'checker';
        $this->config["username"] = 'root';
        $this->config["password_"] = '';
$this->config["tables"] = ['actions','country','document','entity','etablissement','files','filiere','membre','module','module_role','roles','type_agent','type_document','users','ville',];

$this->config['tables']['actions'] = ['id','name','description','action_url','module',];

$this->config['tables']['actions']['id'] = ['id'];

$this->config['tables']['country'] = ['id','name',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];

$this->config['tables']['document'] = ['id_document','matriule','entity','entity_matricule','first_name','last_name','phone_number','birthday',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['document']['id'] = ['id_document'];

$this->config['tables']['entity'] = ['id_entity','label','domaine','email','phone_number','bp','localisation','created_at','created_by','update_at','update_by',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['document']['id'] = ['id_document'];$this->config['tables']['entity']['id'] = ['id_entity'];

$this->config['tables']['etablissement'] = ['idEtablissement','nom','adresse','ville',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['document']['id'] = ['id_document'];$this->config['tables']['entity']['id'] = ['id_entity'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];

$this->config['tables']['files'] = ['id','file_name','file_url','file_type','file_size',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['document']['id'] = ['id_document'];$this->config['tables']['entity']['id'] = ['id_entity'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['files']['id'] = ['id'];

$this->config['tables']['filiere'] = ['id_filiere','libelle',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['document']['id'] = ['id_document'];$this->config['tables']['entity']['id'] = ['id_entity'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];

$this->config['tables']['membre'] = ['id_membre','matricule','nom','card_membre','card_membre_verso','prenom','adresse','numero','created_by','created_at','photo','niveau','cqr',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['document']['id'] = ['id_document'];$this->config['tables']['entity']['id'] = ['id_entity'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];

$this->config['tables']['module'] = ['id','name','icon','description','action_url','sub_module','is_menu',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['document']['id'] = ['id_document'];$this->config['tables']['entity']['id'] = ['id_entity'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];

$this->config['tables']['module_role'] = ['id','role_id','module',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['document']['id'] = ['id_document'];$this->config['tables']['entity']['id'] = ['id_entity'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];

$this->config['tables']['roles'] = ['id','name','description',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['document']['id'] = ['id_document'];$this->config['tables']['entity']['id'] = ['id_entity'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];

$this->config['tables']['type_agent'] = ['id','label',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['document']['id'] = ['id_document'];$this->config['tables']['entity']['id'] = ['id_entity'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];

$this->config['tables']['type_document'] = ['id_type_document','label',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['document']['id'] = ['id_document'];$this->config['tables']['entity']['id'] = ['id_entity'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['type_document']['id'] = ['id_type_document'];

$this->config['tables']['users'] = ['id','first_name','last_name','matricule','phone_number','type_agent','created_at','updated_at','photo','role','status','password_',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['document']['id'] = ['id_document'];$this->config['tables']['entity']['id'] = ['id_entity'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['type_document']['id'] = ['id_type_document'];$this->config['tables']['users']['id'] = ['id'];

$this->config['tables']['ville'] = ['idVille','nomVille','country',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['document']['id'] = ['id_document'];$this->config['tables']['entity']['id'] = ['id_entity'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['filiere']['id'] = ['id_filiere'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['type_document']['id'] = ['id_type_document'];$this->config['tables']['users']['id'] = ['id'];$this->config['tables']['ville']['id'] = ['idVille'];
