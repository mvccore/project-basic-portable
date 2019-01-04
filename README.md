# MvcCore - Basic Website Project Template [for portable packing/building]

[![Latest Stable Version](https://img.shields.io/badge/Stable-v5.0.0-brightgreen.svg?style=plastic)](https://github.com/mvccore/project-basic-portable/releases)
[![License](https://img.shields.io/badge/Licence-BSD-brightgreen.svg?style=plastic)](https://mvccore.github.io/docs/mvccore/4.0.0/LICENCE.md)
[![Packager Build](https://img.shields.io/badge/Packager%20Build-passing-brightgreen.svg?style=plastic)](https://github.com/mvccore/packager)
![PHP Version](https://img.shields.io/badge/PHP->=5.4-brightgreen.svg?style=plastic)

- [**MvcCore**](https://github.com/mvccore/mvccore) basic website project template, a source code for fully portable building/packing.
- With this project source only is not possible to create single file application pack/build. To do so, follow these steps in [**`mvccore/project-portable`**](https://github.com/mvccore/project-portable#user-content-instalation)
- Project is configured for packing with [**Packager**](https://github.com/mvccore/packager) in strict package mode but is possible to change it to needs for any mixed mode with hard drive.
- All assets are hardly linked for strict package mode with [**MvcCore Extension - View Helper Assets**](https://github.com/mvccore/ext-view-helper-assets).
- Project lists only homepage template content and **it tries to list tables** from MySQL `cdcol` database, with `root` login and empty password credentials by `/App/config.ini` if possible.

## Instalation
```shell
# load project template into './my-portable-project' (directory is created if doesn't exist)
composer create-project mvccore/project-basic-portable my-portable-project
```
