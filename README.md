Creiamo una tabella trains e relativa Migration
Ogni treno dovrà avere almeno:
- id BIGINT AI PK UQ
- Azienda VARCHAR(20)
- Stazione di partenza VARCHAR(58)
- Stazione di arrivo VARCHAR(58)
- Orario di partenza DATETIME
- Orario di arrivo DATETIME
- Codice Treno VARCHAR(6)
- Numero Carrozze TINYINT
- In orario BOOLEAN
- Cancellato BOOLEAN
- created_at
- updated_at
<!-- È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto :occhiolino: -->
Inserite inizialmente i dati tramite PhpMyAdmin o artisan tinker per chi ne ha capito l'utilizzo.

Create il modello `Model relativo` alla migrazione che avete predisposto al fine di mappare la tabelle del db ed un Controller per `mostrare nella home page tutti i treni che sono in partenza dalla data odierna`.


