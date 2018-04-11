# Entités - User
 
 ## `Que doit faire un système de gestion des utilisateurs ?`
 
 On va commencer par des réponses simples :
  
* Inscription d’un utilisateur
* Connexion de l’utilisateur
* Affecter des droits (rôles)
* Récupérer son mot de passe
* Remplacer son mot de passe
 
## `User`

Les `User` sont les utilisateurs de l'application, qui peuvent se connecter dessus.  
Le niveau de permission minimal `ROLE_USER`.

Au délà, il y aura quelques utilisateurs `ROLE_SUPER_ADMIN`

Propriétés:
 * `id`
 * `username`
 * `firstname` et `lastname`
 * `email` les utilisateurs peuvent se connecter avec leur nom d'utilisateur ou leur adresse e-mail
 * `password`
 * `filePath` qui va mahérité par HasUploadedFileTrait - logo/photo



