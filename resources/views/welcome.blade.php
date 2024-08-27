<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documentation API - Dispro</title>
<style>
  body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #333;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }
  h1 {
    color: #2c3e50;
    border-bottom: 2px solid #3498db;
    padding-bottom: 10px;
  }
  h2 {
    color: #2980b9;
  }
  .endpoint {
    background-color: #f9f9f9;
    border-left: 4px solid #3498db;
    padding: 10px;
    margin-bottom: 20px;
  }
  .method {
    font-weight: bold;
    color: #e74c3c;
  }
  .path {
    color: #27ae60;
  }
  .description {
    margin-top: 10px;
  }
  .parameters {
    margin-top: 10px;
    font-size: 0.9em;
    color: #7f8c8d;
  }
  .param-name {
    font-weight: bold;
    color: #2c3e50;
  }
</style>
</head>
<body>
  <h1>Documentation API - Dispro</h1>
  
  <p>Bienvenue dans la documentation de l'API Dispro. Cette API vous permet de gérer les voitures, les utilisateurs, les compteurs, et les maintenances pour la société Dispro. Vous trouverez ci-dessous les points de terminaison disponibles et leurs descriptions.</p>

  <h2>Authentification</h2>
  
  <div class="endpoint">
    <span class="method">POST</span> <span class="path">/api/login</span>
    <div class="description">Permet à un utilisateur de se connecter en utilisant ses identifiants (email et mot de passe). Un jeton d'authentification (token) est retourné si les identifiants sont corrects.</div>
    <div class="parameters">
      <p><span class="param-name">Corps de la requête (JSON) :</span></p>
      <ul>
        <li><strong>email</strong> : string, requis - L'adresse email de l'utilisateur.</li>
        <li><strong>password</strong> : string, requis - Le mot de passe de l'utilisateur.</li>
      </ul>
    </div>
  </div>

  <div class="endpoint">
    <span class="method">POST</span> <span class="path">/api/logout</span>
    <div class="description">Déconnecte l'utilisateur en invalidant le jeton d'authentification actuel.</div>
    <div class="parameters">
      <p><strong>En-tête de la requête :</strong></p>
      <ul>
        <li><strong>Authorization</strong> : Bearer Token, requis - Le jeton d'authentification de l'utilisateur à déconnecter.</li>
      </ul>
    </div>
  </div>

  <h2>Voitures</h2>
  
  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/cars</span>
    <div class="description">Récupère une liste de toutes les voitures.</div>
  </div>

  <div class="endpoint">
    <span class="method">POST</span> <span class="path">/api/cars</span>
    <div class="description">Crée une nouvelle entrée pour une voiture.</div>
    <div class="parameters">
      <p><span class="param-name">Corps de la requête (JSON) :</span></p>
      <ul>
        <li><strong>matricule</strong> : string, requis - Le numéro de matricule de la voiture.</li>
        <li><strong>nombre_de_chevaux</strong> : integer, requis - Le nombre de chevaux de la voiture.</li>
      </ul>
    </div>
  </div>

  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/cars/{id}</span>
    <div class="description">Récupère les détails d'une voiture spécifique.</div>
  </div>

  <div class="endpoint">
    <span class="method">PUT/PATCH</span> <span class="path">/api/cars/{id}</span>
    <div class="description">Met à jour les détails d'une voiture spécifique.</div>
    <div class="parameters">
      <p><span class="param-name">Corps de la requête (JSON) :</span></p>
      <ul>
        <li><strong>matricule</strong> : string, optionnel - Le nouveau numéro de matricule de la voiture.</li>
        <li><strong>nombre_chevaux</strong> : integer, optionnel - Le nouveau nombre de chevaux de la voiture.</li>
      </ul>
    </div>
  </div>

  <div class="endpoint">
    <span class="method">DELETE</span> <span class="path">/api/cars/{id}</span>
    <div class="description">Supprime une voiture spécifique du système.</div>
  </div>

  <h2>Utilisateurs</h2>
  
  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/users</span>
    <div class="description">Récupère une liste de tous les utilisateurs.</div>
  </div>

  <div class="endpoint">
    <span class="method">POST</span> <span class="path">/api/users</span>
    <div class="description">Crée un nouveau compte utilisateur.</div>
    <div class="parameters">
      <p><span class="param-name">Corps de la requête (JSON) :</span></p>
      <ul>
        <li><strong>name</strong> : string, requis - Le nom complet de l'utilisateur.</li>
        <li><strong>email</strong> : string, requis - L'adresse email de l'utilisateur.</li>
        <li><strong>password</strong> : string, requis - Le mot de passe de l'utilisateur.</li>
      </ul>
    </div>
  </div>

  <div class="endpoint">
    <span class="method">PUT/PATCH</span> <span class="path">/api/users/{id}</span>
    <div class="description">Met à jour les détails d'un utilisateur spécifique.</div>
  </div>

  <div class="endpoint">
    <span class="method">DELETE</span> <span class="path">/api/users/{id}</span>
    <div class="description">Supprime un utilisateur spécifique du système.</div>
  </div>

  <h2>Compteurs</h2>
  
  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/counts</span>
    <div class="description">Récupère une liste de tous les compteurs.</div>
  </div>

  <div class="endpoint">
    <span class="method">POST</span> <span class="path">/api/counts</span>
    <div class="description">Crée un nouveau compteur.</div>
    <div class="parameters">
      <p><span class="param-name">Corps de la requête (JSON) :</span></p>
      <ul>
        <li><strong>user_id</strong> : integer, requis - L'ID de l'utilisateur associé.</li>
        <li><strong>car_id</strong> : integer, requis - L'ID de la voiture associée.</li>
        <li><strong>start_time</strong> : date, requis - La date et l'heure de début.</li>
        <li><strong>end_time</strong> : date, optionnel - La date et l'heure de fin.</li>
        <li><strong>distance</strong> : numeric, requis - La distance parcourue.</li>
      </ul>
    </div>
  </div>

  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/counts/{id}</span>
    <div class="description">Récupère les détails d'un compteur spécifique.</div>
  </div>

  <div class="endpoint">
    <span class="method">PUT/PATCH</span> <span class="path">/api/counts/{id}</span>
    <div class="description">Met à jour les détails d'un compteur spécifique.</div>
  </div>

  <div class="endpoint">
    <span class="method">DELETE</span> <span class="path">/api/counts/{id}</span>
    <div class="description">Supprime un compteur spécifique du système.</div>
  </div>

  <h2>Maintenances</h2>
  
  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/maintenances</span>
    <div class="description">Récupère une liste de toutes les maintenances.</div>
  </div>

  <div class="endpoint">
    <span class="method">POST</span> <span class="path">/api/maintenances</span>
    <div class="description">Crée une nouvelle entrée de maintenance.</div>
    <div class="parameters">
      <p><span class="param-name">Corps de la requête (JSON) :</span></p>
      <ul>
        <li><strong>car_id</strong> : integer, requis - L'ID de la voiture associée.</li>
        <li><strong>date</strong> : date, requis - La date de la maintenance.</li>
        <li><strong>details</strong> : string, requis - Les détails de la maintenance.</li>
        <li><strong>kilometers</strong> : numeric, requis - Le kilométrage au moment de la maintenance.</li>
      </ul>
    </div>
  </div>

  <div class="endpoint">
    <span class="method">GET</span> <span class="path">/api/maintenances/{id}</span>
    <div class="description">Récupère les détails d'une maintenance spécifique.</div>
  </div>

  <div class="endpoint">
    <span class="method">PUT/PATCH</span> <span class="path">/api/maintenances/{id}</span>
    <div class="description">Met à jour les détails d'une maintenance spécifique.</div>
  </div>

  <div class="endpoint">
    <span class="method">DELETE</span> <span class="path">/api/maintenances/{id}</span>
    <div class="description">Supprime une maintenance spécifique du système.</div>
  </div>

  <p><strong>Note :</strong> Toutes les routes de cette API sont protégées et nécessitent une clé API valide, et pour certaines routes, une authentification utilisateur. Pour accéder à n'importe quelle ressource de l'API, vous devez inclure la clé API dans les en-têtes de vos requêtes sous le champ <code>X-API-KEY</code>. La clé API requise est : <code>supersecretapikey12345</code>. 

  En plus de la clé API, les routes protégées par l'authentification nécessitent également un jeton d'authentification. Vous devez inclure ce jeton dans les en-têtes de vos requêtes en utilisant le schéma "Bearer Token" dans le champ <code>Authorization</code>.

  Si vous tentez d'accéder à une route protégée sans une clé API valide ou sans être authentifié (pour les routes nécessitant un jeton), une réponse avec un statut HTTP 401 (Unauthorized) sera retournée.</p>

</body>
</html>
