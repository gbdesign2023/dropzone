# Kirby Dropzone Plugin (`gbd/dropzone`)

Ein visuell optimiertes Drag-&-Drop-Dateiupload-Feld für das Kirby Panel – mit klarer Darstellung und reduzierten UI-Elementen.

## Installation

### per Composer (empfohlen)

```bash
composer require gbd/dropzone
```

### Manuell

Ordner herunterladen und unter `/site/plugins/gbd-dropzone` ablegen.

## Verwendung

In einem Page-Blueprint:

```yaml
sections:
  fileuploader:
    extends: sections/dropzone
    sortBy: published desc
```

## Funktionen

- Minimalistisches Drag-&-Drop-Interface
- Einheitliches Styling für Datei- und Leerzustand
- Upload-Icon und zentrierter Text
- Keine Paginierung, keine Buttons, keine Sortierung

## Lizenz

MIT

## Support

[GitHub Issues](https://github.com/gbdesign2023/dropzone/issues)
