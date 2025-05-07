<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
service('auth')->routes($routes);

//--------------------Routes mission--------------------

$routes->get('/', 'Mission::list', ['as' => 'list_mission']); //liste missions
$routes->get('gestion_mission-(:num)', 'Mission::mission/$1', ['as' => 'gestion_mission']); //mission
$routes->post('list_mission', 'Mission::list', ['as' => 'list_mission']);


$routes->get('create_mission', 'Mission::ajout', ['as' => 'ajout_mission']); //formlaire ajout mission
$routes->post('create_mission', 'Mission::create', ['as' => 'create_mission']); // creation mission

$routes->get('update_mission-(:num)', 'Mission::modif/$1', ['as' => 'modif_mission']); //formulaire modif mission
$routes->post('update_mission', 'Mission::update', ['as' => 'update_mission']); //modification mission

$routes->post('suppr_mission', 'Mission::suppr', ['as' => 'suppr_mission']); //suppression mission

// routes pour affecter les missions
$routes->get('affect_mission-(:num)', 'Mission::attribution/$1', ['as' => 'attribution_mission']); //formulaire affect mission
$routes->post('affect_mission', 'Mission::affect', ['as' => 'affect_mission']); //affectation mission
$routes->post('suppr_attribution_mission', 'Mission::suppr_affect', ['as' => 'suppr_attribution_mission']); //suppression mission

// routes pour les profils de missions
$routes->post('ajout_profil_mission', 'Mission::ajoutProfil', ['as' => 'ajout_profil_mission']);
$routes->post('suppr_profil_mission', 'Mission::supprProfil', ['as' => 'suppr_profil_mission']);

// routes pour la deconnexion et phpmyadmin
$routes->get('logout', 'Mission::logout', ['as' => 'logout']);
$routes->get('phpmyadmin', 'Mission::phpmyadmin', ['as' => 'phpmyadmin']);

//--------------------Routes client--------------------

$routes->get('list_client', 'Client::list', ['as' => 'page_client']); //liste client

$routes->get('create_client', 'Client::ajout', ['as' => 'ajout_client']); //formulaire ajout client
$routes->post('create_client', 'Client::create', ['as' => 'create_client']); //creation client

$routes->get('update_client-(:num)', 'Client::modif/$1', ['as' => 'modif_client']); //formulaire modif client
$routes->post('update_client', 'Client::update', ['as' => 'update_client']); //modification client

$routes->post('suppr_client', 'Client::suppr', ['as' => 'suppr_client']); //suppression client

//--------------------Routes salarie--------------------

$routes->get('list_salarie', 'Salarie::list', ['as' => 'page_salarie']); //liste salarie

$routes->get('create_salarie', 'Salarie::ajout', ['as' => 'ajout_salarie']); //formulaire ajout salarie
$routes->post('create_salarie', 'Salarie::create', ['as' => 'create_salarie']); // creation salarie

$routes->get('update_salarie-(:num)', 'Salarie::modif/$1', ['as' => 'modif_salarie']); //formulaire modif salarie
$routes->post('update_salarie', 'Salarie::update', ['as' => 'update_salarie']); //modification salarie

$routes->post('suppr_salarie', 'Salarie::suppr', ['as' => 'suppr_salarie']); //suppression salarie

// routes pour les profils salaries
$routes->post('ajout_profil_salarie', 'Salarie::ajoutProfil', ['as' => 'ajout_profil_salarie']);
$routes->post('suppr_profil_salarie', 'Salarie::supprProfil', ['as' => 'suppr_profil_salarie']);

//--------------------Routes profil--------------------

$routes->get('list_profil', 'Profil::list', ['as' => 'page_profil']);

$routes->get('create_profil', 'Profil::ajout', ['as' => 'ajout_profil']);
$routes->post('create_profil', 'Profil::create', ['as' => 'create_profil']);

// $routes->get('update_profil-(:num)', 'Profil::modif/$1', ['as' => 'modif_profil']);
$routes->post('update_profil', 'Profil::update', ['as' => 'update_profil']);

$routes->post('suppr_profil', 'Profil::suppr', ['as' => 'suppr_profil']);

//--------------------Routes utilisateur--------------------
//les routes pour les utilisateur ne sont pas utilisé car c'est géré par shield !!!s

// routes pour les utilisateur de l'aplication
$routes->get('list_utilisateur', 'Utilisateur::list', ['as' => 'page_utilisateur']);

$routes->get('create_utilisateur', 'Utilisateur::ajout', ['as' => 'create_utilisateur']);
$routes->post('create_utilisateur', 'Utilisateur::create', ['as' => 'create_utilisateur']);

$routes->get('update_utilisateur-(:num)', 'Utilisateur::modif/$1', ['as' => 'update_utilisateur']);
$routes->post('update_utilisateur', 'Utilisateur::update', ['as' => 'update_utilisateur']);

$routes->post('suppr_utilisateur', 'Utilisateur::suppr', ['as' => 'suppr_utilisateur']);

// routes page erreur
// $routes->get('error_message', 'Error::message', ['as'=> 'page_erreur']);
// $routes->post('error_message', 'Error::error', ['as'=> 'error_conexion']);

