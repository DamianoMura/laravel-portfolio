# EX - Laravel Portfolio

## lessons 12,13,14

## Descrizione

## Nome repo: laravel-portfolio

Questo esercizio inizia oggi e lo continueremo fino alla fine del corso per creare passo dopo passo il nostro portfolio online!

### Svolgimento L12

Per oggi, dedichiamoci alla creazione del nostro portfolio, mettendo su un'app Laravel provvista di autenticazione grazie a Breeze.
Avviamo l'installazione di Laravel
Installiamo Breeze e Bootstrap -> io userò tailwind di default
Verifichiamo che l'autenticazione funzioni
Creiamo un layout per la nostra area admin

### Svolgimento L13

Procediamo al completamento delle operazioni CRUD sul modello Project:
Prepariamo le rotte per le pagine di creazione e modifica dei progetti
All'interno delle pagine, prepariamo i rispettivi form
Nella pagina di dettaglio del progetto, mostriamo la tipologia a cui il progetto appartiene (Web Design, Graphic Design, Back End...)
Nel controller, inseriamo la logica per il salvataggio di un nuovo progetto, per la sua modifica e per l'eliminazione
Nella tabella della pagina index, dovremo inserire i pulsanti su ciascuna riga, per permettere l'eliminazione e la modifica del singolo progetto. Inoltre, potremmo avere un singolo tasto in cima che ci porti alla pagina di creazione del progetto.

#### Bonus

Proviamo ad aggiungere un controllo: quando l'utente clicca sul pulsante "delete", chiediamo conferma della cancellazione, prima di eliminare l'elemento. Questa operazione possiamo farla a mano con JavaScript o aiutarci con i componenti Bootstrap.

### Svolgimento L14

I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:
Creiamo il modello Type ( io ho usato category), con relativa migrazione ed un seeder per inserire i types nel Database
Creiamo anche la migration per modificare la tabella projects, che dovrà ora contenere la chiave esterna type_id
Nei modelli Type e Project, aggiungiamo i metodi per definire la relazione one-to-many
Nella pagina di dettaglio del progetto, mostriamo il Type a cui il progetto appartiene. Volendo, potremmo anche aggiungere una colonna che indica il tipo nella tabella della pagina Index dei progetti.
Nei form di creazione e modifica dei progetti, dobbiamo permettere di associare un type al progetto stesso. Gestiamo inoltre il salvataggio di questa associazione progetto-tipologia nel controller ProjectController

#### Bonus

Aggiungere le operazioni CRUD anche per il model Type, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione.

### Svolgimento L15

In questo esercizio dovremo svolgere i diversi step che ci permetteranno di implementare il modello Technology e la sua relazione con i progetti:
Creiamo il modello Technology, la migration per la sua tabella ed un seeder.
Creiamo anche la migration per modificare la tabella projects, che dovrà ora contenere la chiave esterna type_id
Sarà inoltre necessario creare la tabella pivot project_technology, per gestire la relazione molti a molti
Nei modelli Technology e Project, dovremo aggiungere i metodi corretti per rappresentare la relazione molti a molti
Nei form di creazione e modifica dei progetti, dobbiamo permettere di associare una o più tecnologie al progetto stesso. Gestiamo inoltre il salvataggio di queste associazioni progetto-tecnologie nel controller ProjectController
All'interno della pagina di dettaglio di un modello, dovremo visualizzare in qualche modo la lista delle tecnologie utilizzate nel singolo progetto.

#### Bonus

Aggiungere le operazioni CRUD anche per il modello Technology, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione.
Potremmo modificare i seeder in modo tale da creare già le associazioni tra tecnologia e progetti quando viene popoliamo il database.
