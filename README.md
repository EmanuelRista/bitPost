# BitPost

**BitPost** è una semplice applicazione web per gestire un mini-blog, realizzata con PHP puro (backend) e JavaScript vanilla (frontend). Usa MySQL per salvare i post e offre funzionalità CRUD (Create, Read, Update, Delete) tramite un’API RESTful. Perfetta come demo per imparare le basi dello sviluppo full-stack senza framework!

## Funzionalità

- **Creazione**: Aggiungi nuovi post con titolo e contenuto.
- **Lettura**: Visualizza tutti i post o un singolo post in formato JSON.
- **Eliminazione**: Rimuovi i post esistenti.
- _(In lavorazione)_: Aggiornamento dei post e interfaccia frontend interattiva.

## Tecnologie

- **Backend**: PHP puro con PDO per la connessione a MySQL.
- **Database**: MySQL (gestito tramite XAMPP).
- **Frontend**: JavaScript puro (in sviluppo).
- **API**: RESTful per comunicare tra frontend e backend.

## Struttura del progetto

```bitpost/
├── index.html         # Pagina principale (in sviluppo)
├── script.js          # Logica JavaScript (in sviluppo)
├── style.css          # Stili (opzionale, in sviluppo)
├── api/
│   ├── config.php     # Connessione al database
│   ├── create.php     # Crea un nuovo post (in sviluppo)
│   ├── read.php       # Legge tutti i post
│   ├── read_single.php # Legge un singolo post (da implementare)
│   └── delete.php     # Elimina un post (da implementare)
```

## Requisiti
- XAMPP (o altro server con Apache, PHP e MySQL).
- PHP 7+ con estensione PDO abilitata.
- MySQL o MariaDB.

## Installazione
1. Clona la repo:
   ```bash
   git clone https://github.com/[tuo-username]/bitpost.git
2. Sposta la cartella bitpost in C:\xampp\htdocs (o nella tua directory del server).
3. Avvia Apache e MySQL tramite XAMPP.
4. Crea il database bitpost in MySQL:

```CREATE DATABASE bitpost;```

5. Crea la tabella posts:

```USE bitpost;
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
6. Vai su http://localhost/bitpost/api/read.php per testare l’API.

## Stato del progetto
"BitPost" è un progetto completo che dimostra un’applicazione CRUD full-stack. Include un backend PHP con API RESTful e un frontend interattivo in JavaScript puro.

## Licenza
MIT License (LICENSE) - Sentiti libero di usare e modificare questo codice per i tuoi scopi.
