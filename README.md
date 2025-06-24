# Kirby Dropzone Plugin (`gbd/dropzone`)

A visually optimized drag & drop file upload section for the Kirby Panel – focused on clean styling and minimal UI elements.

## Installation

### via Composer (recommended)

```bash
composer require gbd/dropzone
```

### Manual

Download the folder and place it in `/site/plugins/gbd-dropzone`.

## Usage

In your page blueprint:

```yaml
sections:
  fileuploader:
    extends: sections/dropzone
    sortBy: published desc
```

## Features

- Minimalistic drag & drop UI
- Unified styling for both file and empty states
- Upload icon and centered label
- No pagination, buttons, or sorting

## License

MIT

## Support

[GitHub Issues](https://github.com/gbdesign2023/dropzone/issues)
