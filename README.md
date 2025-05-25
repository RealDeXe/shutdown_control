# 🔌 Projet : Arrêter un PC Windows à distance via une interface Web locale

Ce projet permet de simuler un système embarqué qui envoie une commande d'arrêt au PC via une interface web, accessible depuis un smartphone (iPhone ou Android) connecté au même réseau local.

---

## 📦 Contenu du dossier

shutdown_control/
├── index.html ← Interface web accessible depuis le téléphone
└── shutdown.php ← Script PHP exécuté localement sur le PC

---

## ⚙️ Prérequis

- ✅ PC Windows
- ✅ XAMPP installé (avec Apache)
- ✅ Smartphone connecté au **même réseau Wi-Fi** que le PC
- ✅ Droits administrateur (pour que la commande `shutdown` fonctionne)

---

## 🚀 Étapes d'installation et d'exécution

### 1. Installer XAMPP
- Télécharger XAMPP : [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)
- Installer XAMPP avec les options par défaut
- Lancer le **XAMPP Control Panel**
- Démarrer **Apache**

---

### 2. Placer les fichiers du projet

- Copier le dossier `shutdown_control` dans le dossier `htdocs` de XAMPP :
C:\xampp\htdocs\shutdown_control\
---

### 3. Récupérer l'adresse IP locale du PC

- Ouvrir un terminal (`cmd.exe`)
- Taper la commande : ipconfig

- Copier l'adresse **IPv4** (ex : `192.168.1.15`)

---

### 4. Accéder à l’interface depuis le téléphone

- Depuis un navigateur (Safari ou Chrome) sur le téléphone :
http://192.168.1.15/shutdown_control/index.html
- Cliquer sur le bouton **"Envoyer l'ordre d'arrêt"**

---

## ⚠️ Remarques

- Le PC et le téléphone doivent être **connectés au même réseau Wi-Fi**
- Le **pare-feu Windows peut bloquer l’accès** : autoriser Apache dans les règles du pare-feu
- La commande `shutdown` peut nécessiter l’exécution de XAMPP en mode administrateur

---

## ✅ Exemple de démonstration

- Adresse IP du PC : `192.168.1.15`
- Lien de contrôle depuis le téléphone :  
👉 `http://192.168.1.15/shutdown_control/index.html`

---

## 🛡️ Sécurité

Par défaut, aucune authentification n’est requise. Pour ajouter un mot de passe :
- Ajouter un champ dans `index.html`
- Vérifier la valeur dans `shutdown.php` avant d’exécuter l’arrêt
- mot de pass actuel :1234 / possible a modifier d'apartir du ficher `shutdown.php`
---

## 👨‍💻 Auteur

Projet démonstratif réalisé pour présenter une interaction simple entre une interface web distante et un système local (simulation de système embarqué).
