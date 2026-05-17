<?php
// Constantes globales de l'application

// URL de base
define('BASE_URL', 'http://localhost/gestion-litiges-bagages/');

// Chemins
define('ASSETS_PATH', BASE_URL . 'assets/');
define('CSS_PATH', ASSETS_PATH . 'css/');
define('JS_PATH', ASSETS_PATH . 'js/');
define('IMG_PATH', ASSETS_PATH . 'images/');

// Configuration session
define('SESSION_TIMEOUT', 3600); // 1 heure

// Statuts des litiges
define('STATUT_OUVERT', 'Ouvert');
define('STATUT_EN_COURS', 'En cours');
define('STATUT_RESOLU', 'Résolu');
define('STATUT_FERME', 'Fermé');

// Types de litiges
define('TYPE_PERTE', 'Perte');
define('TYPE_RETARD', 'Retard');
define('TYPE_DOMMAGE', 'Dommage');
define('TYPE_ERREUR', 'Erreur de chargement');

// Types de compensation
define('COMP_INDEMNITE', 'Indemnité');
define('COMP_REMBOURSEMENT', 'Remboursement');
define('COMP_BON_VOYAGE', 'Bon de voyage');

// Rôles utilisateurs
define('ROLE_ADMIN', 'Administrateur');
define('ROLE_AGENT', 'Agent');
define('ROLE_SUPERVISEUR', 'Superviseur');

// Messages
define('MSG_SUCCESS', 'Opération réussie');
define('MSG_ERROR', 'Une erreur est survenue');
define('MSG_NOT_FOUND', 'Ressource non trouvée');
define('MSG_UNAUTHORIZED', 'Accès non autorisé');
?>