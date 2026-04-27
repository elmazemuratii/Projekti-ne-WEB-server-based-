# Local Events & Hobby Finder

## Përshkrimi

Local Events & Hobby Finder është një aplikacion web i zhvilluar me **PHP, HTML dhe CSS**, që u mundëson përdoruesve të lidhen me evente lokale dhe komunitete sipas interesave të tyre.

Aplikacioni ofron funksionalitete bazë si **login/logout**, menaxhim eventesh dhe bashkim në grupe hobby.

Ky projekt është realizuar **pa databazë**, duke përdorur **Sessions dhe Cookies** për ruajtjen e të dhënave përkohësisht.

---

## Funksionalitetet kryesore

### Përdoruesi (User)
- Login / Logout  
- Shikimi i eventeve lokale  
- Bashkimi në grupe hobby  
- Krijimi i eventeve të reja  
- Menaxhimi i eventeve personale  
- Fshirja e eventeve të krijuara  

### Administratori (Admin)
- Qasje në Admin Panel  
- Shikim i statistikave bazike  
- Kontroll i sistemit (demo panel)  

---

## Teknologjitë e përdorura

- PHP (OOP)
- HTML5
- CSS3
- Sessions
- Cookies
- RegEx (validime server-side)

---

## Struktura e Projektit

```
/local-events-hobby-finder
│
├── /classes
│   ├── Event.php
│   ├── PremiumEvent.php
│   └── User.php
│
├── /includes
│   ├── header.php
│   ├── nav.php
│   ├── footer.php
│   └── auth.php
│
├── index.php
├── login.php
├── logout.php
├── events.php
├── groups.php
├── create-event.php
├── my-events.php
├── admin.php
├── style.css
└── README.md
```

## Udhëzime për Ekzekutim

### 1. Instalimi i serverit lokal
Instalo XAMPP, WAMP ose Laragon.

### 2. Vendosja e projektit
Vendose projektin në:C:\xampp\htdocs\local-events-hobby-finder\ 
### 3. Startimi i serverit
Aktivizo **Apache** nga XAMPP Control Panel.

> MySQL nuk është i nevojshëm.

### 4. Hapja në browser http://localhost/local-events-hobby-finder/ 
---

## Kredencialet për testim

### Admin
- Username: admin  
- Email: admin@mail.com  
- Password: 123  

### User
- Username: user  
- Email: user@mail.com  
- Password: 123  

---

## Sessions & Cookies

### Sessions përdoren për:
- login i përdoruesit  
- role (admin/user)  
- my_events  
- joined_groups  

### Cookies përdoren për:
- last_user (ruan përdoruesin e fundit të kyçur)  

---

## Validime (RegEx)

- Validim i numrit të kontaktit  
- Validim i emrit të qytetit  
- Të gjitha validimet bëhen në server-side (PHP)

---

## Shënim

Ky projekt është zhvilluar si **FAZA I e lëndës Web Programming**:

- Nuk përdor databazë  
- Përdor vetëm session-based storage  
- Fokus në PHP OOP dhe logjikë backend  

---

## Autore 
Elmaze Murati, Era Kerceli, Jora Axhami, Alma Jashari
