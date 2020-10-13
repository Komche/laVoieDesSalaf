<?php
        //Pour la connexion à la base de donnée
        $this->config["host"] = 'localhost';
        $this->config["db_name"] = 'iniger';
        $this->config["username"] = 'root';
        $this->config["password_"] = '';
$this->config["tables"] = ['actualites','annonces','auteurs','cactualites','cannonces','cfikr','clivres','country','datas','fikrs','files','langues','livres','module','module_role','regions','roles','statuts','type_agent','users','ville',];

$this->config['tables']['actualites'] = ['id','titre','description','auteur','date','lieu','category_id','photo',];

$this->config['tables']['actualites']['id'] = ['id'];

$this->config['tables']['annonces'] = ['id','titre','description','auteur','type_annonce','date_annonce','lieu','cannonce','photo','users','date_event','time_event',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];

$this->config['tables']['auteurs'] = ['id','nom','prenom','statut','ville','description','photo',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];

$this->config['tables']['cactualites'] = ['id','titre',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];

$this->config['tables']['cannonces'] = ['id','titre',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];

$this->config['tables']['cfikr'] = ['id','titre',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];

$this->config['tables']['clivres'] = ['id','titre',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];

$this->config['tables']['country'] = ['id','name',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];

$this->config['tables']['datas'] = ['id','titre','date','fikr','chemin',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['datas']['id'] = ['id'];

$this->config['tables']['fikrs'] = ['id','titre','livre','cfikr','auteur','ville','date_ajout','langue','photo',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['datas']['id'] = ['id'];$this->config['tables']['fikrs']['id'] = ['id'];

$this->config['tables']['files'] = ['id','file_name','file_url','file_type','file_size',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['datas']['id'] = ['id'];$this->config['tables']['fikrs']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];

$this->config['tables']['langues'] = ['id','code','titre',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['datas']['id'] = ['id'];$this->config['tables']['fikrs']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];

$this->config['tables']['livres'] = ['id','titre','description','date','clivres_id','auteur','photo','chemin',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['datas']['id'] = ['id'];$this->config['tables']['fikrs']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['livres']['id'] = ['id'];

$this->config['tables']['module'] = ['id','name','icon','description','action_url','sub_module','is_menu',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['datas']['id'] = ['id'];$this->config['tables']['fikrs']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['livres']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];

$this->config['tables']['module_role'] = ['id','role_id','module',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['datas']['id'] = ['id'];$this->config['tables']['fikrs']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['livres']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];

$this->config['tables']['regions'] = ['id','titre',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['datas']['id'] = ['id'];$this->config['tables']['fikrs']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['livres']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['regions']['id'] = ['id'];

$this->config['tables']['roles'] = ['id','name','description',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['datas']['id'] = ['id'];$this->config['tables']['fikrs']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['livres']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['regions']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];

$this->config['tables']['statuts'] = ['id','grade',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['datas']['id'] = ['id'];$this->config['tables']['fikrs']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['livres']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['regions']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['statuts']['id'] = ['id'];

$this->config['tables']['type_agent'] = ['id','label',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['datas']['id'] = ['id'];$this->config['tables']['fikrs']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['livres']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['regions']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['statuts']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];

$this->config['tables']['users'] = ['id','first_name','last_name','matricule','phone_number','type_agent','created_at','updated_at','photo','role','status','password_',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['datas']['id'] = ['id'];$this->config['tables']['fikrs']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['livres']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['regions']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['statuts']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];

$this->config['tables']['ville'] = ['id','titre','country',];

$this->config['tables']['actualites']['id'] = ['id'];$this->config['tables']['annonces']['id'] = ['id'];$this->config['tables']['auteurs']['id'] = ['id'];$this->config['tables']['cactualites']['id'] = ['id'];$this->config['tables']['cannonces']['id'] = ['id'];$this->config['tables']['cfikr']['id'] = ['id'];$this->config['tables']['clivres']['id'] = ['id'];$this->config['tables']['country']['id'] = ['id'];$this->config['tables']['datas']['id'] = ['id'];$this->config['tables']['fikrs']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['livres']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['regions']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['statuts']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];$this->config['tables']['ville']['id'] = ['id'];
