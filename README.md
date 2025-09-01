# Minimalis — Tema blocchi minimale

**Requisiti:** WordPress 6.6+, PHP 7.4+

## Installazione rapida
1. Scarica lo ZIP di questo tema.
2. Vai in **Aspetto → Temi → Aggiungi nuovo → Carica tema** e carica lo ZIP.
3. Attiva **Minimalis**, poi apri **Editor del sito** per personalizzare colori, tipografia, layout e pattern.

## Struttura
- `theme.json` — imposta design system (colori, tipografia, spaziature, layout) e registra parti e pattern.
- `templates/` — template HTML a blocchi (home, index, page, single, 404).
- `parts/` — header e footer.
- `patterns/` — blocchi pronti riutilizzabili (hero, call-to-action).
- `style.css` — metadati del tema + eventuali ritocchi CSS.

## Consigli
- Personalizza palette e font da `theme.json` senza toccare CSS.
- Aggiungi nuovi pattern creando file `.html` in `patterns/` con intestazione (Title, Slug, Categories).
- Mantieni il tema “PHP-free” quando possibile: sfrutta i blocchi core e l’Editor del sito.
