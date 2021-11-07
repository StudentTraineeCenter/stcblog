# STCblog Wordpress theme
[![Build Status](https://dev.azure.com/microsoftstc/stcblog/_apis/build/status/template-deployment?branchName=main)](https://dev.azure.com/microsoftstc/stcblog/_build/latest?definitionId=7&branchName=main)
![CodeQL](https://github.com/MicrosoftSTC/stcblog/workflows/CodeQL/badge.svg)
[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

Wordpress theme of the STC blog [studuj.digital](https://studuj.digital/).

## About project
Based on [STCblog template](https://github.com/andreondra/stcblog).

## Features
### Responsive
![responsivity showcase](docs/img/readme1.gif)

### Mobile-ready menu
![menu on mobile](docs/img/readme2.gif)

### Animated search bar
![search bar](docs/img/readme3.gif)

### Support for [Easy Table of Contents](https://wordpress.org/plugins/easy-table-of-contents/)
![TOC](docs/img/readme4.gif)

## License and copyright
Project is licensed under GNU GPLv3.
(C) Ondrej Golasowski, Petr Kucera and [contributors](https://github.com/MicrosoftSTC/stcblog/graphs/contributors).

## Fabric UI changes
- [_Animation.Mixins.scss](https://github.com/MicrosoftSTC/stcblog/blob/63221c005b5d84a07a17b2a3bdeffef253cbe3a5/assets/scss/fabric/mixins/_Animation.Mixins.scss#L23-L30) - @mixin ms-motion-scaleDownIn doesn't retain state - set to none.
- [_Animation.Mixins.MDL2.scss](https://github.com/MicrosoftSTC/stcblog/blob/63221c005b5d84a07a17b2a3bdeffef253cbe3a5/assets/scss/fabric/mixins/_Animation.Mixins.MDL2.scss#L177) - change from an unqoted argument to an unchanged one. (see [#61](https://github.com/MicrosoftSTC/stcblog/pull/61))
