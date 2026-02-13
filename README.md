# Articolo-Laravel

Questo progetto è un'esercitazione pratica realizzata in Laravel per la gestione di uno store online di articoli. 

## Funzionalità implementate
- **Visualizzazione Lista**: Una tabella dinamica che mostra tutti gli articoli presenti nel database.
- **Dettaglio Articolo**: Visualizzazione singola di ogni prodotto tramite ID.
- **Aggiunta Articolo**: Form dedicato per l'inserimento di nuovi record nel database con protezione CSRF.

## Struttura del Progetto
L'applicazione segue l'architettura **MVC (Model-View-Controller)**:
- **Model**: `Articolo.php` (collegato alla tabella `articoli`).
- **Controller**: `ArticoloController.php` (gestisce la logica di visualizzazione e salvataggio).
- **Views**: Template realizzati con **Blade** e stilizzati con **Bootstrap 5**.

## Requisiti e Installazione
1. Clonare il repository.
2. Eseguire `composer install` per installare le dipendenze.
3. Configurare il file `.env` con le credenziali del database MySQL.
4. Creare la tabella nel database usando il seguente SQL:
   ```sql
   CREATE TABLE articoli (
       id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
       nome VARCHAR(30) NOT NULL,
       descrizione VARCHAR(100),
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
       updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   );