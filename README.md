<p align="center">
  <img alt="Repository logo" src="./logo.png" width="60%" />
</p>

<h1 align="center"><img src="https://cdn.svgporn.com/logos/fedora.svg" height="22" /> <strong>Fedora</strong> Environment for DevOps/WebDev</h1>

> This repo contains [Ansible](https://www.ansible.com/) playbook for fast and easy DevOps and Web Developer's Linux environment setup on [Fedora](https://getfedora.org/) and all its spins.

<p align="center">
  <a href="https://github.com/alexander-danilenko/fedora-environment/actions/workflows/test.yml">
    <img src="https://github.com/alexander-danilenko/fedora-environment/actions/workflows/test.yml/badge.svg?branch=main" />
  </a>
</p>

## TL;DR

1. `sudo dnf install ansible git rsync`
2. Adjust [`config.yml`](config.yml) for your needs
3. Run `./install` script
4. Wait for the ansible to do the magic

## Motivation

Setting up a new developer's machine can be an ad-hoc, manual, and time-consuming process. The current project aims to simplify the process with an Ansible Playbook to automate the setup of the system for being a rockstar of DevOps and Web Development.

## Environment ingredients 

The following will be installed and configured for you:

- <img src="https://upload.wikimedia.org/wikipedia/commons/d/d8/Fish-shell-logo-ascii.svg" height="14" /> **[fish](https://fishshell.com/)** shell + [oh-my-fish](https://github.com/oh-my-fish/oh-my-fish)
- <img src="https://cdn.svgporn.com/logos/nodejs-icon.svg" height="14"> **[Node.JS](https://nodejs.org)** (via [node version manager](https://github.com/nvm-sh/nvm)) + global **npm** packages
- <img src="https://cdn.svgporn.com/logos/php.svg" height="14"> **[PHP](https://www.php.net/)** + <img src="https://cdn.svgporn.com/logos/composer.svg" height="14"> **[Composer](https://getcomposer.org/)** + global packages
- <img src="https://cdn.svgporn.com/logos/python.svg" height="14"> **[Python](https://www.python.org/)** + **[PIP](https://pypi.org/)** + global packages
- <img src="https://cdn.svgporn.com/logos/visual-studio-code.svg" height="14"> **[Visual Studio Code](https://code.visualstudio.com/)** + extensions and themes
- <img src="https://cdn.svgporn.com/logos/jetbrains.svg" height="14"> **[JetBrains Toolbox](https://www.jetbrains.com/toolbox-app/)**
- <img src="https://cdn.svgporn.com/logos/docker-icon.svg" height="14"> **[Docker](https://www.docker.com)** + <img src="https://d33wubrfki0l68.cloudfront.net/96d4dedb7aa3fbf371d01d3356a97ec463b23e04/ca713/images/docksal-mark-color.svg" height="14"> [**Docksal**](https://docksal.io/)
- <img src="https://cdn.svgporn.com/logos/aws.svg" height="14"> **[AWS CLI](https://aws.amazon.com/cli/)**
- <img src="https://cdn.svgporn.com/logos/google-cloud.svg" height="14"> **[Google Cloud CLI](https://cloud.google.com/sdk)**
- <img src="https://www.vectorlogo.zone/logos/opentofu/opentofu-icon.svg" height="14"> **[OpenTofu](https://opentofu.org)** and <img src="https://cdn.svgporn.com/logos/terraform-icon.svg" height="14"> **[Terraform](https://terraform.io)**
- <img src="https://cdn.svgporn.com/logos/postman.svg" height="14"> **[Postman](https://www.postman.com/)**
- And so much more (see [`config.yml`](config.yml))...

## Prerequisites

`ansible`, `git` and `rsync` needs to be installed before running the install script:

```
sudo dnf install ansible git rsync
```

## Install

```sh
./install
```

## Local testing

Testing is automated using script that runs playbook against [Fedora Docker images](https://hub.docker.com/_/fedora).

See [test](./test) directory for more details.

## Show your support

Give a ⭐️ if this project helped you!

## 🤝 Contributing

Contributions, issues and feature requests are welcome!<br />Feel free to check [issues page](https://github.com/alexander-danilenko/fedora-environment/issues). 

Experiencing any problems with your distribution? [Raise and issue](https://github.com/alexander-danilenko/fedora-environment/issues/new/choose)!


## 📝 License

Copyright © 2021 [Alexander Danilenko](https://github.com/alexander-danilenko).<br />

<p>
  <a href="./LICENSE" target="_blank">
    <img alt="License: MIT" src="https://img.shields.io/badge/License-MIT-green.svg" />
  </a>
</p>
