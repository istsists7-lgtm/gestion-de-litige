<?php
// Gestion de l'authentification et des sessions

session_start();

// Vérifier si l'utilisateur est connecté
function is_logged_in() {
    return isset($_SESSION['user_id']) && isset($_SESSION['user_login']);
}

// Rediriger si non connecté
function require_login() {
    if (!is_logged_in()) {
        header('Location: ' . BASE_URL . 'pages/login.php');
        exit();
    }
}

// Vérifier le rôle de l'utilisateur
function has_role($role) {
    return isset($_SESSION['user_role']) && $_SESSION['user_role'] === $role;
}

// Rediriger si pas le bon rôle
function require_role($role) {
    if (!has_role($role) && !has_role(ROLE_ADMIN)) {
        header('Location: ' . BASE_URL . 'pages/index.php?error=unauthorized');
        exit();
    }
}

// Obtenir les infos de l'utilisateur connecté
function get_user_info() {
    if (is_logged_in()) {
        return array(
            'user_id' => $_SESSION['user_id'],
            'user_login' => $_SESSION['user_login'],
            'user_name' => $_SESSION['user_name'],
            'user_role' => $_SESSION['user_role']
        );
    }
    return null;
}

// Déconnexion
function logout() {
    session_destroy();
    header('Location: ' . BASE_URL . 'pages/login.php');
    exit();
}
?>