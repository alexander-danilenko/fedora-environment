# Fedora dotfiles

This repo contains [Ansible](https://www.ansible.com/) script for fast and easy web developer environment setup on [Fedora](https://getfedora.org/) and destributions based on it.

## TL;DR

1. 📝 Open [`config.yml`](config.yml) and adjust for your needs
2. ✨ Run `./install` script
3. ✅ Done, your system now is fully loaded with all useful web developer tools! 

## Motivation

Setting up a new developer machine can be an ad-hoc, manual, and time-consuming process. The current project aims to simplify the process with instructions and dotfiles/scripts to automate the setup of the apps and tools useful for web development.

## Applications list

Following tools will be installed:

- **Node** (via [nvm](https://github.com/nvm-sh/nvm)) with global **npm** packages
- **PHP** + **Composer** with global packages
- **Python** + **PIP** with global packages
- **Visual Studio Code** with extensions and themes
- **JetBrains Toolbox**
- **Postman**
- **Docker** + [**Docksal**](https://docksal.io/)
- **zsh** + [antigen](https://github.com/zsh-users/antigen) + [gorilla config](home/.zshrc)
- CLI utilities and tools
- Office, Media apps, Internet apps and many-many more (see [`config.yml`](config.yml) file).

## Requirements

- **Fedora 33**

**Fedora** here means [Fedora](https://getfedora.org/) itself and all its flavors.

- - -

## MIT License

Copyright (c) 2021 [Alexander Danilenko](https://github.com/alexander-danilenko)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
