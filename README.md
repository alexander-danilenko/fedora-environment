<p align="center">
  <img src="./logo.svg" width="33%"/>
</p>

<h1 align="center"><img src="https://cdn.svgporn.com/logos/fedora.svg" height="22" /> <strong>Fedora</strong> Environment for DevOps/WebDev</h1>
<p>
  <a href="./LICENSE" target="_blank">
    <img alt="License: MIT" src="https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge" />
  </a>
</p>

> This repo contains [Ansible](https://www.ansible.com/) playbook for fast and easy DevOps and Web Developer's Linux environment setup on [Fedora](https://getfedora.org/) and all its spins.

## TLDR

1. Adjust [`config.yml`](config.yml) for your needs
2. Run `./install` script
3. Let the ansible to do the magic
4. Your system set up is like a rocket! 🚀 You are ready to do the impossible!

## Motivation

Setting up a new developer's machine can be an ad-hoc, manual, and time-consuming process. The current project aims to simplify the process with an Ansible Playbook to automate the setup of the system for being a rockstar of DevOps and Web Development.

## Environment ingredients 

The following will be installed and configured for you:

- <img src="https://cdn.svgporn.com/logos/nodejs-icon.svg" height="14"> **Node.JS** (via [node version manager](https://github.com/nvm-sh/nvm)) + global **npm** packages
- <img src="https://cdn.svgporn.com/logos/php.svg" height="14"> **PHP** +  <img src="https://cdn.svgporn.com/logos/composer.svg" height="14"> **Composer** + global packages
- <img src="https://cdn.svgporn.com/logos/python.svg" height="14"> **Python** + **PIP** + global packages
- <img src="https://cdn.svgporn.com/logos/visual-studio-code.svg" height="14"> **Visual Studio Code** + extensions and themes
- <img src="https://cdn.svgporn.com/logos/jetbrains.svg" height="14"> **JetBrains Toolbox**
- <img src="https://cdn.svgporn.com/logos/docker-icon.svg" height="14"> **Docker** + <img src="https://d33wubrfki0l68.cloudfront.net/96d4dedb7aa3fbf371d01d3356a97ec463b23e04/ca713/images/docksal-mark-color.svg" height="14"> [**Docksal**](https://docksal.io/)
- <img src="https://cdn.svgporn.com/logos/aws.svg" height="14"> **AWS CLI**
- **TBD**: ~~<img src="https://cdn.svgporn.com/logos/google-cloud.svg" height="14"> **Google Cloud SDK**~~
- **TBD**: ~~<img src="https://cdn.svgporn.com/logos/kubernetes.svg" height="14"> **Kubernetes** + Minikube~~
- <img src="https://cdn.svgporn.com/logos/postman.svg" height="14"> **Postman**

- <img src="https://cdn.svgporn.com/logos/bash-icon.svg" height="14" /> **zsh** + [antigen](https://github.com/zsh-users/antigen)
- And so much more (see [`config.yml`](config.yml))...

## Prerequisites

Git and Ansible needs to be installed

```
sudo dnf install git ansible
```

## Install

```sh
./install
```

## 🐧 Distro compatibility

<p>
  <img alt="Fedora" src="https://img.shields.io/badge/Fedora-35-green.svg?style=for-the-badge" /><br/>
</p>

### <img src="https://cdn.svgporn.com/logos/debian.svg" height="16" /> What about Debian-based distros like <img src="https://cdn.svgporn.com/logos/ubuntu.svg" height="16" /> Ubuntu?

Check out the **[<img src="https://cdn.svgporn.com/logos/ubuntu.svg" height="12" /> Ubuntu Environment](https://github.com/alexander-danilenko/ubuntu-environment)** project.

## Author

👤 **Alexander Danilenko**

* Website: https://danilenko.in
* Github: [@alexander-danilenko](https://github.com/alexander-danilenko)
* LinkedIn: [@alexander-danilenko](https://linkedin.com/in/alexander-danilenko)

## 🤝 Contributing

Contributions, issues and feature requests are welcome!<br />Feel free to check [issues page](https://github.com/alexander-danilenko/fedora-environment/issues). 

Experiencing any problems with your distribution? [Raise and issue](https://github.com/alexander-danilenko/fedora-environment/issues/new)!

## Show your support

Give a ⭐️ if this project helped you!

## 📝 License

Copyright © 2021 [Alexander Danilenko](https://github.com/alexander-danilenko).<br />
This project is [MIT](./LICENSE) licensed.
