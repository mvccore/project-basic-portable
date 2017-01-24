# MvcCore - Project - Basic Portable

[![Latest Stable Version](https://img.shields.io/badge/Stable-v3.1.6-brightgreen.svg?style=plastic)](https://github.com/mvccore/project-basic-portable/releases)
[![License](https://img.shields.io/badge/Licence-BSD-brightgreen.svg?style=plastic)](https://github.com/mvccore/project-basic-portable/blob/master/LICENCE.md)
[![Packager Build](https://img.shields.io/badge/Packager%20Build-passing-brightgreen.svg?style=plastic)](https://github.com/mvccore/packager)
![PHP Version](https://img.shields.io/badge/PHP->=5.3-brightgreen.svg?style=plastic)

- [**MvcCore**](https://github.com/mvccore/mvccore) basic website project, source code for fully portable build, recomanded to pack with [**Packager**](https://github.com/mvccore/packager) in strict package mode or in any mixed mode with hard drive, all assets are linked with [**MvcCore Extension - View Helper Assets**](https://github.com/mvccore/ext-viewhelp-assets).
- Project lists only homepage template content and **it tries to list tables** from MySQL `cdcol` database, with root/1234 credentials by config.ini if possible.

## Instalation
```shell
# load project into 'development' directory, if directory doesn't exists, create it
composer create-project mvccore/project-basic-portable development
```
